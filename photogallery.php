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

  
$sql = "SELECT * FROM photos ORDER BY id DESC  limit $offset, $limit";  

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
                        <h2>Photo Gallery</h2>
                        <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Photo Gallery</li>
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
                            <div class="city_blog2_fig fig2 detail">
                                
                                <div class="blog_detail_row">
                                    <div class="city_blog2_list">
                                        
                                        <div class="section_heading margin-bottom">
                                            <h2>Photo Gallery</h2>
                                        </div>
                                            <p align="justify" >View the pictures given below in the gallery to see the various activities of the SEED Department.
                                            </p>
                                        </div>
                                    </div>
                                 </div>
                             </div>
                            


                                

                                    <div class="container">
                                      
                                        <div class="content">
                                            <div class="col-md-12 col-sm-12">
                                                   <?php 
                                if ($readuser14) {
                                 $n=0;
                                 foreach ($readuser14 as $photos)
                                  {
                                while ($photos = mysqli_fetch_assoc($rs_result))
                                {
                            ?> 
                                            <a class="elem" href="seed-admin/admin/<?php echo $photos['image'] ;?>" title="" data-lcl-txt="<?php echo $photos['description'] ;?>" data-lcl-author="" data-lcl-thumb="seed-admin/admin/<?php echo $photos['image'] ;?>">
                                                <span style="background-image: url(seed-admin/admin/<?php echo $photos['image'] ;?>);"></span>
                                            </a>
                                           
                                       
                                            
                                            <?php }}}?> 
                                            </div>
                                        </div>
                                    
                                    <?php  
                                        $sql1 = "SELECT * FROM photos";  
                                        $rs_result1 = mysqli_query($conn,$sql1) or die("query failed");  
                                        if( mysqli_num_rows($rs_result1)>0);{
                                        // echo $row;  
                                        $total_records = mysqli_num_rows($rs_result1);
                                          
                                        $total_pages = ceil($total_records / $limit);  
                                        // $pagLink = "<ul class='pagination'>"; 
                                        } 
                                        // for ($i=1; $i<=$total_pages; $i++) {  
                                        //              $pagLink .= "<li><a href='photosSEED.php?page=".$i."'>".$i."</a></li>";  
                                        // }
                                        // } 
                                        // echo $pagLink . "</ul>";  
                                    ?>
                                   
                                    </div>
                                     
                                      <div class="col-md-12">
                                        <div class="pagination" id="myDIV" >

                                            <ul >
                                              <?php for ($i=1; $i<=$total_pages; $i++) {?>
                                              <li class="btn <?=($i==$page)?$active="active":"";?>"><a href="photogallery.php?page=<?=$i?>"><?=$i?></a></li>
                                              <?php }?>
                                            </ul>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>



<!-- //////////////////////////////////////////////// -->
<!-- LIGHTBOX INITIALIZATION -->
<script type="text/javascript">
$(document).ready(function(e) {
   
    // live handler
    lc_lightbox('.elem', {
        wrap_class: 'lcl_fade_oc',
        gallery : true, 
        thumb_attr: 'data-lcl-thumb', 
        
        skin: 'minimal',
        radius: 0,
        padding : 0,
        border_w: 0,
    }); 

});
</script>
<style type="text/css">
    @media (min-width: 500px)
    {
        .elem {
  
  display: inline-block;
font-size: 0;
width: 30%;
border: 20px solid transparent;
  border-bottom-color: transparent;
  border-bottom-style: solid;
  border-bottom-width: 20px;
border-bottom: none;
padding: 10px;
height: auto;
background-clip: padding-box;
}
    }
</style>
<!-- //////////////////////////////////////////////// -->
<!-- //////////////////////////////////////////////// -->
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
