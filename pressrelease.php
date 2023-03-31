<?php 
include("classes/Crud.php");
$crud = new Crud();

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
        <link href="css/selectric.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/demo.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="css/fig-hover.css" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="css/typography.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="css/sidebar-widget.css" rel="stylesheet">
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

if (isset($_GET['id'])) {
$id=$_GET['id'];
 $readAbouts = $crud->Read("press","`id`='$id'");
}
?>
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>News details</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
						  <li class="breadcrumb-item"><a href="event.php">news post</a></li>
						  <li class="breadcrumb-item active">news details</li>
						</ul>
					
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			<?php 
                            if($readAbouts){
                              $head=$readAbouts[0]['head'];
                              $title=$readAbouts[0]['title'];
                              $address=$readAbouts[0]['address'];
                              $description=$readAbouts[0]['description'];
                              $date=$readAbouts[0]['date_uploaded'];
                              $image=$readAbouts[0]['image'];

                             ?>
			
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_event2_wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="sidebar_widget widget2">
								<!-- EVENT DETAIL START-->
								<div class="event_detail">
									<h4 class="sidebar_heading">Venue Detail</h4>
									<div class="venue_list">
										<ul>
											<li>
												<h6>Date</h6>
												<p><?php echo $date;?></p>
											</li>
											
											<li>
												<h6>Location:</h6>
												<p><?php echo $address;?></p>
											</li>
										</ul>
									</div>
									
								</div>
								<!-- EVENT DETAIL END-->
								
								
								
							</div>
						</div>
						<div class="col-md-9">
							<div class="city_event_detail">
								<div class="event_detail_text">
									<figure>
										<img src="seed-admin/admin/<?php echo $image;?>" alt="">
									</figure>
									<h3 class="event_heading"><?php echo $head;?></h3>
									
									<p align="justify"><?php echo $description;?></p>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CITY EVENT2 WRAP END-->
		<?php }?>
			<?php include("include/footer.php"); ?>
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
		<!--Pretty Photo JavaScript-->
        <script src="js/jquery.nice-select.min.js"></script>
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
        
		<!--Map-->
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <!--Custom JavaScript-->
    	<script src="js/custom.js"></script>
		<script>document.documentElement.className = 'js';</script>
    </body>


</html>