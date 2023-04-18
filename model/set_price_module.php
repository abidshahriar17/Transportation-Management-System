<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["choose_class"]) && isset($_POST["Set_price"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['choose_class'];
    $c= $_POST['Set_price'];

    //for train
    if($a=="Train"){
        $sql="UPDATE rail_class SET Price = '$c' WHERE Class_Name = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_set_price_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }

    //for plane
    if($a=="Plane"){
        $sql="UPDATE plane_class SET Price = '$c' WHERE Class_Name = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_set_price_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }
}
?>