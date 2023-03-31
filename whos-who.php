
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


				$sql = "SELECT * FROM who ORDER BY id ASC  limit $offset, $limit";  

				$rs_result = mysqli_query ($conn,$sql); 
				$row=mysqli_num_rows($rs_result); 

				?>
	<?php include("include/header.php");	?>
	
         
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
					
						<h2>Who's who</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">Who's who</li>
						</ul>
						
					</div>
				</div>
			</div>

			<!-- SAB BANNER END-->
			<!-- CITY EVENT2 WRAP START-->
			<div class="city_blog2_wrap team">
				<div class="container">
					<div class="row">
						  <?php 
                                if ($readuser17) 
                                {
                                 $n=0;
                                 foreach ($readuser17 as $who)
                                  {
                                while ($who = mysqli_fetch_assoc($rs_result))
                                {
                            ?> 
						<div class="col-md-4 col-sm-6">
							<div class="city_team_fig">
								<figure class="overlay">
									<img src="seed-admin/admin/<?php echo $who['image'];?>" style="height: 286px;width: 350px;" alt="286x350">
									<div class="city_top_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											
											
										</ul>
									</div>
								</figure>
								<div class="city_team_text">
									<h4><a href="personality.php?id=<?php echo $who['id'] ;?>"><?php echo $who['head'];?></a></h4>
									<p><a href="personality.php?id=<?php echo $who['id'] ;?>"><?php echo $who['title'];?></a></p>
									<!-- <p><a href=""><span><i class="fa fa-phone"></i></span>  </a></p> -->
									<div class="wrapper2">
									 	<div class="button">
									       <div class="icon"><a href="personality.php?id=<?php echo $who['id'] ;?>" >
									          <i class="fa fa-phone" ></i>
									       </div>
									       <span><?php echo $who['phone'];?></span></a>
									    </div>
									</div>
									
								</div>
									
							</div>
						</div>
						<?php }}}?>
						<?php  
                                        $sql1 = "SELECT * FROM who";  
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
                                              <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="whos-who.php?page=<?=$i?>"><?=$i?></a></li>
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
    </body>


</html>