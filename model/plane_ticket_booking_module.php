<?php
require_once("../controller/connection.php");
if(($_SESSION['available_seats']-$_SESSION['number_of_ticket'])>=0){
    $sql="SELECT * FROM plane_route WHERE Port_From= '$_SESSION[from]' AND Port_To= '$_SESSION[to]' AND Plane_ID='$_SESSION[plane_id]'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)!=0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION['Departure_Time']=$row['Departure_Time'];
    }
    include("../view/plane_ticket_booking_view.php");
}
else{
    include("../view/noseat_view.php");
}
?>