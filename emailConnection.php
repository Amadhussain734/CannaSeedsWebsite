<?php
$server = 'localhost';
$user = 'root';
$db = 'cannabis';
$password = '';

$sqlConnection = new mysqli($server,$user,$password,$db);

if ($sqlConnection->connect_error) {
	# code...
	echo "error".$sqlConnection->connect_error;
}else{
	$email = $_POST['email'];

	$sql_query = "INSERT INTO `email subscription`(`Email ID`) VALUES('$email')";

	if ($sqlConnection->query($sql_query)){
	# code...

}

header('refresh: 0,url = index.php');

}


?>