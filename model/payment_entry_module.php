<?php
session_start();
require_once("connection.php");
$sql2= "UPDATE rail_number_of_seats SET available_seats=$_SESSION[available_seats]-$_SESSION[num_of_ticket] WHERE Train_ID = '$_SESSION[train_id]'";
$res2= mysqli_query($conn,$sql2);
//number_of_ticket
$sql="UPDATE registered_customers SET number_of_tickets='$_SESSION[num_of_ticket]' WHERE NID='$_SESSION[nid]'";
$result= mysqli_query($conn,$sql);
if (mysqli_affected_rows($conn)){
}
//cost
$sql10="UPDATE registered_customers SET cost='$_SESSION[Total_price]', journeys= journeys+1 WHERE NID='$_SESSION[nid]'";
$result10= mysqli_query($conn,$sql10);
if (mysqli_affected_rows($conn)){
}


//ticket_number_create
$sql1 = "INSERT INTO rail_ticket VALUES('$_SESSION[train_id]-$_SESSION[journey_date]-$_SESSION[nid]','$_SESSION[journey_date]','$_SESSION[class]',$_SESSION[Price]*$_SESSION[num_of_ticket],$_SESSION[nid],'$_SESSION[train_id]')";
$result = mysqli_query($conn, $sql1);
if (mysqli_affected_rows($conn)) {
}


//payment
if (isset($_POST['number'])) {
    $a= $_POST['number'];
    $b= $_SESSION['nid'];
    $sql1 = "INSERT INTO rail_payment VALUES('$a','$b')";
    $result = mysqli_query($conn, $sql1);
    if (mysqli_affected_rows($conn)) {
        header("Location: ../controller/finalpage_controller.php");
    }
}

?>