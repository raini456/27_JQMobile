<?php

require_once './config.php';
    $dbHost = sprintf('mysql:host=%s;dbname=%s;charset=%s', HOST, DB, CHAR);
    $db = new PDO($dbHost, USER, PASS);
    if($dbHost){
        echo "Datenbankverbindung steht!";
    }
    function getAllCats(){
        $sql ="SELECT * FROM tb_cats";
        $statement = $GLOBALS['db']->query($sql);
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;       
    }
    