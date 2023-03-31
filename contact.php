<?php
session_start();
?>

<?php include("include/header.php");?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Contact Us</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Contact us</li>
						</ul>
						
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			<!-- CITY EVENT2 WRAP START-->
			
			<div class="city_event2_wrap">
				<div class="container">
					
					<div class="city_event_detail question overlay">
						<h3>DID’T FIND YET? ASK YOUR QUESTION</h3>
						
                        <?php 
	                    if (isset($_SESSION['successMessage'])) {
	                        echo "<p class='success'><font size='4pt'>".$_SESSION['successMessage']."<br>";
	                        unset($_SESSION["successMessage"])  ;
	                         } 
	                    if (isset($_SESSION['errorMessage'])) {
                        	echo "<p class='error'><font color=red size='4pt'>".$_SESSION['errorMessage'];
                        	unset($_SESSION['errorMessage'])  ;
                        
                    		}
	                     ?>
	                    </p>
						

						<div class="event_booking_form">
							<form action="email.php" method="POST">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="event_booking_field">
										<input type="text" name="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="event_booking_field">
										<input type="email" name="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="event_booking_field">
										<input type="text" name="subject" placeholder="subject">
									</div>
								</div>
								<div class="col-md-12">
									<div class="event_booking_area">
										<textarea name="message" placeholder="message"></textarea>
										<button class="theam_btn btn2" name="submit" >Submit</button>
										
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
			
			<footer>
				<?php include("include/footer.php"); ?>
			</footer>
		</div>
		 <!--WRAPPER END-->
		 <style type="text/css">
			.success{
				text-align: center;
				color: #70df3d;;
				font-weight: 600;
				position: relative;
				z-index: 2;
				margin-bottom: 33px;
					}
			.error{
				text-align: center;
				color: #d50a0a;
				font-weight: 600;
				position: relative;
				z-index: 2;
				margin-bottom: 33px;
					}
	
		</style>
        <!--Jquery Library-->
        <script src="js/jquery.js"></script>
    	<!--Bootstrap core JavaScript-->
        <script src="js/bootstrap.js"></script>
        <!--Slick Slider JavaScript-->
        <script src="js/slick.min.js"></script>
		<!--Pretty Photo JavaScript-->
        
        <!--Pretty Photo JavaScript-->
        <script src="js/jquery.prettyPhoto.js"></script>
		
		<!--Pretty Photo JavaScript-->	
        <script src="js/jquery.bxslider.min.js"></script>
		<!--Image Filterable JavaScript-->
		<script src="js/jquery-filterable.js"></script>
		<!--Pretty Photo JavaScript-->
        
		<!--Pretty Photo JavaScript-->
        <script src="js/modernizr.custom.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="js/jquery.dlmenu.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="js/downCount.js"></script>
		<!--Counter up JavaScript-->
        <script src="js/waypoints.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="js/waypoints-sticky.js"></script>
        
        <!--Custom JavaScript-->
    	<script src="js/custom.js"></script>
		<script>document.documentElement.className = 'js';</script>
    </body>


</html>