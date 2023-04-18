<?php
require_once("../controller/connection.php");
if(isset($_POST['delete_job'])){
	//number and pass exists or not
	$a= $_POST['delete_job'];
    $sql="DELETE FROM job WHERE job_id='$a'";
    $result= mysqli_query($conn,$sql);
    if ($result){
        include("../controller/success_delete_job_controller.php");
    }
    else{
        echo "Insertion failed.";	
    }
}
?>