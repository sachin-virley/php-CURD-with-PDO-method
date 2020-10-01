<?php

inlcude("Connection.php");
$variable = //Enter value;
$sql = "DELETE FROM table_name WHERE datbase_column = (:value)";
$query = $pdo->prepare($sql);
$query->execute();
echo "deleted";
