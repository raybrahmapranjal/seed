<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php  
$dbhost = 'localhost';  
$dbuser = "root";  
$dbpass = ""; 
$dbname = 'seedadmin'; 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname) or die ('Error connecting to mysql');  
  
// $connection = mysql_select_db($dbname); 
  
 


if (isset($_GET["page"])) {
 
 $page  = $_GET["page"]; 
} 
else { 
	$page=1; 
};  
$limit = 6;
$offset = ($page-1) * $limit; 

  
$sql = "SELECT * FROM events ORDER BY id DESC  limit $offset, $limit";  

$rs_result = mysqli_query ($conn,$sql); 
$row=mysqli_num_rows($rs_result); 

?> 
<?php include("include/header.php");  ?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>NEWS/EVENTS</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">NEWS/EVENTS</li>
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
							<div class="blog_detail_row">
									
										<!-- CITY EVENT2 WRAP START-->
								<div class="city_blog2_wrap">
									<div class="container">
										<div class="row">
											<?php 
												if ($readuser12) {
			                                     $n=0;
			                                     foreach ($readuser12 as $events)
			                                      {
			                                    while ($events = mysqli_fetch_assoc($rs_result))
			                                    {
											?>
											<div class="col-md-4 col-sm-6">
												<div class="city_blog2_fig">
													<figure >
														<a href="eventsSEEDdetails.php?id=<?php echo $events['id'] ;?>" target="_self"><img src=" seed-admin/admin/<?php echo $events['image'] ;?>"  width="500" height="200" class="overlay" alt=""></a>
														
														
													</figure>
													<div class="city_blog2_list">
														<ul class="city_meta_list">
															<li class="date"><a href="event-detail.php?id=<?php echo $events['id'] ;?>"><i class="fa fa-calendar"></i><?php echo $events['date_uploaded'] ;?></a></li>
															
														</ul>
														<div class="city_blog2_text">
															<h5 class="show-read-more"><a href="event-detail.php?id=<?php echo $events['id'] ;?>"><?php echo $events['head'] ;?>"</a></h5>
															<p class="show-read-more blogpara" ><a href="#"><?php echo $events['description'] ;?>"</a></p>
															<p align="justify"><i class="fa fa-map-marker"> <?php echo $events['address'] ;?></i></p>
															<a class="btn-hover2" href="event-detail.php?id=<?php echo $events['id'] ;?>" tabindex="0">Read More</a>
														</div>
													</div>
												</div>
											</div>
											<?php }}}?>
											<?php  
												$sql1 = "SELECT * FROM events";  
												$rs_result1 = mysqli_query($conn,$sql1) or die("query failed");  
												if( mysqli_num_rows($rs_result1)>0);{
												// echo $row;  
												$total_records = mysqli_num_rows($rs_result1);
												  
												$total_pages = ceil($total_records / $limit);  
												// $pagLink = "<ul class='pagination'>"; 
												} 
												// for ($i=1; $i<=$total_pages; $i++) {  
												//              $pagLink .= "<li><a href='eventsSEED.php?page=".$i."'>".$i."</a></li>";  
												// }
												// } 
												// echo $pagLink . "</ul>";  
											?>
											<div class="col-md-12">
												<div class="pagination" id="myDIV" >

													<ul >
													  <?php for ($i=1; $i<=$total_pages; $i++) {?>
													  <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="event.php?page=<?=$i?>"><?=$i?></a></li>
													  <?php }?>
													</ul>
												</div>
											</div>
										</div>
									</div>
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
		<script>

// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
<script>
$(document).ready(function(){
    var maxLength = 40;
    $(".show-read-more").each(function(){
        var myStr = $(this).text();
        if($.trim(myStr).length > maxLength){
            var newStr = myStr.substring(0, maxLength);
            var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
            $(this).empty().html(newStr);
            $(this).append(' <a href="javascript:void(0);" class="read-more">...</a>');
            $(this).append('<span class="more-text">' + removedStr + '</span>');
        }

    });
    
});
</script>

    </body>


</html>

