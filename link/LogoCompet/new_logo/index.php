<?php include("include/head.php"); ?>
  <body>
    <div class="container-scroller">

      <!--navbar -->
      <?php include("include/navbar.php"); ?>
      <!-- navbar ends -->
      <div class="container-fluid page-body-wrapper">
        <!-- sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!-- sidebar ends -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <?php 
            
            $countAdmins = $crud->Count("logo_admin","1");
            $countParticipants = $crud->Count("participants","1");
            $countUnrated = $crud-> Count("participants","$userType is NULL");
            $countRated = $crud-> Count("participants","$userType is NOT NULL");
          
        

            ?>
            <?php 
            if ($_SESSION['userType'] == 'admin1') {
            ?>
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Admins <i class="mdi mdi-account-multiple  mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> <?php  echo  $countAdmins ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">No of Participants <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php  echo $countParticipants ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Submitted <i class="mdi mdi-file-check  mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php  echo $countParticipants ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total cancelled  <i class=" mdi mdi-close-circle mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">0</h2>
                    
                  </div>
                </div>
              </div>
            </div>
            <?php }?>

              <?php 
            if ($_SESSION['userType'] != 'admin1') {
            ?>
                <!-- overall count -->
            <div class="row">
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total Admins 
                      <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"> <?php  echo  $countAdmins ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">No of Participants <i class="mdi mdi-account-multiple mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php  echo $countParticipants ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total rated <i class="mdi mdi-check-all mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php  echo $countRated ?></h2>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-3 stretch-card grid-margin">
                <div class="card bg-gradient-primary card-img-holder text-white">
                  <div class="card-body">
                    <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total not rated  <i class="mdi mdi-window-close  mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5"><?php  echo $countUnrated ?></h2>
                    
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            <!-- over count ends -->
            <?php 
            if ($_SESSION['userType'] == 'admin1') {
            ?>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                      <div class="data_table">
                            <table id="example" class="table table-striped table-bordered">
                                <thead class="gradient">
                                 
                                     <tr>
                                    <tr>
                                        <th>sl no</th>
                                        <th>name</th>
                                        <th>phone</th>
                                        <th>email</th>
                                        <th>image</th>
                                        <th>residence</th>
                                        <th>date_uploaded</th>
                                        <th>Admin2</th>
                                        <th>Admin3</th>
                                    </tr>
                                 
                                </thead>
                              <tfoot class="gradient">
                                   <th>sl no</th>
                                   <th>name</th>
                                   <th>phone</th>
                                   <th>email</th>
                                   <th>image</th>
                                   <th>residence</th>
                                   <th>date_uploaded</th>
                                   <th>Admin2</th>
                                   <th>Admin3</th>
                              </tfoot>
                                  <tbody>
                                     <?php 
                                        if ($readuser) {
                                          $n=0;
                                          foreach ($readuser6 as $aboutKey) { ?>
                                     <tr>
                                        <td><?php echo ++$n; ?></td>
                                        
                                        <td><?php echo $aboutKey['name'] ;?></td>
                                        <td><?php echo $aboutKey['phone'] ;?></td>
                                        <td><?php echo $aboutKey['email'] ;?></td>
                                        <td><img class="img-rounded zoom" width="100%" height="400px" src="../<?php echo $aboutKey['image'];?>"></td>
                                        <td><?php echo $aboutKey['residence'] ;?></td>
                                        <td><?php echo $aboutKey['date_uploaded'] ;?></td>
                                     
                                        <td><?php echo $aboutKey['admin2'] ;?></td>
                                        <td><?php echo $aboutKey['admin3'] ;?></td>
                                     </tr>
                                     <?php }}?>
                                  </tbody>
                          </table>
                      </div>

                   
                </div>
              </div>
              <?php }?>
          </div>
          <!-- content-wrapper ends -->
          <!-- footer -->
          <?php include("include/footer.php"); ?>
          <!-- footer ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <style>
      .zoom {      
-webkit-transition: all 0.35s ease-in-out;    
-moz-transition: all 0.35s ease-in-out;    
transition: all 0.35s ease-in-out;     
cursor: -webkit-zoom-in;      
cursor: -moz-zoom-in;      
cursor: zoom-in;  
}     

.zoom:hover,  
.zoom:active,   
.zoom:focus {
/**adjust scale to desired size, 
add browser prefixes**/
-ms-transform: scale(2.5);    
-moz-transform: scale(2.5);  
-webkit-transform: scale(2.5);  
-o-transform: scale(2.5);  
transform: scale(2.5);    
position:relative;      
z-index:100;  
}
    </style>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->

    <!-- datatable -->
  
    <script src="datatable/js/datatables.min.js"></script>
    <script src="datatable/js/pdfmake.min.js"></script>
    <script src="datatable/js/vfs_fonts.js"></script>
    <script src="datatable/js/custom.js"></script>
  </body>


</html>