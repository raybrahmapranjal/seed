
<?php include("include/header.php"); ?>
<?php 

if (isset($_GET['id'])) {
$id=$_GET['id'];
 $readAbouts = $crud->Read("events","`id`='$id'");
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
                        <h2>Event Detail</h2>
                        <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Event Detail</li>
                        </ul>
                    </div>
                </div>
            </div>
			<!-- SAB BANNER END-->
			<?php 
                            if($readAbouts){
                              $head=$readAbouts[0]['head'];
                              // $shortdescription=$readAbouts[0]['shortdescription'];
                              $description=$readAbouts[0]['description'];
                              $image=$readAbouts[0]['image'];

                             ?>
			
			<!-- CITY SERVICES2 WRAP START-->
			<div class="city_health_department">
				<div class="container">
					
					<div class="row">
						<div class="col-md-5">
							<div class="sidebar_widget">
								<div class="city_health2_fig">
									<figure class="box">
										<div class="box-layer layer-1"></div>
										<div class="box-layer layer-2"></div>
										<div class="box-layer layer-3"></div>
										<img src="seed-admin/admin/<?php echo $image;?>" style="width: 600px; height: 450px;" alt="650x 350">
									</figure>	
								</div>
								
							</div>
						</div>
						<div class="col-md-7">
							<div class="city_health2_row">
								<!--CITY HEALTH TEXT START-->
								<div class="city_health2_text">
									<!--SECTION HEADING START-->
									<div class="event_detail_text">
										
										<h4><?php echo $head;?></h4>
									</div>
									<!--SECTION HEADING END-->
									<p align="justify"><?php echo $description;?></p>
									
								</div>
								<!--CITY HEALTH TEXT END-->
								
								
								
								
								
								
							</div>
						</div>
					</div>	
				</div>
				<?php 
				}?>	
			</div>
			<!-- CITY SERVICES2 WRAP END-->
			
			<footer>
				<?php include("include/footer.php"); ?>
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