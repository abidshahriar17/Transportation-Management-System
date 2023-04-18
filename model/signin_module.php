<?php
session_start();
require_once("../controller/connection.php");
if(isset($_POST['Mobile_number']) && isset($_POST['password'])){
	//number and pass exists or not
	$a= $_POST['Mobile_number'];
	$b= $_POST['password'];
    $_SESSION['Mobile_number']=$a;
    $_SESSION['password']=$b;

	$sql="SELECT * FROM admin WHERE Mobile_number= '$a' AND Password= '$b'";
	$result= mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)!=0){
		$sql3="SELECT * FROM admin WHERE Mobile_number= '$a' AND Password= '$b'";
		$res3= mysqli_query($conn,$sql3);
		while($row3=mysqli_fetch_row($res3)){
			$_SESSION['full_name']=$row3[0];
		}
		include("../controller/admin_controller.php");
	}
	else{
		$sql2="SELECT * FROM registered_customers WHERE Mobile_number= '$a' AND Password= '$b'";
		$result2= mysqli_query($conn,$sql2);
		//check if empty
		if (mysqli_num_rows($result2)!=0){
			$sql4="SELECT * FROM registered_customers WHERE Mobile_number= '$a' AND Password= '$b'";
			$res4= mysqli_query($conn,$sql4);
			while($row4=mysqli_fetch_row($res4)){
				$_SESSION['full_name']=$row4[1];
				$_SESSION['nid']=$row4[0];
				
			}
			include("../controller/option_controller.php");
		}
		else{
			echo "Mobile Number or Password is wrong, or you are not registered yet.";
			
		}
	}
}
?>