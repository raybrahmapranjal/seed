	
<?php include("include/header.php");?>
<?php 

if (isset($_GET['id'])) {
$id=$_GET['id'];
 $readAbouts = $crud->Read("honourable","`id`='$id'");
}
?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Hon'ble Dignitaries</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Hon'ble Dignitaries</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			<?php 
                            if($readAbouts){
                              $name=$readAbouts[0]['name'];
                              $shortdescription=$readAbouts[0]['shortdescription'];
                              $description=$readAbouts[0]['description'];
                              $image=$readAbouts[0]['image'];

                             ?>
			
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_event2_wrap">
				<div class="container">
					<div class="city_mayor_row">
						<div class="city_mayor_fig">
							<figure>
								<img src="seed-admin/admin/<?php echo $image;?>" alt="331 x 407" style="width:331px;height:300px">
							</figure>
							<div class="city_mayor_text">
								<h2><?php echo $name;?></h2>
								<p><?php echo $shortdescription;?></p>
								<ul class="city_mayor_list">
								
									<!-- <li><span><i class="fa fa-phone"></i></span>1234-567-8910</li> -->
									<!-- <li><span><i class="fa fa-envelope-o"></i></span>yourname@domain.com</li>
									
								
									<li><span><i class="fa fa-map-marker"></i></span>BTC SECTRTARY, 783365, KOKRAJHAR</li> -->
								</ul>
								<div class="city_mayor_contact">
									<a class="theam_btn" href="#" tabindex="0">Follow us</a>
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="city_mayor_caption">
							<p style="color:#eadc11;"><?php echo $description;?></p>
							<!-- <p class="honour">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. velit mauris egestas quam, ut aliquam .Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo</p> -->
						</div>
					</div>
					<?php 
				}?>
					
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
			
			
			<footer>
				<?php include("include/footer.php");  ?>
			</footer>
		</div>
		 <!--WRAPPER END-->
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