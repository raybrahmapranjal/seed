<!--CITY JOBS WRAP START-->
			<div class="col-md-6 col-sm-6">
					<?php 
                    if ($readuser) {
                    $n=0;
                    foreach ($readuser as $aboutKey) {
                     ?>
							<div class="city_visit_fig">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="extra-images/visit-fig.jpg" alt="">
								</figure>
							</div>
						</div>
				<div class="city_jobs_list">
				
					<ul>
						<li>
							<div class="city_jobs_item overlay">
								<span><i class="fa icon-team"></i></span>
								<div class="ciy_jobs_caption">
									<h2>About us</h2>
									<p><?php echo $aboutKey['description']?></p>
									<a class="btn-hover" href="vision-about.php">More</a>
								</div>
							</div>
						</li>
			<?php   
		        }
				}
				?>
						
					</ul>
				</div>
			
			<!--CITY JOBS WRAP END-->
		