<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php 
include("classes/Crud.php");
$crud = new Crud();

$readuser13 = $crud->Read("press","1");
$readuser16 = $crud->Read("recentposts","1");

?>
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
        <link href="css/sidebar-widget.css" rel="stylesheet">
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
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
        	<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>News Post</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">News Post</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
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
				$limit = 2;
				$offset = ($page-1) * $limit; 


				$sql = "SELECT * FROM press ORDER BY id ASC  limit $offset, $limit";  

				$rs_result = mysqli_query ($conn,$sql); 
				$row=mysqli_num_rows($rs_result); 

				?>
			
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_blog2_wrap">
				<div class="container">
					<div class="row">
						
						<div class="col-md-8">
							<?php 
								if ($readuser13) {
                                 $n=0;
                                 foreach ($readuser13 as $press)
                                  {
                                while ($press = mysqli_fetch_assoc($rs_result))
                                {
							?>
							<div class="city_news2_post post2">
								<figure class="box">
									<div class="box-layer layer-1"></div>
									<div class="box-layer layer-2"></div>
									<div class="box-layer layer-3"></div>
									<img src=" seed-admin/admin/<?php echo $press['image'] ;?>" style="height: 286px;width: 268px;"alt="268 x 286">
								</figure>
								<div class="city_news2_detail">
									<ul class="city_meta_list">
										<li><a href="#"><i class="fa fa-calendar"></i><?php echo $press['date_uploaded'] ;?></a></li>
									
									</ul>
									<h4 class="show-read-more"><a href="pressrelease.php?id=<?php echo $press['id'] ;?>"><?php echo $press['head'] ;?></a></h4>
									<p class="show-read-more blogpara"><a href="pressrelease.php?id=<?php echo $press['id'] ;?>"><?php echo $press['title'] ;?></a></p>
									<a class="theam_btn bg-color color" href="pressrelease.php?id=<?php echo $press['id'] ;?>" tabindex="0">Read More</a>
								</div>
								
							</div>
							<?php }}}?>	
							
									<?php  
										$sql1 = "SELECT * FROM press";  
										$rs_result1 = mysqli_query($conn,$sql1) or die("query failed");  
										if( mysqli_num_rows($rs_result1)>0);{
										// echo $row;  
										$total_records = mysqli_num_rows($rs_result1);
										  
										$total_pages = ceil($total_records / $limit);  
										// $pagLink = "<ul class='pagination'>"; 
										} 
										// for ($i=1; $i<=$total_pages; $i++) {  
										//              $pagLink .= "<li><a href='pressSEED.php?page=".$i."'>".$i."</a></li>";  
										// }
										// } 
										// echo $pagLink . "</ul>";  
									?>
									<div class="col-md-12">
										<div class="pagination" id="myDIV" >

											<ul >
											  <?php for ($i=1; $i<=$total_pages; $i++) {?>
											  <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="press.php?page=<?=$i?>"><?=$i?></a></li>
											  <?php }?>
											</ul>
										</div>
									</div>
						</div>
						<div class="col-md-4">
							<div class="sidebar_widget">
								
								
								 
								<div class="event_sidebar">
									<h4 class="sidebar_heading">Recent Post</h4>
									<?php 
                                    if ($readuser16) {
                                    $n=0;
                                    foreach ($readuser16 as $posts) { ?>
									<div class="event_categories">
										<ul>
											<li>
												<div class="event_categories_list">
													<figure >
														<div class="box-layer layer-1"></div>
														<div class="box-layer layer-2"></div>
														<div class="box-layer layer-3"></div>
														<a href="recentposts.php?id=<?php echo $posts['id'] ;?>"><img src="seed-admin/admin/<?php echo $posts['image'];?>" style="width:80px;height:80px;" alt="80 x 80"></a>
													</figure>
													<div class="event_categories_text">
														<h4 class="show-read-more blogpara"><a href="recentposts.php?id=<?php echo $posts['id'] ;?>"><?php echo $posts['head'];?></a></h4>
														<ul class="blog_author_date">
													
															<li><a href="recentposts.php?id=<?php echo $posts['id'] ;?>"><?php echo $posts['date_uploaded'];?></a>
															</li>
														</ul>
													</div>
												</div>
											</li>
										
										</ul>
									</div>
									<?php }}?>
								</div>
							
								<!-- EVENT SIDEBAR END-->
								
								
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
        <script src="js/jquery.prettyPhoto.js"></script>
		<!--Pretty Photo JavaScript-->	
        <script src="js/jquery.bxslider.min.js"></script>
		<!--Pretty Photo JavaScript-->
        <script src="js/index.js"></script>
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