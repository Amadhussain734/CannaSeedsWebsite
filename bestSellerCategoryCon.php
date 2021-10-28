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
	$product_name = $_GET['product_name'];
	$image = $_GET['image'];
	$price = $_GET['price'];
	$product_reviews = $_GET['product_reviews'];

	$sql= "INSERT INTO `bestsellerscategory`(`category_id`,`product_name`,`image`,`price`,`product_reviews`) VALUES
	('$category_id','$product_name','$image','$price','$product_reviews')";
	
	if ($con->query($sql)){
		echo "data inserted successfully";
	}
	header('refresh:0; url=products.php');
}
?>