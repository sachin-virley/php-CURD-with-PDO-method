<?php

$host = 'localhost';
$user = 'root';
$password = '';
$name = 'database name';

$dsn = "mysql:host=".$host.";dbname=".$name;

try{
    $pdo = new PDO($dsn,$user,$password);
}
catch(PDOException $e){
    exit("Error : ".$e->getMessage());
}

$sql = "SELECT * FROM tablename";
$querry = $pdo->prepare($sql);
$querry->execute();
$rowcount = $querry->rowCount();
echo $rowcount;
