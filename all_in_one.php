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


// INSERTION OPERATION
$var1 = "value1";
$var2 = "value2";
$varint = 00;//integer value
//sql query
$sql = "INSERT INTO table_name(col1, col2, col3) VALUES (:value1,:value2,:value3)";
$stmt = $pdo->prepare($sql);
//executing array
$stmt->execute(['value1'=>$var1,'value2'=>$var2,'value3'=>$varint]);
echo "data added";

//UPDATE OPERATION
$var1 = 'value1';
$var2 = 'value2';
$varint = 00;//integer value

$query = "UPDATE table_name SET col1=(:value1), col2=(:value2) WHERE col3=(:value3)";
$sql = $db->prepare($query);
$sql->execute(['value1'=>$var1, 'value2'=>$var2, 'value3'=>$var3]);
echo "UPDATED";


// READ OPERATION

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

// DELETE OPERATION
$variable = //Enter value;
$sql = "DELETE FROM table_name WHERE datbase_column = (:value)";
$query = $pdo->prepare($sql);
$query->execute();
echo "deleted";

?>
