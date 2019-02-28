<?php
  session_start();
    $name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];

 include_once'../database/DBcon.php';
	$conn = connect();
	
	$sql= "SELECT * FROM users WHERE email = '$email'";
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		
		$_SESSION['msg'] = 'User Already Exists.';
		header('location:../reg_form.php');
		//header('location:reg_form.php?msg=User Already Exists.');
		exit;
	}else{
 $sql = "INSERT INTO users (name,email,pass) 
				VALUES ('$name','$email','$pass')";
		
	$conn->query($sql);
	$_SESSION['msg'] = 'Successfully Registered';
	header('location:../reg_form.php');
}
?>