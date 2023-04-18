<!DOCTYPE html>
<html>
<head>
	
    <title>Transportation Management System</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
    body{
        background: url("");
        background-repeat: no-repeat;
        background-size: 1537px 754px;
        background-position: fixed;
    }
	.p1 {
  	font-family: "Times New Roman", Times, serif;
	}
	</style>
</head>
<body> 
	<div style = "position:absolute; right:180px; top:5px;">
    <div class="site-logo">
        <div class="header-logo-img">
            <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="150" alt="Bangladesh Railway Logo"> 
        </div>

    </div>
    <h1> <span style="color:#000000" class="p1"> Transportation Management System </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
	<form action="search_trains.php" method="post" id="searchTrain">
		<div class="login-page-form">
			<div class="login-form-control-single">
				<label for="class"><span style="color:#000000" class="p1">From</span></label>
				<select name="Station_From" id="Station_From" class="form-control">
										<option value="">Station Name</option>
                                                                                                            <option value="Dhaka">Dhaka</option>
                                                                                                            <option value="Pabna">Pabna</option>
                                                                                                            <option value="Dinajpur">Dinajpur</option>                                                                          
				</select>	
			</div>
			<div class="login-form-control-single">
				<label for="class"><span style="color:#000000" class="p1">To</span></label>
				<select name="Station_To" id="Station_To" class="form-control">
										<option value="">Station Name</option>
                                                                                                            <option value="Dhaka">Dhaka</option>
                                                                                                            <option value="Bogura">Bogura</option>
                                                                                                            <option value="Chittagong">Chittagong</option>                                                                          
				</select>	
			</div>
			
			<div class="login-form-control-single">
				<label for="Date of Journey"><span style="color:#000000" class="p1">Date of Journey</span></label>
				<input type="date" name="date_of_journey" id="date_of_journey" placeholder="Type a date" autocomplete="off">
			</div>
			<div class="login-form-control-single">
				<label for="class"><span style="color:#000000" class="p1">Choose a Class</span></label>
				<select name="choose_class" id="choose_class" class="form-control">
										<option value="">Choose a Class</option>
                                                                                                            <option value="AC Berth">AC Berth</option>
                                                                                                            <option value="AC Seat">AC Seat</option>
                                                                                                            <option value="SNIGDHA">SNIGDHA</option>                                                                          
                                                                                                            <option value="SHOVON">SHOVON</option>
				</select>
	
			</div>
			
			<div class="search-train-control-single">
				<button class="search-train-submit-btn" type="submit">Search Trains</button>
			</div>
			
		
		</div>
	</form>
	
</body>
</html>