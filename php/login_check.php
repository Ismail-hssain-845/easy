<?php
session_start(); // error;
if($_POST){
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	if($email == ''){
		$_SESSION['msg']='please type valid email';
		header('location:../login_form.php'); 
		
	}
	if($pass == ''){
		$_SESSION['msg']='please type valid password';
		header('location:../login_form.php'); 
		
		
	}
	include_once '../database/DBcon.php';
	$conn =connect();
	$sql= "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
	
	$result = $conn -> query($sql);
	
	if($result->num_rows > 0){
			foreach($result AS $row){
				$_SESSION['user_id'] = $row['id'];
				$_SESSION['user_name'] = $row['name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['pass'] = $row['pass'];
				$_SESSION['user_role'] = $row['role'];
			}			
			$_SESSION['loggedin'] = true;
			$_SESSION['msg'] = 'Loggedin successfully';			
		}
		else{
			$_SESSION['msg'] = 'Invalid Login';
		}
		header('location:../login_form.php');
}
?>