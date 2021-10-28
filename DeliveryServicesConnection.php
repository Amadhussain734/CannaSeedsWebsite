<?php
//4 variables
$server='localhost';
$user='root';
$database='cannabis';
$password='';
//create database connection object,using mysql we can access mysql server,pdli access non database server
$con = new mysqli($server,$user,$password,$database);
//now we will acces database tables through this connection object

if($con->connect_error){
echo "error".$con->connect_error;

}else{
	//echo "database connection established successfully";
	$type_id = $_GET['type_id'];
	$imageURL = $_GET['imageURL'];
	$typeName = $_GET['typeName'];
	$product_price = $_GET['product_price'];

	$sql= "INSERT INTO `deliveryservices`(`type_id`,`imageURL`,`typeName`) VALUES
	('$type_id','$imageURL','$typeName')";
	
	if ($con->query($sql)){
		echo "data inserted successfully";
	}
	header('refresh:0; url=products.php');
}
?>