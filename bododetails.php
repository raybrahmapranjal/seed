<?php include("include/header.php"); ?>
<?php 

if (isset($_GET['id'])) {
$id=$_GET['id'];
 $readAbouts = $crud->Read("bodolandmission","`id`='$id'");
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
						<h2>Bodoland SEED Mission</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Bodoland SEED Mission</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			<?php 
                            if($readAbouts){
                              $head=$readAbouts[0]['head'];
                              $title=$readAbouts[0]['title'];
                              $subtitle=$readAbouts[0]['subtitle'];
                              $date=$readAbouts[0]['date_uploaded'];
                              $description=$readAbouts[0]['description'];
                              $image=$readAbouts[0]['image'];

                             ?>
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_blog2_wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="city_blog2_fig fig2 detail">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="seed-admin/admin/<?php echo $image;?>" alt="" style="width: 1200px;height: 536px;">
									<span class="city_blog2_met"><?php echo $date;?></span>
								</figure>
								<div class="blog_detail_row">
									<div class="city_blog2_list">
										
										<div class="section_heading margin-bottom">
											<h2><?php echo $head;?></h2>
										</div>
											<p align="justify"><?php echo $description;?></p>
										</div>
										
										
									</div>
									
								</div>
								
							</div>
							
							
							
							
							
						</div>
						<?php 
				}?>
					</div>
				</div>
				
					
			</div>
			<?php include("include/footer.php"); ?>
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