
<?php include("include/header.php");	?>
      
    
   
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>reports/documents</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">reports/documents</li>
						</ul>
                       
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			<!-- CITY EVENT2 WRAP START-->
			        <div class="city_department_wrap overlay">
				        <div class="bg_white">
					        <div class="container-fluid">
							
                                    <h4 class="widget-title">documents</h4>
                                <table id="example" class="display nowrap table-striped" style="width:100%" >
                                    <thead>
                                        <tr>
                                            <th>sl no.</th>
                                            
                                            <th>details</th>
                                            <th>View Pdf</th>
                                            <th>Download Pdf</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>sl no.</th>
                                          
                                            <th>details</th>
                                            <th>View Pdf</th>
                                            <th>Download Pdf</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <tr>
                                            <?php 
                                     if ($read) {
                                     $n=0;
                                     foreach ($read as $news) {
                                     ?>
                                            <td><?php echo ++$n; ?></td> 
                                            <td><?php echo $news['news'] ;?></td> 
                                            <td><a href="seed-admin/admin/<?php echo $news['pdf'] ;?>"><i class="fa fa-file-pdf-o" style="color:red"> view</i></a></td>
                                            <td><a href="seed-admin/admin/<?php echo $news['pdf'] ;?>" download><i class="fa fa-download"> pdf</i></a></td>
                                        </tr>
                                       
                                        <?php }}?>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                                   
									
				
			<!-- CITY EVENT2 WRAP END-->
			
			
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



  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
 
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        scrollX: true,
        
        scrollY: '200px',
        scrollCollapse: true,
        paging: true,
       
    } );
} );
         
    </script>
    </body>


</html>