<!-- CITY VISIT WRAP START-->

	<div class="city_news_wrap">
			<div class="city_visit_wrap">				
					<div class="section_heading margin-bottom">
			   			<h2>Bodoland SEED MISSION</h2>
					</div>
					<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-sm-5 col-xs-12">
							<div class="city_visit_fig">
								<div class="section_heading margin-bottom">
								
								
							</div>
								<iframe src="include/news_scroll.php" class="scrollbar" id="style-1"  style="height: 80vh;  "  ></iframe>
							</div>
						</div>
						<?php 
                             if ($readuser9) {
                             $n=0;
                             foreach ($readuser9 as $bodoland)
                             $string=$bodoland['description'] ;
                         		if (strlen($string) > 200) {
			                  $trimstring = substr($string, 0, 200). ' <a href="bodolandSEED.php"><font color=#f50 >..read more<p> </a> ';
			                  } else {
			                  $trimstring = $string;
			                  }
			                   {
                              {
                        ?>
						<div class="col-md-8 col-sm-6 col-xs-12">
							<div class="city_visit_text">
								<h3><?php echo $bodoland['head'] ;?></h3>
								<!-- <h5>Are You A <span>Resident!</span></h5> -->
								
								<p align="justify]" class="para"><?php  echo  $trimstring; ?></p>
								
								
							</div>
							

						</div>
						<?php }}}?>
						<div class="col-md-8 col-sm-6 col-xs-12">
							<div class="city_visit_text2">
								<h3>ADDRESS</h3>
								
								<div class="ciy_jobs_caption2">
									<h2></h2>
									<p>Office of the Department of SEED<BR>BTR,SH 14,DIMALGAON<BR>ASSAM 783370
									</p>
									
								</div>
								
							</div>
							

						</div>
						
						
					</div>
				</div>
			</div>
		</div>
			<!-- CITY VISIT WRAP END-->
			

		
			