<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["ID"]) && isset($_POST["Departure_Time"]) && isset($_POST["From"]) && isset($_POST["Arrival_Time"]) && isset($_POST["To"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['ID'];
    $c= $_POST['Departure_Time'];
    $d= $_POST['From'];
    $e= $_POST['Arrival_Time'];
    $f= $_POST['To'];

    //for train
    if($a=="Train"){
        $sql="UPDATE rail_route SET Departure_Time = '$c', Station_From = '$d', Arrival_Time= '$e', Station_To='$f' WHERE Train_ID = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_add_route_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }

    //for plane
    if($a=="Plane"){
        $sql="UPDATE plane_route SET Departure_Time = '$c', Port_From = '$d', Arrival_Time= '$e', Port_To='$f' WHERE Plane_ID = '$b'";
        $result= mysqli_query($conn,$sql);
        if ($result){
            include("../controller/success_add_route_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }
}
?>