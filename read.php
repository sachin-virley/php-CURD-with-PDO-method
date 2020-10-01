<?php

include("Connection.php");

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
