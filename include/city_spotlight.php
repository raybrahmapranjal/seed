<!--CITY BLOG WRAP START-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="heding_full">
						<div class="section_heading">
						
							<h2>SEED HIGHLIGHTS</h2>
						</div>
						<div class="container">
						<p>SEED Department Spotlights provide valuable insights into the Community Activities, Staff members, accomplishments and imapact of the department and it also highlights the initiatives of the department.</p>
					</div>

			<div class="city_blog_wrap">
				<div class="container">
					<!--SECTION HEADING START-->
					
					<!--SECTION HEADING END-->
					<div class="row">
						<?php 
                        if ($readuser11) {
                        $n=0;
                        foreach ($readuser11 as $spotlight) { ?>
						<div class="col-md-4 col-sm-4">
							<div class="city_blog_fig">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="seed-admin/admin/<?php echo $spotlight['image'] ;?>" alt="" style="width: 500px;height: 200px;">
								</figure>
								<div class="city_blog_text">
									<h4 class="show-read-more" ><?php echo $spotlight['head'] ;?></h4>
									<!-- <p align="justify" class="text"><?php echo $spotlight['title'] ;?></p> -->
									<div class="city_blog_social">
										<!-- <a class="theam_btn border-color color" href="seedspotlight_detail.php?id=<?php echo $spotlight['id'] ;?>" tabindex="0">Read More</a> -->
										<div class="city_blog_icon_list">
											<ul class="social_icon">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li><a href="#"><i class="fa fa-google"></i></a></li>
											</ul>
										
										</div>
									</div>
								</div>
							</div>
							<div class="city_blog_fig position">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="seed-admin/admin/<?php echo $spotlight['image'] ;?>" alt="">
								</figure>
								<div class="city_blog_text">
									<h4 ><?php echo $spotlight['head'] ;?></h4>
									<p  class="show-read-more"><?php echo $spotlight['title'] ;?></p>
									<div class="city_blog_social">
										<a class="theam_btn border-color  color" href="seedspotlight_detail.php?id=<?php echo $spotlight['id'] ;?>" tabindex="0">Read More</a>
										
									</div>
								</div>
							</div>

						</div>

						<?php }}?>
						
					</div>
				</div>
			</div>
			
			<script>
$(document).ready(function(){
    var maxLength = 20;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" >...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }

    });
    $(".read-more").click(function(){
        $(this).siblings(".more-text").contents().unwrap();
        $(this).remove();
    });

    
});
</script>

			<!--CITY BLOG WRAP END-->