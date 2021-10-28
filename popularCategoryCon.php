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
	$category_id = $_GET['category_id'];
	$productName = $_GET['productName'];
	$image_path = $_GET['image_path'];
	$product_price = $_GET['product_price'];

	$sql= "INSERT INTO `popularcategory`(`category_id`,`productName`,`image_path`,`product_price`) VALUES
	('$category_id','$productName','$image_path','$product_price')";
	
	if ($con->query($sql)){
		echo "data inserted successfully";
	}
	header('refresh:0; url=products.php');
}
?>