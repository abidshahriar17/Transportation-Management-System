<?php
session_start();
$_SESSION['number_of_ticket']=$_POST['number_of_ticket'];
include("../model/ticket_booking_module.php");
?>