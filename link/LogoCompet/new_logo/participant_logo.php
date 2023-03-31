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
                <span class="page-title-icon bg-gradient-danger text-white mr-2">
                  <i class="mdi mdi-account"></i>
                </span> Participants
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
            <?php 
            $readuser = $crud-> Read("participants","$userType is NULL limit 1");
           
              if ($readuser) {
               
                    ?>
                  <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="row mt-3">
                            <div class="col-12 pr-1">
                              <img src="../<?php echo $readuser[0]['image'];?>" class="mb-2 mw-100 w-100 rounded" alt="image"  height="300">
                            </div>
                          </div>
                          <div class="d-flex mt-5 align-items-top">
                            <div class="mb-0 flex-grow">
                              <h5 class="mr-2 mb-2">Description</h5>
                              <p class="mb-0 font-weight-light">It is a long established fact that a reader will be distracted by the readable content of a page.</p><br>
                              <button type="button" class="btn btn-outline-primary btn-icon-text rateBtn" data-id="<?php echo $readuser[0]['id'];?>" data-toggle="modal" data-target="#exampleModal">Rate </button> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php 
                  } else { 
                     
                      ?>
                      <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                          <div class="card">
                            <div class="card-body">
                              
                              <h2>YOU HAVE RATED ALL, THANK YOU!<img src="images/tick.gif"></h2>
                            </div>
                          </div>
                        </div>
                      </div>
                <?php 
                    }
                  
            ?>
            
          <!-- content-wrapper ends -->
          <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                            <div class="page-header">
                              <h3 class="page-title">
                                <span class="page-title-icon bg-gradient-info text-white mr-2">
                                  <i class="mdi mdi-star"></i>
                                </span> Dashboard
                              </h3>
                            </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="form/rating.php" method="post"enctype="multipart/form-data">
                                  <address class="text-primary">
                                   <p class="font-weight-bold"> rate out of 10: </p>
                                  </address>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                       <input type="hidden"  id="aboutID" name="aboutID" value="" class="mdl-textfield__input" >
                                    </div>
                              <div class="container-fluid">
                               <div class="row">
                                  <div class="col-md-6 col-sm-6 col-xs-4 col-lg-6" style="background-color:lavender;"><div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="1" name="r1" required=""> 1 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="2" name="r1" required=""> 2 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="3" name="r1" required=""> 3 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="4" name="r1" required=""> 4 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="5" name="r1" required=""> 5 </label>
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-4 col-lg-6" style="background-color:lavenderblush;"><div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="6" name="r1" required=""> 6 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="7" name="r1" required=""> 7</label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="8" name="r1" required="">8 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="9" name="r1" required=""> 9 </label>
                                    </div>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="radio" class="form-check-input" id="r1" value="10" name="r1" required=""> 10 </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                                  
                      </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-dark btn-fw "   data-dismiss="modal">close</button>
                                    <button type="submit" class="btn btn-outline-success btn-fw" name="submit">Submit</button>
                        </form>
                                  </div>
                    </div>
                  </div>
                </div>
                <!-- model ends -->

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

    <script type="text/javascript">
      $(document).on("click touch", ".rateBtn", function () {
          var dataId = $(this).data('id');
          $('#aboutID').val(dataId);
             
         });
      
   </script>
  </body>


</html>