<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["ID"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['ID'];

    //for train
    if($a=="Train"){
        $sql="DELETE FROM rail_route WHERE Train_ID='$b';";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_delete_route_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }

    //for plane
    if($a=="Plane"){
        $sql="DELETE FROM plane_route WHERE Plane_ID='$b';";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_delete_route_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }
}
?>