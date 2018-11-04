<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'databse name';

//set DSN (data source network)
$dsn = 'mysql:host='. $host .';dbname='.$dbname;
try{
$db = new PDO($dsn,$user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    echo "connected","<br>";
}
catch(PDOException $e){
    exit("error :".$e->$getMessage());
}
    
    $var1 = 'value1';
    $var2 = 'value2';
    $varint = 00;//integer value

    $query = "UPDATE table_name SET col1=(:value1), col2=(:value2) WHERE col3=(:value3)";
    $sql = $db->prepare($query);
    $sql->execute(['value1'=>$var1, 'value2'=>$var2, 'value3'=>$var3]);
    echo "UPDATED";

?>

