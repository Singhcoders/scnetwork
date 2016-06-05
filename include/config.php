<?php
define('HOST_NAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'sc_social');
try{
	
$host = HOST_NAME;
$user = USERNAME;
$pass= PASSWORD;
$db = DATABASE;
$conn = new PDO("mysql:host=$host;dbname=$db",$user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }