<!DOCTYPE html>
<html lang="en">
<head>
    <title>Transportation Management System</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="../view/style.css">
    <title>Transportation Management System</title>
	<style>
	body{
		background: url("");
		background-repeat: no-repeat;
		background-size: 1537px 754px;
		background-position: fixed;
		font-family= "Times New Roman", Times, serif;
	}
	.p1 {
  	font-family: "Times New Roman", Times, serif;
	}
  .site-logo .header-logo {
      display: flex;
      align-items: center;
      color: #DA924E;
      font-weight: 700;
      font-size: 20px;
      text-decoration: none;
  }
  .site-logo .header-logo .header-logo-img {
      margin-right:10px;
  }
  .site-logo .header-logo-text {
      align-items: center;
      color: #DA924E;
      font-weight: 700;
      font-size: 20px;
  }
  .main-header {
      padding: 15px 0 15px;
  }
  header.new-header .site-wrapper {
      padding: 0 5px 0 0;
}
	</style>
</head>
<header class="new-header" style = "position:absolute; right:700px; top: 30px">
  <input type="hidden" id="www-search-id" name="www-search-id" value="">
  <div class="main-header" >
      <div class="container-wrapper">
        <div class="site-wrapper clearfix">
          <div class="site-logo">
              <a title="Bangladesh Railway" href="" class="header-logo">
                <div style="text-align: left;">
                    <div class="header-logo-img">
                        <img src="https://eticket.railway.gov.bd/v2/assets/img/home/bangladesh-railway.png" width="90" alt="Bangladesh Railway Logo"> 
                        <img src="https://www.mawbiz.com.bd/application/views/module/logo_image/Bangladesh_Inland_Water_Transport_Authority_(BIWTA)_logo.png" width="85"> 
                        <img src="../view/biman-bangladesh-airlines_7cf8cd.png" width="200"> 
                        <img src="data:image/png;base64,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" width="85"> 
                            <div class="header-logo-text">
                                Transportation Management System
                            </div>
                        </div>
                </div>
                </div> 
              </a>
        </div>
      </div>
    </div>
  </div>
</header>


<body>
    <div style = "position:absolute; right:200px; top: 50px">
        <h3> <span style="color:#000000" class="p1"> 
        <?php 
        require_once("../controller/connection.php"); 
        echo $_SESSION['full_name'];?> </h3>
        </span> </h1> <button type="submit"><a href="../controller/login2_controller.php">Logout</button></a></span><br>		
    </div>
    <div class="payment_option">
        <div class="Text">
            <h1>Jobs</h1>
        </div>
        <table>
		<tr>
            <th>Job ID</th>
			<th>Transport</th>
			<th>Post</th>
			<th>Age Requirement</th>
			<th>Educational Qalification</th>
        </tr>
		<?php
        require_once("../controller/connection.php");
        $sql = "SELECT * FROM job";
        $result = $conn->query($sql);
        if ($result->num_rows> 0) {
        while($row = $result->fetch_assoc()) {?>
            <html>
            <tr>
                <td><?php echo $row["job_id"];?></td>
                <td><?php echo $row["transport"];?></td>
                <td><?php echo $row["post"];?></td>
                <td><?php echo $row["age"];?></td>
                <td><?php echo $row["educational_qualification"];?></td>
            </tr>
            </html>
        <?php
        }
        }
        ?>
	    </table>
        <form action="../controller/delete_job_entry_controller.php" method="post" id="loginForm">
            
                <div style = "position:absolute; left:640px; top: 300px">
                    <label for="delete_job"><span style="color:#000000" class="p1"><h3>Delete Job</h3></span></label>
                </div>
                <div style = "position:absolute; left:580px; top: 360px">
                    <input type="delete_job" name="delete_job" id="delete_job" placeholder="Enter Job ID" autocomplete="off">
                </div>
                <div style = "position:absolute; left:627px; top: 420px">
                    <button class="login-form-submit-btn" type="submit">DELETE</button>
                </div> 
        </form>        
    </div>
</body>
</html>