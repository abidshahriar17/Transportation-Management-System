<?php
session_start();
require_once("connection.php");
$sql = "SELECT * FROM rail_station";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    $_SESSION['rail_station']=$rows;
}

$sql1 = "SELECT * FROM bus_stands";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    $rows1 = array();
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $rows1[] = $row1;
    }
    $_SESSION['bus_stand']=$rows1;
}

$sql2= "SELECT * FROM launch_port";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $rows2 = array();
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $rows2[] = $row2;
    }
    $_SESSION['launch_port']=$rows2;
}

$sql3= "SELECT * FROM airport";
$result3= mysqli_query($conn, $sql3);
if (mysqli_num_rows($result3) > 0) {
    $rows3= array();
    while ($row3= mysqli_fetch_assoc($result3)) {
        $rows3[] = $row3;
    }
    $_SESSION['airport']=$rows3;
} 
include("../view/station_view.php");
?>