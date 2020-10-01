<?php
include("Connection.php");

$sql = "SELECT * FROM tablename";
$querry = $pdo->prepare($sql);
$querry->execute();
$rowcount = $querry->rowCount();
echo $rowcount;
