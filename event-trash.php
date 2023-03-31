<?php 
include("../seed-admin/admin/classes/Crud.php");
$crud = new Crud();

$readuser12 = $crud->Read("events","1");

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SEED|BTR</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="css/slick-theme.css" rel="stylesheet"/>
        <!-- ICONS CSS -->
        <link href="css/font-awesome.css" rel="stylesheet">
		<!-- ICONS CSS -->
        <link href="css/animation.css" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="css/prettyPhoto.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/jquery.bxslider.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/style5.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/demo.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/fig-hover.css" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="css/typography.css" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="style.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="css/component.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="css/shotcode.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="svg-icon.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="css/color.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/newstyle.css" rel="stylesheet">
    </head>
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
    <body class="demo-5">
        <?php include("include/navbar.php"); ?>
				
				
				
				
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Upcomig Event</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Event</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_event2_wrap">
				<div class="container">
					<div class="row">
						<?php 
                        if ($readuser12) {
                        $n=0;
                        foreach ($readuser12 as $events) { ?>
						<div class="col-md-4 col-sm-6">
							<div class="city_event2_fig">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src="seed-admin/admin/<?php echo $events['image'] ;?>" height=250 alt="">
								</figure>
								<div class="city_event2_list">
									<div class="city_event2_date">
										<strong>07</strong>
										<span>Sep 2022</span>
									</div>
									<div class="city_event2_text">
										
										<h4><a href="#"><?php echo $events['head'] ;?></a></h4>
										<ul>
											
											<li><a href="#"><i class="fa fa-clock-o"></i><?php echo $events['date_uploaded'] ;?></a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i><?php echo $events['address'] ;?></a></li>
										</ul>
									</div>
									<a class="theam_btn btn2 bg-color" href="event-detail.php">read more</a>
								</div>
							</div>
							
						</div>
						
						
						<?php
							}
							}
							?>
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
								//              $pagLink .= "<li><a href='bodolandSEED.php?page=".$i."'>".$i."</a></li>";  
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
						
				<!-- CITY EVENT2 WRAP ENDS-->
						
						
						
						
						
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
    </body>


</html>