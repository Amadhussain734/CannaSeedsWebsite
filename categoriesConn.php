<?php
//4 variables
$server='localhost';
$user='root';
$database='db_cannabis';
$password='';
//create database connection object,using mysql we can access mysql server,pdli access non database server
$con = new mysqli($server,$user,$password,$database);
//now we will acces database tables through this connection object

if($con->connect_error){
echo "error".$con->connect_error;

}else{
	//echo "database connection established successfully";
	$category_id = $_GET['category_id'];
	$image = $_GET['image'];
	$name = $_GET['name'];

	$sql= "INSERT INTO `categories`(`category_id`,`image`,`name`) VALUES
	('$category_id','$image','$name')";
	
	if ($con->query($sql)){
		echo "data inserted successfully";
	}
	header('refresh:0; url=products.php');
}
?>