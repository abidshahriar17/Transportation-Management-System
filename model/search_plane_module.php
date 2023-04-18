<?php
session_start();
$_SESSION['journey_date']=$_POST['date_of_journey'];
$_SESSION['class']=$_POST['choose_class'];
require_once("../controller/connection.php");
if(isset($_POST['Port_From']) && isset($_POST['Port_To'])){
    $present_date = date('Y-m-d'); 
    $present_timestamp = strtotime($present_date); // convert present date to Unix timestamp
    $journey_date_timestamp = strtotime($_POST['date_of_journey']); // convert future date to Unix timestamp
    if($present_timestamp<=$journey_date_timestamp){
        $u= $_POST['Port_From'];
        $p= $_POST['Port_To'];
        $_SESSION['from']=$u;
        $_SESSION['to']=$p;
        $sql="SELECT Plane_ID FROM plane_route WHERE Port_From= '$u' AND Port_To= '$p'";
        $result= mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)!=0){
            $row= mysqli_fetch_assoc($result);
            $_SESSION['plane_id']=$row['Plane_ID'];
            $sql2="SELECT * FROM plane WHERE Plane_ID= '$row[Plane_ID]'";
            $res= mysqli_query($conn,$sql2);
            while($row2=mysqli_fetch_row($res)){
            $_SESSION['Plane_Name']=$row2[2];}
            $sql3="SELECT * FROM plane_number_of_seats WHERE Plane_ID= '$row[Plane_ID]'";
            $res3= mysqli_query($conn,$sql3);
            while($row3=mysqli_fetch_row($res3)){
            $_SESSION['available_seats']=$row3[1];
            }

            $sql10="SELECT * FROM registered_customers WHERE Mobile_number= '$_SESSION[Mobile_number]' AND Password= '$_SESSION[password]'";
            $res10= mysqli_query($conn,$sql10);
            while($row10=mysqli_fetch_assoc($res10)){
            $_SESSION['journeys']=$row10['journeys'];
            }

            $sql8="SELECT * FROM plane_class WHERE Class_Name='$_SESSION[class]'";
            $res8= mysqli_query($conn,$sql8);
            while ($row8= mysqli_fetch_assoc($res8)){
                $_SESSION['Price']=$row8['Price'];
                //discount on 5 journeys
                if ($_SESSION['journeys']<5){
                    $_SESSION['Price']=$row8['Price'];
                }
                if ($_SESSION['journeys']>=5){
                    $_SESSION['Price']=($row8['Price'])-(0.1*$row8['Price']);	//10% discount
                }
            }
            
            include("../controller/search_planeview_controller.php");		
        }
        else{
            echo "Sorry, no planes available on this route.";
            
        }
    }
    else{
        include("../view/invalid_journey_date_view.php");
    }

    
}
?>