<?php
	session_start();
	$name = $_POST['name'];
	$price = $_POST['price'];
	$desc = $_POST['description'];
	
	//---- File Upload 
	$_SESSION['msg'] = '';
	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$fileName = basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1; // Flag
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			$_SESSION['msg'] .= "File is not an image.<br>";
			$uploadOk = 0;
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		$_SESSION['msg'] .= "Sorry, file already exists.<br>";
		$uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		$_SESSION['msg'] .= "Sorry, your file is too large.<br>";
		$uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		$_SESSION['msg'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['MSG'] = "Sorry, your file was not uploaded.";
		header('location:add_product.php');
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}	
	
	//---- End of File Upload
	
	
	include_once '../database/DBcon.php';
	$conn = connect();
	
	$sql = "INSERT INTO products(name,price,description,image)
			VALUES ('$name',$price,'$desc','$fileName')";
	
	if($conn->query($sql)){
		$_SESSION['msg'] = 'Added Successfully';
	}else{
		$_SESSION['msg'] = 'Not Added. '.$conn->error;
	}
	header('location:../add_product_form.php');
	
?>