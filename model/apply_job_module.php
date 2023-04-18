<?php
require_once("../controller/connection.php");
if(isset($_POST['job_id']) && isset($_POST['Full_Name']) && isset($_POST['Age']) && isset($_POST['Gender']) && isset($_POST['Educational_Qualification']) && isset($_POST['Present_Address']) && isset($_POST["Permanent_Address"]) && isset($_POST["Mobile_number"])){
	//number and pass exists or not
	$a= $_POST['job_id'];
	$b= $_POST['Full_Name'];
	$c= $_POST['Age'];
	$d= $_POST['Gender'];
	$e= $_POST['Educational_Qualification'];
	$f= $_POST['Present_Address'];
	$g= $_POST['Permanent_Address'];
    $h= $_POST['Mobile_number'];
	$sql="INSERT INTO candidates VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
	$result= mysqli_query($conn,$sql);
	if (mysqli_affected_rows($conn)){
		header("Location: ../controller/success_apply_job_controller.php");
	}
	else{
		echo "Insertion failed.";	
	}
}
?>
