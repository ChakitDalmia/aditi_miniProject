<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="secondpage.css">
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php
	$conn = mysqli_connect("remotemysql.com", "fKKAzIiB0O", "9OBgTR2cT2", "fKKAzIiB0O");
	if(isset( $_POST['cheesePakoda'])){
		$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (101, 'Cheese Pakoda', 120, 300);");
	}
	if(isset( $_POST['lemonade'])){

    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (102, 'Lemonade', 15, 120);");
	}
	if(isset( $_POST['specialTea'])){
    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (103, 'Special Tea', 10, 60);");
	}
	if(isset( $_POST['pavBhaji'])){
		$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (104, 'Pav Bhaji', 60, 600);");
	}
	if(isset( $_POST['vadaPav'])){
    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (105, 'Vada Pav', 20, 300);");
	}
	if(isset( $_POST['coffee'])){
    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (106, 'Coffee', 10, 90);");
	}


	?>

	<div class="container-center-horizontal">
		<form class="desktop-2 screen"  method="post">
			<div class="overlap-group7">
				<!-- <div class="overlap-group5"> -->
					<img
					class="rectangle-1"
					src="rectangle-37@1x.png"
					/>
					<div class="group-17">
						<div class="group-8">
							<a href="index.php">
							<div class="overlap-group-">

								<div class="rectangle-36-0 smart-layers-pointers"></div>
								<div class="aditi roboto-medium-black-32px">ADITI</div>
							</div>
						</a>
						</div>
					</div>
					<div class="title roboto-medium-black-96px">Menu</div>
					<div class="group-95">
						<a href="c.php">
						<div class="overlap-group4">

							<div class="rectangle-36-3 smart-layers-pointers"></div>
							<img
							class="feathershopping-cart"
							src="feather-shopping-cart-2@2x.png"
							/>
						</div>
					</a>
					</div>
					<!-- </div> -->
				</div>
				<div class="flex-row">
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39@2x.png"
						/>
						<div class="flex-col">
							<div class="lemonade roboto-bold-black-42px">Special Tea</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">1 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 10</div>

							<div class="group-69">
								<button type="submit" class="overlap-group-2 border-1px-fantasy" name="specialTea">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>

						</div>
					</div>
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39-3@2x.png"
						/>
						<div class="flex-col">
							<div class="lemonade roboto-bold-black-42px">Vada Pav</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">5 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 20</div>
							
							<div class="group-69">
								<button class="overlap-group-2 border-1px-fantasy" name="vadaPav">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>

						</div>
					</div>
				</div>
				<div class="flex-row">
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39-4@2x.png"
						/>
						<div class="flex-col">
							<div class="lemonade roboto-bold-black-42px">Coffee</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">1.5 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 10</div>

							<div class="group-69">
								<button class="overlap-group-2 border-1px-fantasy" name="coffee">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>

						</div>
					</div>
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39-1@2x.png"
						/>
						<div class="flex-col">
							<div class="cheese-pakoda roboto-bold-black-42px">Cheese Pakoda</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">5 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 120</div>

							<div class="group-69">
								<button class="overlap-group-2 border-1px-fantasy" name="cheesePakoda">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>

						</div>
					</div>
				</div>
				<div class="flex-row">
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39-2@2x.png"
						/>
						<div class="flex-col">
							<div class="lemonade roboto-bold-black-42px">Pav Bhaji</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">10 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 60</div>

							<div class="group-69">
								<button class="overlap-group-2 border-1px-fantasy" name="pavBhaji">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>
						</div>
					</div>
					<div class="overlap-group-3">
						<img
						class="rectangle-39"
						src="rectangle-39-5@2x.png"
						/>
						<div class="flex-col">
							<div class="lemonade roboto-bold-black-42px">Lemonade</div>
							<div class="group-98">
								<div class="group-96">
									<img
									class="ant-designstar-filled"
									src="ant-design-star-filled-5@2x.png"
									/>
									<div class="text roboto-light-black-28px">4.3</div>
								</div>
								<div class="ellipse-3"></div>
								<div class="group-97">
									<img
									class="biclock-history"
									src="bi-clock-history-5@2x.png"
									/>
									<div class="address roboto-light-black-28px">2 mins</div>
								</div>
							</div>
							<div class="price roboto-normal-black-26px">INR 15</div>
							<div class="group-69">
								<button class="overlap-group-2 border-1px-fantasy" name="lemonade">
									<div class="add-to-cart roboto-medium-white-28px">Add to Cart</div>
								</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div><br><br><br><br><br><br><br>
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
