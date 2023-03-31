<?php 
include("../seed-admin/admin/classes/Crud.php");
$crud = new Crud();
$readuser7 = $crud->Read("bodolandmission","1 ORDER BY `id` DESC LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SEED|BTR</title>
        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="../css/slick-theme.css" rel="stylesheet"/>
        <!-- ICONS CSS -->
        <link href="../css/font-awesome.css" rel="stylesheet">
		<!-- ICONS CSS -->
        <link href="../css/animation.css" rel="stylesheet">
        <!-- Pretty Photo CSS -->
        <link href="../css/prettyPhoto.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="../css/component.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="../css/jquery.bxslider.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="../css/style5.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="../css/demo.css" rel="stylesheet">
		<!-- Pretty Photo CSS -->
        <link href="../css/fig-hover.css" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="../css/typography.css" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link href="../style.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="../css/component.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="../css/shotcode.css" rel="stylesheet">
		<!-- Custom Main StyleSheet CSS -->
        <link href="../svg-icon.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="../css/color.css" rel="stylesheet">
        <link href="../custom_css/custom.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="../css/responsive.css" rel="stylesheet">
        <link href="../css/newstyle.css" rel="stylesheet">
       
        <link rel="../stylesheet" href="slider/css/slider1.css"/>
        <link href="../css/sidebar-widget.css" rel="stylesheet">
        
       

    </head>
    <style type="text/css">

    </style>
    <!-- CITY EVENT2 WRAP START-->
		<div class="city_blog2_wrap">
			<div class="container">
				<div class="row">
					<?php 
	                                     if ($readuser7) {
	                                     $n=0;
	                                     foreach ($readuser7 as $bodoland)
	                                      {
	                                    ?>
					<div class="col-md-4 col-sm-6">
						<div class="city_blog2_fig">
							
							<div class="city_blog2_list">
								<ul class="city_meta_list">
								<li class="date"><a href="../bodoSeedDetails.php?id=<?php echo $bodoland['id'] ;?>"><i class="fa fa-calendar"></i><?php echo $bodoland['date_uploaded'] ;?></a></li>
								<figure >
									<a href="../bodoSeedDetails.php?id=<?php echo $bodoland['id'] ;?>" target="_blank"><img src="../seed-admin/admin/<?php echo $bodoland['image'] ;?>" class="overlay" alt=""></a>
									
									
								</figure>
								</ul>
								
							</div>
						</div>
					</div>
					<?php }}?>
					
				</div>
			</div>
		</div>

			<!-- CITY EVENT2 WRAP END-->
			
			
        <!--Jquery Library-->
        <script src="../js/jquery.js"></script>
    	<!--Bootstrap core JavaScript-->
        <script src="../js/bootstrap.js"></script>
        <!--Slick Slider JavaScript-->
        <script src="../js/slick.min.js"></script>
        <!--Pretty Photo JavaScript-->
        <script src="../js/jquery.prettyPhoto.js"></script>
		<!--Pretty Photo JavaScript-->	
        <script src="../js/jquery.bxslider.min.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="../js/index.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="../js/modernizr.custom.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="../js/jquery.dlmenu.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="../js/downCount.js"></script>
		<!--Counter up JavaScript-->
        <script src="../js/waypoints.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="../js/waypoints-sticky.js"></script>
        
        <!--Custom JavaScript-->
    	<script src="../js/custom.js"></script>
		<script>document.documentElement.className = 'js';</script>
    </body>

</html>