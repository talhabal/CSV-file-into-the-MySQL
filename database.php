<?php 
$host="localhost"; 
$database="challenge"; 
$username="root"; 
$password=""; 

try {
	$db=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$username,$password);
}
catch (PDOException $e) {
	echo $e->getMessage();
}
?>