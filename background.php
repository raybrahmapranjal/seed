<?php include("include/header.php");  ?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Background</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Background</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_blog2_wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="city_blog2_fig fig2 detail">
								
								<div class="blog_detail_row">
									<div class="city_blog2_list">
										
										<div class="section_heading margin-bottom">
											<h2>Background</h2>
										</div>
											
									</div>
										<?php 
                                        if ($readuser18) {
                                        	$n=0;
                                        	foreach ($readuser18 as $background) { ?>
									<div class="blog_detail_process">
										<div class="blog_process_detail">
											<figure class="box">
												<div class="box-layer layer-1"></div>
												<div class="box-layer layer-2"></div>
												<div class="box-layer layer-3"></div>
												<img src="seed-admin/admin/<?php echo $background['image'];?>" style="height: 286px;width: 350px;" alt="">
											</figure>
											<div class="blog_detail_process_text">
												<h4><?php echo $background['title'];?></h4>
												<p align="justify"><?php echo $background['description'];?> </p>
												
											</div>
										</div>
										
									</div>
								<?php }}?>
									
								</div>
								
							</div>
						
			            </div>
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
			
			
			<?PHP include("include/footer.php"); ?>
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