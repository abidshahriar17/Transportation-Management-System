<?php
require_once("../controller/connection.php");
if(isset($_POST['Full_Name']) && isset($_POST['Mobile_number']) && isset($_POST['password']) && isset($_POST['NID']) && isset($_POST['Email']) && isset($_POST['Address']) && isset($_POST["Post_Code"])){
	//number and pass exists or not
	$a= $_POST['Full_Name'];
	$b= $_POST['Mobile_number'];
	$c= $_POST['password'];
	$d= $_POST['NID'];
	$e= $_POST['Email'];
	$f= $_POST['Address'];
	$g= $_POST['Post_Code'];
	$sql="INSERT INTO registered_customers VALUES('$d','$a','$e','$c','$b','$f','$g',0,0,0)";
	$result= mysqli_query($conn,$sql);
	if (mysqli_affected_rows($conn)){
		header("Location: ../controller/success_controller.php");
	}
	else{
		echo "Insertion failed.";	
	}
}
?>
