<!DOCTYPE html>
		<html>
			<head>
				<link rel="stylesheet"
			  	href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
				<link rel="stylesheet" href="../view/style.css">
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
					background-size:1400px 1050px;
				}				
				</style>
			</head>
			<body>
				<div class="design">			
					<div style = "position:absolute; right:250px">
					<div style = "position:absolute;">		
					<div class="site-logo">
						<div class="header-logo-img">
							<img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
						</div>
						<h2>Bangladesh Railway</h2>
						<h6>নিরাপদ . আরামদায়ক . সাশ্রয়ী</h6>
						<p> The trains available on this Route: </p>
                        <p> Train Name: <?php echo $_SESSION['Train_Name'];?>
						</p>
                        <p> Available seat: <?php echo $_SESSION['available_seats'];?></p>
                        <p> Class: <?php echo $_SESSION['class'];?>
						</p>
                        <p> Price: <?php echo $_SESSION['Price']?></p>
                        
                        <form action="../controller/ticket_booking_controller.php" method="post" id="ticketBooking">
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