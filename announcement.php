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
$limit = 4;
$offset = ($page-1) * $limit; 

  
$sql = "SELECT * FROM announcements ORDER BY id DESC  limit $offset, $limit";  

$rs_result = mysqli_query ($conn,$sql); 
$row=mysqli_num_rows($rs_result); 

?> 
<?php include("include/header.php"); ?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Announcement</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Announcement</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
					
			<!-- CITY EVENT2 WRAP START-->
			
			<div class="city_event2_wrap">
				<div class="container">

					<div class="city_full_event">
						<?php 
					                if ($readuser21) {
					                	$n=0;
					                	foreach ($readuser21 as $announce) 
					    		{ ?>
						<ul>
							<li>
								
								<div class="city_full_event_list overlay">
									<div class="city_event2_calender">
										<ul>
											<li>
												<h6><i class="fa fa-calendar"></i> <?php echo $announce['date_uploaded'];?></h6>
												
											</li>
											
										</ul>
									</div>
									<div class="city_event2_meeting">
										<h5 class="show-read-more"><?php echo $announce['head'];?></h5>
										<ul class="city_meta_list">
											
											
										
										</ul>
										<p class="show-read-more blogpara"><span><?php echo $announce['description'];?></p>
									</div>
									<a class="theam_btn btn2" href="seed-admin/admin/<?php echo $announce['image'];?>"download><i class="fa fa-file-pdf-o" style="color:red"> </i> detail</a>
								</div>
							</li>
							
							
						</ul>
						<?php }}?>
					
									<?php  
										$sql1 = "SELECT * FROM announcements";  
										$rs_result1 = mysqli_query($conn,$sql1) or die("query failed");  
										if( mysqli_num_rows($rs_result1)>0);{
										// echo $row;  
										$total_records = mysqli_num_rows($rs_result1);
										  
										$total_pages = ceil($total_records / $limit);  
										// $pagLink = "<ul class='pagination'>"; 
										} 
										// for ($i=1; $i<=$total_pages; $i++) {  
										//              $pagLink .= "<li><a href='bodolandSEED.php?page=".$i."'>".$i."</a></li>";  
										// }
										// } 
										// echo $pagLink . "</ul>";  
									?>
									<div class="col-md-12">
										<div class="pagination" id="myDIV" >

											<ul >
											  <?php for ($i=1; $i<=$total_pages; $i++) {?>
											  <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="announcement.php?page=<?=$i?>"><?=$i?></a></li>
											  <?php }?>
											</ul>
										</div>
									</div>
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
			
			
			
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