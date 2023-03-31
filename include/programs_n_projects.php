
<!--CITY PROJECT WRAP START-->
					<!--SECTION HEADING START-->
					<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
					<div class="section_heading center">
					
						<h2>Programs & Projects</h2>
					</div>

					<div class="city_project_wrap">
						
					<!--SECTION HEADING END-->
					<div class="container-fluid">
					<div class="city-project-slider">
						<?php 
		                                     if ($readuser10) {
		                                     $n=0;
		                                     foreach ($readuser10 as $program)
		                                      {
		                                    ?>
						<div>

							<div class="city_project_fig">
								<div class="city_blog2_list">
									<ul class="city_meta_list">
									<li class="date"><a href="programNprojectDetails.php?id=<?php echo $program['id'] ;?>" target="_self"><i class="fa fa-calendar"></i><?php echo $program['date_uploaded'] ;?></a></li>
									<figure>
										<a href="programNprojectDetails.php?id=<?php echo $program['id'] ;?>"  target="_self"><img src="seed-admin/admin/<?php echo $program['image'] ;?>"></a>
										
										<span class="city_blog2_met">Constructions Project</span>
									</figure>
									</ul>
										<div class="city_blog2_text">
											<h5 class="show-read-more"><a href="programNprojectDetails.php?id=<?php echo $program['id'] ;?>" ><?php echo $program['head'] ;?></a></h5>
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
			<!--CITY PROJECT WRAP END-->	