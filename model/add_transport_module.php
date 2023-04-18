<?php
require_once("../controller/connection.php");
if(isset($_POST['Choose_the_transportation']) && isset($_POST["ID"]) && isset($_POST["Total_seat"]) && isset($_POST["Name"])){
	//number and pass exists or not
	$a= $_POST['Choose_the_transportation'];
	$b= $_POST['ID'];
    $c= $_POST['Total_seat'];
    $d= $_POST['Name'];

    //for train
    if($a=="Train"){
        $sql="INSERT INTO rail_train VALUES('$b','$c','$d')";
        $result= mysqli_query($conn,$sql);

        $sql2="INSERT INTO rail_number_of_seats VALUES('$b','$c','$c')";
        $result2= mysqli_query($conn,$sql2);

        $sql3="INSERT INTO rail_route VALUES('','','','','$b')";
        $result3= mysqli_query($conn,$sql3);
        if (mysqli_affected_rows($conn)){
            include("../controller/success_add_transport_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }

    //for plane
    if($a=="Plane"){
        $sql="INSERT INTO plane VALUES('$b','$c','$d')";
        $result= mysqli_query($conn,$sql);

        $sql2="INSERT INTO plane_number_of_seats VALUES('$b','$c','$c')";
        $result2= mysqli_query($conn,$sql2);

        $sql3="INSERT INTO plane_route VALUES('','','','','$b')";
        $result3= mysqli_query($conn,$sql3);
        if (mysqli_affected_rows($conn)){
            include("../controller/success_add_transport_controller.php");
        }
        else{
            echo "Insertion failed.";	
        }
    }
}
?>