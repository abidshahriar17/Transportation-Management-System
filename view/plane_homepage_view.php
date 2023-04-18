<!DOCTYPE html>
<html>
<head>
	
    <title>Bangladesh Railway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <style>
    body{
        background: url("../view/biman2.jpg");
        background-repeat: no-repeat;
        background-size: 1920px 1050px;
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
        <div class="header-logo-img" >
            <img src="../view/biman-bangladesh-airlines_7cf8cd.png" width="350" alt="Bangladesh Railway Logo"> 
        </div>

    </div>
    <h1> <span style="color:#000000" class="p1"> Bangladesh Biman </span> </h1>
    <h4> <span style="color:#000000" class="p1"> নিরাপদ . আরামদায়ক . সাশ্রয়ী </span></h4>
	<form action="../controller/search_plane_controller.php" method="post" id="searchTrain">
		<div class="login-page-form">
			<div class="login-form-control-single">
				<label for="class"><span style="color:#000000" class="p1">From</span></label>
				<select name="Port_From" id="Port_From" class="form-control">
										<option value="">Port Name</option>
                                                                                                            <option value="Dhaka">Dhaka</option>
																											<option value="Chittagong">Chittagong</option>
                                                                                                            <option value="Sylhet">Sylhet</option>
                                                                                                            <option value="Saidpur">Saidpur</option>                                                                        
				</select>	
			</div>
			<div class="login-form-control-single">
				<label for="class"><span style="color:#000000" class="p1">To</span></label>
				<select name="Port_To" id="Port_To" class="form-control">
										<option value="">Port Name</option>
                                                                                                            <option value="Dhaka">Dhaka</option>
																											<option value="Chittagong">Chittagong</option>
                                                                                                            <option value="Sylhet">Sylhet</option>
                                                                                                            <option value="Saidpur">Saidpur</option>                                                                            
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
                                                                                                            <option value="First Class">First Class</option>
                                                                                                            <option value="Business Class">Business Class</option>
                                                                                                            <option value="Economy Class">Economy Class</option>
				</select>
	
			</div>
			
			<div class="search-train-control-single">
				<button class="search-train-submit-btn" type="submit">Search Plane</button>
			</div>
			
		
		</div>
	</form>
	
</body>
</html>