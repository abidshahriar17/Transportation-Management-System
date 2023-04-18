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
					background-image: url('../view/biman.jpg');
					background-repeat: no-repeat;
					background-attachment: fixed;
					background-position: fixed;
					background-size:1400px 1050px;
				}				
				</style>
			</head>
			<body>
                <div class="header-logo-img" style = "position:absolute; right:100px">
                    <img src="../view/biman-bangladesh-airlines_7cf8cd.png" width="350"> 
                </div>
				<div class="design" style = "position:absolute; top:95px">			
					<div style = "position:absolute; right:250px">
					<div style = "position:absolute;">		
					<div class="site-logo">
						
						<h2>Bangladesh Biman</h2>
						<h6>নিরাপদ . আরামদায়ক . সাশ্রয়ী</h6>
						<p> The trains available on this Route: </p>
                        <p> Plane Name: <?php echo $_SESSION['Plane_Name'];?>
						</p>
                        <p> Available seat: <?php echo $_SESSION['available_seats'];?></p>
                        <p> Class: <?php echo $_SESSION['class'];?>
						</p>
                        <p> Price: <?php echo $_SESSION['Price']?></p>
                        
                        <form action="../controller/plane_ticket_booking_controller.php" method="post" id="ticketBooking">
						<div class="ticket-form-control-single">
							<label for="class"><span style="color:#000000">Number of ticket</span></label>
							<select type= int name="number_of_ticket" id="number_of_ticket" class="form-control">
													<option value="">Number of ticket</option>
																														<option value="1">1</option>
																														<option value="2">2</option>
																														<option value="3">3</option>                                                                          
																														<option value="4">4</option>
							</select>
                            <?php $_SESSION['j_d']= $_SESSION['journey_date'] ;
                            $_SESSION['cl']= $_SESSION['class'];?>
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
