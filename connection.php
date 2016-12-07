<?php 
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');


// $serverName = "localhost";
// $userName = "root";
// $password = "root";
// $dbName = "Juarez Design";

$connect = new mysqli($serverName, $userName, $password, $dbName);

if ($connect -> connect_error) {
	die("Connection failed: " . $connect -> connect_error);
}

?>