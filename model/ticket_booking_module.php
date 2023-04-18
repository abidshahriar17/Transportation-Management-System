<?php
require_once("../controller/connection.php");
if(($_SESSION['available_seats']-$_SESSION['number_of_ticket'])>=0){
    $sql="SELECT * FROM rail_route WHERE Station_From= '$_SESSION[from]' AND Station_To= '$_SESSION[to]' AND Train_ID='$_SESSION[train_id]'";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)!=0){
        $row= mysqli_fetch_assoc($result);
        $_SESSION['Departure_Time']=$row['Departure_Time'];
    }
    include("../view/ticket_booking_view.php");
}
else{
    include("../view/noseat_view.php");
}
?>