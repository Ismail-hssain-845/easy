<?php
   $host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname ='easy_shop';
	
	$con = new mysqli($host,$user,$pass);
	
	$sql = "CREATE DATABASE $dbname";
	$con->query($sql);
    
    $con = new mysqli($host,$user,$pass,$dbname);
	$sql = 'CREATE TABLE users(
		id INT(6) PRIMARY KEY AUTO_INCREMENT,
		name VARCHAR(50),
		email VARCHAR(50),
		pass VARCHAR(20),
		role TINYINT(1)
	)';
	if($con->query($sql)){
		echo 'Table users created Successfully<br>';
	}
	else{
		echo'pt not created';
	}
	$sql = 'CREATE TABLE products(
		id INT(6) PRIMARY KEY AUTO_INCREMENT,
		name VARCHAR(50),
		price INT (50),
		description VARCHAR(100),	
        image VARCHAR(100)		
	)';

if($con->query($sql)){
		echo 'Table tblproducts created Successfully<br>';
	}

	?>