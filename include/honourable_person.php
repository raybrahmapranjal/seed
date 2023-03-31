
			<!-- CITY EVENT2 WRAP START-->
		   <div class="section_heading margin-bottom">
			   <h2>Hon'ble Dignitaries</h2>
			</div>

			<div class="city_blog2_wrap team">
				 						
				<div class="container">
					<!-- <div class="slider-circle-shape"><img src="images/chakra.png" width="10%" alt="" class="rotateme"></div> -->
					<div class="row">
										<?php 
                                        if ($readuser23) {
                                            $n=0;
                                            foreach ($readuser23 as $honour) { ?>
						<div class="col-md-4 col-sm-6">
							<div class="city_team_fig">
								<figure class="overlay">
									<img src="../seed/seed-admin/admin/<?php echo $honour['image'] ;?>" style="width:331px;height:300px" alt="">
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											
											
										</ul>
									</div>
								</figure>
								<div class="city_team_text">
									<h4><a href="#"><?php echo $honour['name'];?></a></h4>
									<p><?php echo $honour['shortdescription'] ;?></p>
								</div>
								<a class="small_btn2" href="mayor.php?id=<?php echo $honour['id'] ;?>" tabindex="0">view profile</a>

							</div>
						</div>						
							<?php }}?>	
						
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
			