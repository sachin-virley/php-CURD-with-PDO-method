<?php
include("Connection.php");


//setting up variable values    
$var1 = "value1";

$var2 = "value2";

$varint = 00;//integer value


//sql query
$sql = "INSERT INTO table_name(col1, col2, col3) VALUES (:value1,:value2,:value3)";
$stmt = $pdo->prepare($sql);

//executing array
$stmt->execute(['value1'=>$var1,'value2'=>$var2,'value3'=>$varint]);

echo "data added";
