<?php
require_once("../controller/connection.php");
session_start();

if(isset($_POST['Mobile_number']) && isset($_POST["password"]) && isset($_POST["Choose_the_transportation"]) && isset($_POST["Ticket_Number"]) && isset($_POST["date_of_journey"])){
	$a= $_POST['Mobile_number'];
	$b= $_POST['password'];
    $c= $_POST['Choose_the_transportation'];
    $d= $_POST['Ticket_Number'];
    $journey_date= $_POST['date_of_journey'];
	$sql="SELECT * FROM registered_customers WHERE Mobile_number= '$a' AND Password= '$b'";
	$result= mysqli_query($conn,$sql);
	
    //mobile number and password exists or not
	if (mysqli_num_rows($result)!=0){
		$row= mysqli_fetch_assoc($result);
        $_SESSION['NID']=$row['NID'];

        //for train
        if($c=="Train"){
            $sql1="SELECT * FROM rail_ticket WHERE Ticket_Number= '$d'";
            $result1= mysqli_query($conn,$sql1);
            if (mysqli_num_rows($result1)!=0){
                $row1= mysqli_fetch_assoc($result1);

                //original journey date and given journey date is same or not
                if($journey_date==$row1['Journey_Date']){
                    $present_date = date('Y-m-d'); 
                    $present_timestamp = strtotime($present_date); // convert present date to Unix timestamp
                    $journey_date_timestamp = strtotime($journey_date); // convert future date to Unix timestamp
                    
                    //refund possible or not!
                    if (($journey_date_timestamp - $present_timestamp) >= (3 * 24 * 60 * 60)) {
                        
                        //delete ticket
                        $sql2="DELETE FROM rail_ticket WHERE Ticket_Number='$d';";
                        $result2= mysqli_query($conn,$sql2);

                        //updating customers info
                        $sql3="UPDATE registered_customers SET number_of_tickets = 0, cost = 0, journeys= journeys-1 WHERE NID = '$_SESSION[NID]'";
                        $result3= mysqli_query($conn,$sql3);
                        include("../view/success_refund_view.php");


                    } 
                    else {
                    echo "You can't get the refund as the time limit has been crossed.";
                    }
                }
                else{
                    include("../view/invalid_journey_date_view.php");
                }
            }
        }

        //for plane
        if($c=="Plane"){
            $sql4="SELECT * FROM plane_ticket WHERE Ticket_Number= '$d'";
            $result4= mysqli_query($conn,$sql4);
            if (mysqli_num_rows($result4)!=0){
                $row4= mysqli_fetch_assoc($result4);

                //original journey date and given journey date is same or not
                if($journey_date==$row4['Journey_Date']){
                    $present_date_p = date('Y-m-d'); 
                    $present_timestamp_p = strtotime($present_date_p); // convert present date to Unix timestamp
                    $journey_date_timestamp_p = strtotime($journey_date); // convert future date to Unix timestamp
                    
                    //refund possible or not!
                    if (($journey_date_timestamp_p - $present_timestamp_p) >= (3 * 24 * 60 * 60)) {
                        
                        //delete ticket
                        $sql5="DELETE FROM plane_ticket WHERE Ticket_Number='$d';";
                        $result5= mysqli_query($conn,$sql5);

                        //updating customers info
                        $sql6="UPDATE registered_customers SET number_of_tickets = 0, cost = 0, journeys= journeys-1 WHERE NID = '$_SESSION[NID]'";
                        $result6= mysqli_query($conn,$sql6);
                        include("../view/success_refund_view.php");


                    } 
                    else {
                    echo "You can't get the refund as the time limit has been crossed.";
                    }
                }
                else{
                    include("../view/invalid_journey_date_view.php");
                }
            }
        }

	}
	else{
		echo "Mobile Number or Password is wrong, or you are not registered yet.";
		
	}
	
}
?>