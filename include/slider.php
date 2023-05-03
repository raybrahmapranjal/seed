
 <!--CITY REQUEST WRAP START -->
 <?php 
$readuser7 = $crud->Read("sliderphotos","1 ORDER BY `id` ASC ");

?>
	<?php 
        if($readuser7){
        $image=$readuser7[0]['image'];

     ?>
			<div class="city_requset_wrap">
				<div class="container">
					<div class="row">
						<?php include("include/slider_top.php"); ?>
						  
						<div class="col-md-6 col-sm-6 col-xl-6">
						  	
								
						  	<div class="slider">
		                        <div class="slider-items">
		                        	
						            <div  class="item active ">
						             <img style="width: 1000px;height: 300px" src="../seed/seed-admin/admin/<?php echo $image;?>" />
						            </div>
	<?php }?>
						           <?php 
                                        if ($readuser24) {
                                            $n=0;
                                            foreach ($readuser24 as $honour) { ?>
						            <div  class="item">
						             <img style="width: 1000px;height: 300px" src="../seed/seed-admin/admin/<?php echo $honour['image'];?>" />
						            </div>
						              <?php }}?>	
							    </div>
						        <!-- slider controls -->
						          <div class="left-slide"><</div>
						          <div class="right-slide">></div>
						        <!-- slider controls -->
                            </div>
                        </div>



   
			      
						<div class="col-md-6 col-sm-6 col-xl-6">
							<iframe src="include/newsticker.php" class="iframe2" width="400" height="280" style="border-radius: 10px"></iframe>
						</div>
					</div>
				</div>
			
				

<script src="slider/js/slider1.js"></script>

			