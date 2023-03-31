<?php include("include/header.php");	?>
      
    
   
    <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
			<?php include("include/navbar.php"); ?>
			
			<!-- SAB BANNER START-->
			<div class="sab_banner overlay">
				<div class="container">
					<div class="sab_banner_text">
						<h2>Telephone Directory</h2>
						<ul class="breadcrumb">
						  <li class="breadcrumb-item"><a href="#">Home</a></li>
						  <li class="breadcrumb-item active">TELEPHONE DIRECTORY</li>
						</ul>
                        
					</div>
				</div>
			</div>
			<!-- SAB BANNER END-->
			
			<!-- CITY EVENT2 WRAP START-->
			        <div class="city_department_wrap overlay">
				        <div class="bg_white">
					        <div class="container-fluid">
							
                                    <h4 class="widget-title">TELEPHONE DIRECTORY</h4>
                                <table id="example" class="display nowrap" style="width:100%">
                                     
                                    <thead>
                                        <tr>
                                            <th>sl no.</th>
                                            <th>IMAGE</th>
                                            <th>NAME</th>
                                            <th>PHONE</th>
                                            <th>SHORT DESCRIPTION</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if ($readuser3) {
                                            $n=0;
                                            foreach ($readuser3 as $aboutKey) { ?>
                                        <tr>
                                            <td><?php echo ++$n; ?></td>    
                                            <td><img width="100px"src="seed-admin/admin/<?php echo $aboutKey['image'];?>"></td>
                                            <td><?php echo $aboutKey['name'] ;?></td>   
                                            <td><?php echo $aboutKey['phone'] ;?></td>  
                                            <td><?php echo $aboutKey['shortdescription'] ;?></td>   
                                            <td><?php echo $aboutKey['description'] ;?></td>   
                                        </tr>
                                        <?php }
                                        }
                                        ?>    
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>sl no.</th>
                                            <th>IMAGE</th>
                                            <th>NAME</th>
                                            <th>PHONE</th>
                                            <th>SHORT DESCRIPTION</th>
                                            <th>DESCRIPTION</th>
                                        </tr>
                                    </tfoot>
                                       
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
  <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
 
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                scrollX: '200px',
                
                scrollY: '200px',
                scrollCollapse: true,
                paging: true,
               
            } );
        } );
         
    </script>

    </body>


</html>