$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'database name';

//set DSN (data source network)
$dsn = 'mysql:host='. $host .';dbname='.$dbname;

Now add include('connection.php') after starting tags of php in all the other files rather than writing above code again and again.
