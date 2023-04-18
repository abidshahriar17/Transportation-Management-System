<?php
session_start();
$_SESSION['journey_date']=$_POST['date_of_journey'];
$_SESSION['class']=$_POST['choose_class'];

require_once("Bangladesh_Railway.php");
if(isset($_POST['Station_From']) && isset($_POST['Station_To'])){
	$u= $_POST['Station_From'];
	$p= $_POST['Station_To'];
	$_SESSION['from']=$u;
	$_SESSION['to']=$p;
	$sql="SELECT Train_ID FROM route WHERE Station_From= '$u' AND Station_To= '$p'";
	$result= mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)!=0){
		$row= mysqli_fetch_assoc($result);?>
		
		<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet"
			  	href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
				<link rel="stylesheet" href="style.css">
				<style>
				body {
					font-family: 'Roboto', sans-serif;
					font-size: 15px;
					margin: 0;
					padding: 0;
					box-sizing: border-box;
					background-color: #cfd9d68f;
					background-image: url('https://www.bproperty.com/blog/wp-content/uploads/bangladesh-3565219_1920.jpg');
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-position: fixed;
					background-size:1137px 800px;
				}
				
				</style>
			</head>
			<body>
				<div class="design">			
					<div style = "position:absolute; right:220px">
					<div style = "position:absolute;">		
					<div class="site-logo">
						<div class="header-logo-img">
							<img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
						</div>
						<h2>Bangladesh Railway</h2>
						<h6>নিরাপদ . আরামদায়ক . সাশ্রয়ী</h6>
						<p> The trains available on this Route: </p>
						<?php 
						$_SESSION['train_id']=$row['Train_ID'];
						$sql2="SELECT * FROM train WHERE Train_ID= '$row[Train_ID]'";
						$res= mysqli_query($conn,$sql2);
						while($row2=mysqli_fetch_row($res)){?>
							<p> Train Name: <?php echo $row2[2]; $_SESSION['Train_Name']=$row2[2];}?>
							</p>

						<?php
						$sql3="SELECT * FROM number_of_seats WHERE Train_ID= '$row[Train_ID]'";
						$res3= mysqli_query($conn,$sql3);
						while($row3=mysqli_fetch_row($res3)){?>
							<p> Available seat: <?php echo $row3[1]; $_SESSION['available_seats']=$row3[1];?>
							</p>
							<p> Class: <?php echo $_SESSION['class'];}?>
							</p>

						<?php
						$sql8=("SELECT * FROM class WHERE Class_Name= '$_SESSION[class]'");
						$res8= mysqli_query($conn,$sql8);
						$row8= mysqli_fetch_assoc($res8);?>
							<p> Price: <?php echo $row8['Price']; $_SESSION['Price']=$row8['Price']?></p>

				
					
					<form action="ticket_booking.php" method="post" id="ticketBooking">
						<div class="ticket-form-control-single">
							<label for="class"><span style="color:#000000">Number of ticket</span></label>
							<select type= int name="number_of_ticket" id="number_of_ticket" class="form-control">
													<option value="">Number of ticket</option>
																														<option value="1">1</option>
																														<option value="2">2</option>
																														<option value="3">3</option>                                                                          
																														<option value="4">4</option>
							</select>
						</div>

						<p><div class="ticket-page-form">
							<div class="tikect-form-control-single">
								<button class="ticket-form-submit-btn" type="submit">Click here to book your ticket</button>
							</div>
						</div></P>
					</form>
						
					</div>
					</div>
					</div>
				</div>
			</body>  
		</html>
		
<?php		
		
	}
	else{
		echo "Sorry, no trains available on this route.";
		
	}
}
?>