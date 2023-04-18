<?php
session_start();
$_SESSION['number_of_ticket']=$_POST['number_of_ticket'];
include("../model/plane_ticket_booking_module.php");
?>