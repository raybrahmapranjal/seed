<?php include("include/header.php"); ?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
				
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>About Us</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
						  <li class="breadcrumb-item"><a href="vision-about.php">About</a></li>
						   
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			
			<!-- CITY SERVICES2 WRAP START-->
			<div class="city_service_detail_wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="sidebar_widget">
								
								
								
								
								
							</div>
						</div>
						<div class="col-md-12">
							<div class="tabs">
								<div class="tab-content">
									
									
									
									
								</div>
							</div>
							<!-- CITY DEPARTMENT LIST START-->
							<div class="city_department_list">
								<?php 
                                        if ($readuser) {
                                            $n=0;
                                            foreach ($readuser as $aboutKey) {
                                             ?>
								<ul>
									<li>
										<div class="section_heading border">
									
									<h2><?php echo $aboutKey['head'] ;?></h2>
									<span><?php echo $aboutKey['title'] ;?></span>
								</div>
										<div class="city_department2_fig">
											<figure class="box">
												<div class="box-layer layer-1"></div>
												<div class="box-layer layer-2"></div>
												<div class="box-layer layer-3"></div>
												<img src="seed-admin/admin/<?php echo $aboutKey['image'] ;?>" alt="">
											</figure>
											<div class="city_department2_text">
												<h5>About us</h5>
												<p align="justify"><?php echo $aboutKey['description'] ;?></p>
												<?php }
													} 
													?>
											</div>
										</div>
									</li>
									<li>
										<div class="city_department2_fig">
											<?php 
                                        if ($readuser4) {
                                            $n=0;
                                            foreach ($readuser4 as $aboutKey) {
                                             ?>
											<div class="city_department2_text text2">
												<h5><?php echo $aboutKey['head'] ;?></h5>
												<p align="justify"><?php echo $aboutKey['description'] ;?></p>
											</div>
											<figure class="box">
												<div class="box-layer layer-1"></div>
												<div class="box-layer layer-2"></div>
												<div class="box-layer layer-3"></div>
												<img src="seed-admin/admin/<?php echo $aboutKey['image'] ;?>" alt="">
											</figure>
											<?php }
													} 
													?>
										</div>
									</li>
									<li>
										<div class="city_department2_fig">
											<?php 
                                        if ($readuser6) {
                                            $n=0;
                                            foreach ($readuser6 as $aboutKey) {
                                             ?>
											<figure class="box">
												<div class="box-layer layer-1"></div>
												<div class="box-layer layer-2"></div>
												<div class="box-layer layer-3"></div>
												<img src="extra-images/department-03.jpg" alt="">
											</figure>
											<div class="city_department2_text">
												<h5><?php echo $aboutKey['head'] ;?></h5>
												<p align="justify"><?php echo $aboutKey['description'] ;?></p>
											</div>
										</div>
									</li>
								</ul>
							<?php }
							} 
							?>
							</div>
							<div class="city_blog2_fig fig2 detail">
								
								<div class="blog_detail_row">
									<div class="city_blog2_list">
										
										<div class="section_heading margin-bottom">
											<h2>Our Strategy</h2>
										</div>
											
									</div>
										<?php 
                                        if ($readuser19) {
                                        	$n=0;
                                        	foreach ($readuser19 as $strategy) { ?>
									<div class="blog_detail_process">
										<div class="blog_process_detail">
											<figure class="box">
												<div class="box-layer layer-1"></div>
												<div class="box-layer layer-2"></div>
												<div class="box-layer layer-3"></div>
												<img src="seed-admin/admin/<?php echo $strategy['image'];?>" style="height: 286px;width: 350px;" alt="">
											</figure>
											<div class="blog_detail_process_text">
												<h4><?php echo $strategy['title'];?></h4>
												<p align="justify"><?php echo $strategy['description'];?> </p>
												
											</div>
										</div>
										
									</div>
								<?php }}?>
									
								</div>
								
							</div>
							<!-- CITY DEPARTMENT LIST END-->
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