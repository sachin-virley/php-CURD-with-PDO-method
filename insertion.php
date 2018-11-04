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
