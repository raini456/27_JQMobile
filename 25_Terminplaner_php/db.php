<?php

if(isset($_GET['flag'])){
    
        define('HOST', 'localhost');
        define('DB', 'termine_db');
        define('USER', 'root');
        define('PASS', '');
        define('CHAR', 'utf8');

        $dbHost = sprintf('mysql:host=%s;dbname=%s;charset=%s', HOST, DB, CHAR);
        $db = new PDO($dbHost, USER, PASS);

        if($_GET['flag'] == '0'){
            $sql = "SELECT * FROM termine ORDER BY datum";
            $statement = $db->query($sql);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);
        }
        
        if($_GET['flag'] == '1'){
            $sql = "SELECT * FROM termine WHERE datum ='2018-08-28'";
            $statement = $db->query($sql);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);
        }
        
        if($_GET['flag'] == '2' && isset($_GET['id']) ){
            $sql = "DELETE FROM termine WHERE id ='".$_GET['id']."'";
            $statement = $db->query($sql);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($rows);
        }
        
        if($_GET['flag'] == '3' && isset($_POST['titel']) ){
$sql = "INSERT INTO termine (titel,datum,zeit,bemerkung,kategorie) "
        . "VALUES (:t,:d,:z,:b,:k)";
               $statement = $db->prepare($sql);
               $statement->bindValue(':t', $_POST['titel']);
               $statement->bindValue(':d', $_POST['datum']);
               $statement->bindValue(':z', $_POST['zeit']);
               $statement->bindValue(':b', $_POST['bemerkung']);
               $statement->bindValue(':k', $_POST['kategorie']);               
           $statement->execute();
            
            $msg = $_POST['titel']."\n\r".$_POST['datum']."\n\r".$_POST['zeit']."\n\r".$_POST['kategorie']."\n\r".$_POST['bemerkung'];
                        
            $file = fopen("output.txt","w+");
                    fputs($file,$msg);
                    fclose($file);                    
                    
            
            
            echo json_encode($msg);
        }
        

}else{
    echo "ES IST EIN FEHLER AUFGETRETEN, .... !!!";
}

/*
 INSERT INTO `termine` (`id`, `titel`, `datum`, `zeit`, `bemerkung`, `kategorie`) VALUES
(2, 'Tennis mit Sergio ', '2018-08-28', '19:00:00', 'Der hat doch keine Chance :-)', 3),
(3, 'Bella Birthday', '2018-08-10', '12:00:00', 'Einfach mal tach sagen', 1),
(4, 'Zahnarzt im Storkower Bogen', '2018-08-28', '09:00:00', 'Wie Urlaub', 1);
*/
