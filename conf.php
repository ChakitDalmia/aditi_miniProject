<?php
	session_start();
?>
<!DOCTYPE html>
<?php
$conn = mysqli_connect("remotemysql.com", "fKKAzIiB0O", "9OBgTR2cT2", "fKKAzIiB0O");
$sql = "SELECT * FROM cart";
$result = mysqli_query($conn, $sql);
$order = "";
$order_no=0;
$total_price = 0;
$total_time = 0;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $order = $row["item_name"].", ".$order;
        $total_price = $row["price"] + $total_price;
        $order_no = $row["s_no"];
    }
}

$sql = "INSERT INTO orders (quantity, total_price, list_items) VALUES ('$order_no','$total_price','$order')";
$result = mysqli_query($conn, $sql);

$sql = "Truncate TABLE cart";
$result = mysqli_query($conn, $sql);
?>
<html lang="en">
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="f.css">
	<meta charset="UTF-8">
	<style>
		* {
  			box-sizing: border-box;
		}
		.footer
		{
			background-color: black;
			color:white;
			width:100%;
			
		}
		/* Create two equal columns that floats next to each other */
		
		.columnfo
		{
			float: left;
			width: 22%;
			padding: 10px;
			text-align:center;
		}
		.columnbo
		{
			float: left;
			width: 38%;
			height: 50%;
			padding: 10px;
			text-align:center;
		}
		.columnbo h2
		{
			text-align: center;
			font-family: Roboto; 
			font-size: 30px; 
			font-weight: bold;
		}
	
		.columnso
		{
			float: left;
			width: 20%;
			padding: 10px;
			text-align:center;
		}
		.columnso,.columnpo h2
		{
			text-align: center;
			font-family: Roboto; 
			font-size: 30px; 
			font-weight: bold;
		}
		.columnfo h2
		{
			text-align: center;
			font-family: Roboto; 
			font-size: 30px; 
			font-weight: bold;
		}
		.columnso,.columnpo p
		{
			font-family: Roboto; 
			font-size: 17.5px; 
			font-weight: 500;
		}
		.columnpo
		{
			float: left;
			width: 20%;
			padding: 10px;
			text-align:center;
		}

		/* Clear floats after the columns */
		.row:after 
		{
			content: "";
			display: table;
			clear: both;
		}
		.copyright
		{
			text-align:center;
			color: offwhite; 
		}
	</style>
</head>
<body>

	<div class="container-center-horizontal">
		<div class="desktop-5 screen">
			<div class="overlap-group7">
				<div class="overlap-group5">
					<img
					class="rectangle-1"
					src="rectangle-37@1x.png"
					/>
					<div class="group-17">
						<div class="group-8">
							<a href="index.php">
							<div class="overlap-group-1">
								<div class="rectangle-36-0 smart-layers-pointers"></div>
								<div class="aditi roboto-medium-black-32px">ADITI</div>
							</div>
						</a>
						</div>
					</div>
					<div class="title roboto-medium-black-96px">Confirmed</div>
				</div>
			</div>
			<div class="text-1 roboto-bold-black-96px">Thankyou for <br />Ordering</div>
			<div class="text-2">Press button to go to home</div>
			<div class="group-119-1">
				<a href="index.php">
				<div class="overlap-group2">
					<div class="place roboto-medium-white-36px">Home</div>
				</div>
			</a>
			</div>
		</div>
	</div>
	<div class="footer">
									<div class="row">
										<div class="columnbo">
											<h2>About Us</h2>
											<p style="margin-left: 15px; text-align: left; font-family: Roboto; font-size: 17.5px; font-weight: 500;">	
												Remember the times when we were  so lost due to lack of midnight snack?<br>
												Remember how we always wished we could get some good food from our
												canteen Aditi without getting up from the comfort of your bed?<br>
												Well worry not! We have the ADITI FOOD DELIVERY! <br>
											
												Order anytime and anywhere your favourite options and it will be 
												delivered to your hostel in minutes.<br> Now no long Sunday afternoon 
												waiting, only eating!

											</p>
											
										</div>							
										<div class="columnso">
										  <h2>Quick Links</h2>
										  <p>About Us</p>
										  <p>Contact Us</p>
										  <p>FAQ</p>
										  <p>Careers</p>
										  <p>Advertise</p>
										  <p>Media Kit</p>
										</div>
										
										<div class="columnpo">
										  <h2>Legal</h2>
										  <p>Privacy</p>
										  <p>Terms</p>
										  <p>Legal Notice</p>
										</div>
										
										<div class="columnfo">
											<h2>Follow Us</h2>
											<p>
												<img class="instagram" src="Instagram.png" style="width:40px; height:40px; margin-right:30px"/>
												<img class="facebook" src="facebook.png" style="width:40px; height:40px; margin-right:30px"/>
												<img class="snapchat" src="snapchat.png" style="width:50px; height:40px; margin-right:35px"/>
												<img class="twitter" src="twitter.png" style="width:40px; height:40px; margin-right:20px"/>
											</p><br> <br>
											<h2>Download Now</h2>
											<p>
												<img class="play" src="tp.png"/>
											</p>
										</div>					
									</div>
									<div class="copyright">
										<p>©2021 By Pac Pac. All Rights Resereved.</p>
									</div>
			</div>
</body>
</html>
