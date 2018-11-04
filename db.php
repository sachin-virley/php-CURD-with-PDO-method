<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'database name';

    //set DSN (data source network)
    $dsn = 'mysql:host='. $host .';dbname='.$dbname;
    try{
    $pdo = new PDO($dsn,$user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        echo "connected","<br>";
    }
    catch(PDOException $e){
        exit("error :".$e->$getMessage());
    }
?>