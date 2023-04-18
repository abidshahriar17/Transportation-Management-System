<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["Post"]) && isset($_POST["Age_requirement"]) && isset($_POST["Educational_Qualification"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['Post'];
    $c= $_POST['Age_requirement'];
    $d= $_POST['Educational_Qualification'];
    $temp=0;
    $temp=$temp+1;
    $sql="INSERT INTO job VALUES('$a-$b-$c','$a','$b','$c','$d')";
    $result= mysqli_query($conn,$sql);
    if (mysqli_affected_rows($conn)){
        include("../controller/success_add_job_controller.php");
    }
    else{
        echo "Insertion failed.";	
    }
    
}
?>