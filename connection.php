<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="cms";

$connection = mysqli_connect($servername,$username,$password,$dbname);

if ($connection) {
	echo "connection ok !!!";
}

else{
	die("connection is failed".mysqli_connect_error());
}

?>