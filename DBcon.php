<?php
function connect(){
    $host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'easy_shop';
	
	$con = mysqli_connect($host,$user,$pass,$dbname);
     return $con;
}
    
   
?>