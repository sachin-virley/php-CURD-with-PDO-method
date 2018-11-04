<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $name = 'databse name';

    $dsn = "mysql:host=".$host.";dbname=".$name;
    try{
        $conn = new PDO($dsn, $user, $password);
    }
    catch(PDOException $e){
        exit("Error : ".$e->getMessage());
    }


    $sql = "SELECT * FROM table_name";
    $querry = $conn->prepare($sql);
    $querry->execute();
    $result= $querry->fetchAll(PDO::FETCH_OBJ);
    foreach($result as $r){
        echo "<br>";
        echo "<br>".$r->database_value1;
        echo "<br>".$r->database_value2;
        echo "<br>".$r->database_value3;
        echo "<br>";
    }