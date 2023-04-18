<html>	
	<head>
		<title>Bangladesh Railway</title>
		<meta charset="UTF-8">
		<link rel="stylesheet"
			  href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
		<link rel="stylesheet" href="style.css">
		<style>
		body{
			font-family: 'Times New Roman', sans-serif;
			font-size: 15px;
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			background: url("../view/rail_ticket.jpg");
			background-repeat: no-repeat;
			background-position: fixed;
			background-size: 750px 752px;
			background-color: #cfd9d68f;
			background-attachment: fixed;
		}
		
		</style>
	</head>
	<body> 
		<div class="back">
				<div style="position:absolute; right:140px; top: 10px">
					<img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
				</div>
				<div style="position:absolute; right:80px; top: 130px">
					<h1> Bangladesh Railways </h1>
				</div>
				<div style="position:absolute; right:120px; top: 180px">
					<h4> নিরাপদ . আরামদায়ক . সাশ্রয়ী</h4>
				</div>
			<form action="../controller/Payment_controller.php" method="post" id="payment">
				<div class="payment-form-control-single" style = "position:absolute; right:133px; top: 250px">
						<button class="payment-form-submit-btn" type="submit">Proceed to payment</button>
				</div>
			</form>
		</div>
		<div style = "position:absolute; left:118px; top: 82px">
			<p style="font-family:times new roman" style="font-size:30px" style="color:#000000">
			<?php
			$_SESSION['num_of_ticket']=$_POST['number_of_ticket'];
			echo $_SESSION['full_name'];
			?>,
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 192px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['journey_date'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 219px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['Departure_Time'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 236px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['Train_Name'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 262px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['from'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 280px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['to'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 320px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['class'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 336px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['num_of_ticket'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 362px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['Price'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 378px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['Price']*$_SESSION['num_of_ticket']; $_SESSION['Total_price']=$_SESSION['Price']*$_SESSION['num_of_ticket'];
			?>
			</p>
		</div>
		
		<div style = "position:absolute; left:400px; top: 435px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['full_name'];
			?>
			</p>
		</div>
		<div style = "position:absolute; left:400px; top: 460px">
			<p style="font-family:times new roman" style="font-size:30px">
			<?php
			echo $_SESSION['nid'];
			?>
			</p>
		</div>
		
	</body>
</html>