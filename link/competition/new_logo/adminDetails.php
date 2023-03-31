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
                <span class="page-title-icon bg-gradient-success text-white mr-2">
                  <i class="mdi mdi-account"></i>
                </span> Admins Detail
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="test">

            </div>
            <div class="row">
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                        <table class="table table-hover">
                      
                           <thead>
                              <tr>
                              <tr>
                                 <th>Sl no.</th>
                                 <th>name</th>
                                 <th>email</th>
                                 <th>USERTYPE</th>
                                 <th>join date</th>
                              </tr>
                              </tr>
                           </thead>
                           <tfoot>
                              <th>Sl no.</th>
                              <th>name</th>
                              <th>email</th>
                              <th>USERTYPE</th>
                              <th>join date</th>
                           </tfoot>
                           <tbody>
                              <?php 
                                 if ($readuser) {
                                   $n=0;
                                   foreach ($readuser7 as $aboutKey) { ?>
                              <tr>
                                 <td><?php echo ++$n; ?></td>
                                 <td><?php echo $aboutKey['username'] ;?></td>
                                 <td><?php echo $aboutKey['email'] ;?></td>
                                 <td><?php echo $aboutKey['user_type'] ;?></td>
                                 <td><?php echo $aboutKey['join date'] ;?></td>
                              </tr>
                              <?php }}?>
                           </tbody>
                        </table>
                  </div>
                </div>
              </div>
             
              
              
              
            </div>
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
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>

</html>