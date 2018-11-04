<?php

$host = 'localhost';
$user = 'root';
$password = '';
$name = 'databse_name';

$dsn = "mysql:host=".$host.";dbname=".$name;

try{
    $pdo = new PDO($dsn,$user,$password);
}
catch(PDOException $e){
    exit("Error :".$e->getMessage());
}

$variable = //Enter value;
$sql = "DELETE FROM table_name WHERE datbase_column = (:value)";
$query = $pdo->prepare($sql);
$query->execute();
echo "deleted";