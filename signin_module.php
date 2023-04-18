<?php
require_once("connection.php");
session_start();

if(isset($_POST['Mobile_number']) && isset($_POST["password"])){
	//number and pass exists or not
	$u= $_POST['Mobile_number'];
	$p= $_POST['password'];
	$sql="SELECT * FROM registered_customers WHERE Mobile_number= '$u' AND Password= '$p'";
	$result= mysqli_query($conn,$sql);
	//check if empty
	if (mysqli_num_rows($result)!=0){
		
		header("Location: homepage.php");
	}
	else{
		echo "Mobile Number or Password is wrong, or you are not registered yet.";
		
	}
	$sql2="SELECT * FROM registered_customers WHERE Mobile_number= '$u' AND Password= '$p'";
	$res= mysqli_query($conn,$sql2);
	while($row2=mysqli_fetch_row($res)){
		$_SESSION['full_name']=$row2[1];
		$_SESSION['nid']=$row2[0];
	}
	
}

?>