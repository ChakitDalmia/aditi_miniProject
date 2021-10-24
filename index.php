<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="firstpage.css">
	<script type="text/javascript"> 
		function validate(valfrm){
			var str="";
			var str1=""; 
			var con = valfrm.phonenumber.value.toString();
			var si = valfrm.sap_id.value.toString();
			if(valfrm.name.value=="")  str+="Enter Name\n"; 
			if(valfrm.email.value=="")  str+="Enter Email\n";
			else{
				if(valfrm.email.value.indexOf(' ') >=0){  
					str1+="Email Address Can not have Space...\n"; 
				} 
				if(valfrm.email.value.indexOf('@')==-1){
					str1+="Email Address Contains @...\n"; 
				}
			} 
			if(valfrm.phonenumber.value=="")  str+="Enter Phone-Number\n"; 
			else{
				if(con.length!=10){
					str1+="Phone number should have 10 digits...\n";
				}				
			}
			if(valfrm.sap_id.value=="")  str+="Enter Sap-ID\n"; 
			else{			
				if(si.length!=11){
					str1+="Sap-ID should have 11 digits...\n";
				}
			}
			if(valfrm.message.value=="")  str+="Enter Message\n";
			if(str!="") { 
				str="Please Complete Following Fields \n" +str +str1; 
				alert(str);   
				return false; 
			}
			else {
				alert("Your message has been recorded");
				return true; 
			}
		}
	</script> 
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
	if(isset($_POST['cheesePakoda'])){
		
		$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (101, 'Cheese Pakoda', 120, 300);");
	}
	else if(isset($_POST['specialTea'])){
    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (103, 'Special Tea', 10, 60);");
	}
	else if(isset($_POST['vadaPav'])){
    	$sql = mysqli_query($conn, "INSERT INTO cart (item_id, item_name, price, time_sec) VALUES (105, 'Vada Pav', 20, 300);");
	}
	?>
	<div class="container-center-horizontal">
		<div class="desktop-1 screen">
			<div class="overlap-group7">
				<div class="overlap-group5">
					<img
					class="rectangle-1"
					src="rectangle-1@1x.png"
					/>
					<img
					class="rectangle-3"
					src="rectangle-3@1x.png"
					/>
					<div class="group-17">
						<div class="group-8">
							<div class="overlap-group-1">
								<div class="rectangle-36-0 smart-layers-pointers"></div>
								<div class="aditi roboto-medium-black-32px">ADITI</div>
							</div>
						</div>
					</div>
					<div class="overlap-group3">
						<a href="#about_us1">
							<div class="group-92">
								<div class="overlap-group">
									<!-- <img
									class="rectangle-36 smart-layers-pointers"
									src="rectangle-36@2x.png"
									/> -->
									<div class="rectangle-36 smart-layers-pointers"></div>
									<div class="about-us roboto-medium-black-32px">About Us</div>
								</div>
							</div></a
							><a href="#popular1">
								<div class="group-93 smart-layers-pointers">
									<div class="overlap-group">
										<div class="rectangle-36-1 smart-layers-pointers"></div>
										<div class="popular roboto-medium-black-32px">Popular</div>
									</div>
								</div></a>
								<a href="#contact_us1">
									<div class="group-94 smart-layers-pointers">
										<div class="overlap-group">
											<!-- <img
											class="rectangle-36-2 smart-layers-pointers"
											src="rectangle-36-1@2x.png"
											/> -->
											<div class="rectangle-36-2 smart-layers-pointers"></div>
											<div class="contact-us roboto-medium-black-32px">Contact Us</div>
										</div>
									</div></a
									><img
									class="line-6"
									src="line-6@2x.png"
									/>
									<img
									class="line-7"
									src="line-6@2x.png"
									/>
								</div>
								<div class="group-95">
									<div class="overlap-group4">
										<!-- <img
										class="rectangle-36-3 smart-layers-pointers"
										src="rectangle-36-2@2x.png"
										/> -->
										<a href="cart\c.php">
										<div class="rectangle-36-3 smart-layers-pointers"></div>
										<img
										class="feathershopping-cart"
										src="feather-shopping-cart-2@2x.png"
										/>
									</div>
								</a>
								</div>
								<div class="group-122">
									<h1 class="khoj-your-bhoj">
										<span class="span0 roboto-bold-black-96px">KHOJ </span><span class="span1">YOUR<br/></span
										><span class="span2">BHOJ</span>
									</h1>
									<a href="Menu\menu1.php">
									<div class="group-121">
										<div class="overlap-group-2">
											<div class="menu roboto-medium-black-48px">MENU</div>
										</div>
									</div>
									</a>
								</div>
							</div>
							<img
							class="line-1"
							id="line-1"
							src="line-1@1x.png"
							/>
						</div>
						<img
						class="line-3"
						id="line-3"
						src="line-1@1x.png"
						/>
						<img
						class="line-4"
						id="line-4"
						src="line-1@1x.png"
						/>
						<div class="group-58" id="about_us1">
							<div class="group-75">
								<div class="about-us-1 roboto-bold-black-80px">About Us</div>
								<div class="text-1">
									Remember the times when we were so lost due to lack of midnight snack? Remember how we always
									wished we could
									get some good food from our canteen Aditi without getting up from the comfort of your bed? <br
									/>Well worry
									not! We have the ADITI FOOD DELIVERY! Order anytime and anywhere your favourite options and it
									will be
									delivered to your hostel in minutes. Now no long Sunday afternoon waiting, only eating!
								</div>
							</div>
							<div class="group-74">
								<div class="overlap-group-3">
									<div class="ellipse-1"></div>
									<img
									class="ellipse-2"
									src="ellipse-2-1@2x.png"
									/>
								</div>
							</div>
						</div>
						<div class="group-57" id="popular1">
							<div class="overlap-group6">
								<img
								class="rectangle-23"
								src="rectangle-23-1@1x.png"
								/>
								<div class="popular-orders roboto-bold-black-80px">Popular Orders</div>
								<div class="group-55">
									<img
									class="vector-1"
									src="vector-1-1@2x.png"
									/>
									<a href="Menu\menu1.php">
									<div class="overlap-group-4">
										<img
										class="rectangle-26 smart-layers-pointers"
										src="rectangle-26-1@2x.png"
										/>
										<div class="view-all roboto-medium-black-28px">View All</div>
									</div>
									</a>
								</div>
								<form class="group-73" method="post" >
									<div class="group-106">
										<img
										class="rectangle-30"
										src="rectangle-30-3@2x.png"
										/>
										<div class="group-67">
											<div class="vada-pav roboto-bold-black-38px">Vada Pav</div>
											<div class="price roboto-normal-black-26px">INR 250</div>
										</div>
										<!-- <a href="javascript:SubmitForm('form4')"
										> --><!-- <img
										class="fluentadd-circle-28-filled"
										src="fluent-add-circle-28-filled-3@2x.png"
										/> -->
										<!-- <button class="fluentadd-circle-28-filled"  name="vadaPav" ><i class="fas fa-plus-circle"></i></button> -->
										<input type="hidden" class="fluentadd-circle-28-filled" name="vadaPav" />
										<input type="image" class="fluentadd-circle-28-filled" src="fluent-add-circle-28-filled-3@2x.png"  />

										<!-- <input type="SUBMIT" class="fluentadd-circle-28-filled"  name="vadaPav" /><i class="fas fa-plus-circle"> -->
									<!-- </a> -->
								</div>
								<div class="group-105">
									<img
									class="rectangle-30"
									src="rectangle-30-4@2x.png"
									/>
									<div class="group-67">
										<div class="special-tea roboto-bold-black-38px">Special Tea</div>
										<div class="price roboto-normal-black-26px">INR 250</div>
									</div>
									<!-- <a href="javascript:SubmitForm('form4')"
									> --><!-- <img
									class="fluentadd-circle-28-filled-1"
									src="fluent-add-circle-28-filled-3@2x.png"
									/> -->
									<input type="hidden" class="fluentadd-circle-28-filled-1" name="specialTea" />
									<input type="image" class="fluentadd-circle-28-filled-1" src="fluent-add-circle-28-filled-3@2x.png"  />
								<!-- </a> -->
							</div>
							<div class="group-66">
								<img
								class="rectangle-30"
								src="rectangle-30-5@2x.png"
								/>
								<div class="group-67-1">
									<div class="cheese-pakoda roboto-bold-black-38px">Cheese Pakoda</div>
									<div class="price roboto-normal-black-26px">INR 250</div>
								</div>
								<!-- <a href="javascript:SubmitForm('form4')"
								> --><!-- <img
								class="fluentadd-circle-28-filled-2"
								src="fluent-add-circle-28-filled-3@2x.png"
								/> -->
								<!-- <button><img
								class="fluentadd-circle-28-filled-2"
								src="fluent-add-circle-28-filled-3@2x.png"
								name="cheesePakoda"
								/></button> -->
								<input type="hidden" class="fluentadd-circle-28-filled-2" name="cheesePakoda" />
								<input type="image"  class="fluentadd-circle-28-filled-2" src="fluent-add-circle-28-filled-3@2x.png"/>
							<!-- </a> -->
						</div>
					</form>
				</div>
			</div>
			<div class="group-90" id="contact_us1">
				<form>
				<div class="group-82" >
					<div class="flex-row">
						<div class="flex-col">
							<div class="overlap-group-5">
								<!-- <textarea class="rectangle-34" name="name" placeholder=""></textarea> -->
								<input
								class="name roboto-normal-storm-dust-18px"
								name="name"
								placeholder="Name *"
								type="text"
								/>
							</div>
							<div class="overlap-group-5">
								<!-- <textarea class="rectangle-34" name="phoneNo" placeholder=""></textarea -->
								<input
								class="phone-number roboto-normal-storm-dust-18px"
								name="phonenumber"
								placeholder="Phone Number *"
								type="number"
								/>
							</div>
						</div>
						<div class="flex-col-1">
							<div class="overlap-group-5">
								<!-- <textarea class="rectangle-34" name="email" placeholder=""></textarea> -->
								<input
								class="email roboto-normal-storm-dust-18px"
								name="email"
								placeholder="Email *"
								type="text"
								
								/>
							</div>

							
							<div class="overlap-group2">
								<!-- <textarea class="rectangle-34" name="sapid" placeholder=""></textarea> -->
								<input
								class="sap-id roboto-normal-storm-dust-18px"
								name="sap_id"
								placeholder="SAP-ID *"
								type="number"
								/>
							</div>

						</div>
					</div>
					
					
					<div class="overlap-group4-1">
						<textarea
						class="message roboto-normal-storm-dust-18px"
						name="message"
						placeholder="Message *"
						
						></textarea>
					</div>
					
					
					<div class="group-83">
						<button class="overlap-group5-1" onClick="validate(this.form);"  >
							<div class="send-message">Send Message
							</div>
						</button >
					</div>
				</div>
			</form>
				<div class="group-89">
					<div class="group-88">
						<div class="contact-information">Contact Information</div>
						<div class="text-2">Fill int the form and our team will contact you within 24 hours</div>
					</div>
					<div class="group-87">
						<div class="group-84">
							<img
							class="fluentcall-24-filled"
							src="fluent-call-24-filled-1@2x.png"
							/>
							<h2 class="phone roboto-medium-white-24px">+91- 9999999999</h2>
						</div>
						<div class="group-85">
							<img
							class="fluentmail-20-filled"
							src="fluent-mail-20-filled-1@2x.png"
							/>
							<h2 class="text-3 roboto-medium-white-24px">aditi.contact.nmims.edu</h2>
						</div>
						<div class="group-86">
							<img
							class="cilocation"
							src="ci-location-1@2x.png"
							/>
							<h3 class="text-4 roboto-medium-white-24px">
								MPSTME, NMIMS, <br />Shirpur, Maharashtra
							</h3>
						</div>
					</div>
				</div>
			</div>
			
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
												<img class="instagram" src="instagram.png" style="width:40px; height:40px; margin-right:30px"/>
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
