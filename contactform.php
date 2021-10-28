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
	$name = $_POST['name'];
	$country = $_POST['country'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];

	$sql_query = "INSERT INTO `contactform`(`Full Name`,`Select Country`,`Contact No.`,`Email Address`,`Comments/Suggestions`) VALUES('$name','$country','$contact','$email','$comments')";

	if ($sqlConnection->query($sql_query)){
	# code...

}
header('refresh: 0,url = contactus.php');

}


?>