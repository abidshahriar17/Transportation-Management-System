<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["ID"]) && isset($_POST["Available_seats"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['ID'];
    $c= $_POST['Available_seats'];

    //for train
    if($a=="Train"){
        $sql="UPDATE rail_number_of_seats SET available_seats = '$c' WHERE Train_ID = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_manage_seat_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }

    //for plane
    if($a=="Plane"){
        $sql="UPDATE plane_number_of_seats SET available_seats = '$c' WHERE Plane_ID = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_manage_seat_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }
}
?>