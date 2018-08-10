<?php

require_once "config.php";
$dbHost = sprintf('mysql:host=%s;dbname=%s;charset=%s', HOST, DB, CHAR);
$db = new PDO($dbHost, USER, PASS);

function getAllCats() {
    $sql = "SELECT * FROM tb_cats";
    $statement = $GLOBALS['db']->query($sql);
    // $statement =  global $db->query($sql);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

/* * *********************************************************** */

/* * ******************* FÜR JS ******************************** */
if (isset($_GET['flag'])) {
    if ($_GET['flag'] == '0' && isset($_POST['id'])) {
        $sql = "SELECT * FROM tb_cats WHERE id = '" . $_POST['id'] . "'";
        $statement = $db->query($sql);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($rows);
    }
}
//function getAllCats() {
//    $sql = "SELECT * FROM tb_cats";
//    $statement = $GLOBALS['db']->query($sql);
//    // $statement =  global $db->query($sql);
//    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//    return $rows;
//}
///*-------------------- FÜR JS -------------------*/
//if(isset($_GET['flag'])){
//if ($_GET['flag'] == '0' && isset($_POST['id'])) {
//        $sql = "SELECT * FROM tb_cats WHERE id='".$_POST['id']."'";        
//        $statement = $db->query($sql);
//        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
//        echo json_encode($rows);
// } 
//
//}

