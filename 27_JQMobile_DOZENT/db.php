<?php

        define('HOST', 'localhost');
        define('DB', 'clubbing_db');
        define('USER', 'root');
        define('PASS', '');
        define('CHAR', 'utf8mb4');

        $dbHost = sprintf('mysql:host=%s;dbname=%s;charset=%s', HOST, DB, CHAR);
        $db = new PDO($dbHost, USER, PASS);

   /****************************************************************/     
     function getAllClubs(){
            $sql = "SELECT * FROM clubs";            
            $statement =  $GLOBALS['db']->query($sql);
            // $statement =  global $db->query($sql);
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
      }
   /**************************************************************/   
      
   /********************* FÜR JS *********************************/ 
      if(isset($_GET['flag'])){
        if($_GET['flag'] == '0' && isset($_POST['id'])){
              $sql = "SELECT * FROM clubs WHERE id = '".$_POST['id']."'";            
              $statement = $db->query($sql);
              $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
              echo json_encode($rows);
        }
      }
?>