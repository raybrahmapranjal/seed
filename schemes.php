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
$limit = 9;
$offset = ($page-1) * $limit; 

  
$sql = "SELECT * FROM schemes ORDER BY id DESC  limit $offset, $limit";  

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
						<h2>Schemes</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Schemes</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			<!-- CITY SERVICES2 WRAP START-->
			
			<div class="city_services2_wrap">
				<div class="container">
					<div class="row">
						 <?php 
                                     if ($readuser22) {
                                     $n=0;
                                     foreach ($readuser22 as $schemes) 
                             {
                             ?>
						<div class="col-md-4 col-sm-6">
							
							<div class="city_business_fig">
								<figure class="overlay">
									<img src="seed-admin/admin/<?php echo $schemes['image'] ;?>" style="width: 300px;height: 200px" alt="">
									<div class="city_service2_list">
										
										<div class="city_service2_caption">
											<h5 class="show-read-more"><?php echo $schemes['title'] ;?></h5>
										</div>
									</div>
								</figure>
								<div class="city_business_list">
									
									<a class="see_more_btn" href="schemeDetails.php?id=<?php echo $schemes['id'] ;?>">read more<i class="fa icon-next-1"></i></a>
								</div>
							</div>
						
						</div>
							<?php } }?>
							<?php  
										$sql1 = "SELECT * FROM schemes";  
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
											  <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="schemes.php?page=<?=$i?>"><?=$i?></a></li>
											  <?php }?>
											</ul>
										</div>
									</div>
						
					</div>
				</div>
			</div>
			
			<!-- CITY SERVICES2 WRAP END-->			
				
			
					</div>
				</div>
			</div>	
			<!--CITY REQUEST WRAP END-->
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
    var maxLength = 20;
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