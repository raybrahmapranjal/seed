
			<!--CITY ABOUT WRAP START-->
			<div class="city_about_wrap">
				<div class="container">
					<?php 
                                        if ($readuser) {
                                            $n=0;
                                            foreach ($readuser as $aboutKey) {
                                             ?>
									
					<div class="row">
						<div class="col-md-6">
							<div class="city_about_fig">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="seed-admin/admin/<?php echo $aboutKey['image'];?>" alt="">
								</figure>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="city_about_list">
								<!--SECTION HEADING START-->
								<div class="section_heading border">
									
									<h2><?php echo $aboutKey['head'] ;?></h2>
									<span><?php echo $aboutKey['title'] ;?></span>
								</div>
								<!--SECTION HEADING END-->
								<div class="city_about_text">
									
									<p><?php echo $aboutKey['description'] ;?> </p>
								</div>
								

							</div>
						</div>
					</div>
				</div>
			</div>
		  <?php   
	        }
			}
			?>
			<!--CITY ABOUT WRAP END-->