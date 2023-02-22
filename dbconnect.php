<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "test";

//create connection

$con = mysqli_connect($servername,$username,$password,$dbName);

if(mysqli_connect_errno()){
	echo "failed to connected";
	exit();
}
?>