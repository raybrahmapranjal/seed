<?php include("include/head.php"); ?>
<?php

        if (isset($_POST['confirm_password'])) {

            $password = $_POST['confirm_password'];

            $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

            $hash = hash('sha512', $password . $salt);

            $userName = $_SESSION['this_user_username'];

            $checkPassword = $crud->Count("logo_admin","`username`='$userName' AND `password`='$password'");
            if ($checkPassword<1) {
                echo "Username & Password Did not match";
            } else {
                // code here
            }

            $data = [

                'password' => $hash

            ];

            $update = $crud -> Update('logo_admin', $data, " `username` = '$userName'");

            if ($update == "Data Updated") {

                $message = '<div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>Success!</strong> Password changed
            </div>';

            } else {

                $message = '<div class="alert alert-danger background-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>Opps!</strong> Something went wrong, Please try again later
            </div>';

            }

        } else {

            $message = "";

        }
    ?>
    <div class="container-scroller">
      <!--navbar -->
      <?php include("include/navbar.php"); ?>
      <!-- navbar ends -->
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <!-- sidebar -->
        <?php include("include/sidebar.php"); ?>
        <!-- sidebar ends -->
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <address class="text-primary">
                   <p class="font-weight-bold"><b> ADMIN CHANGE PASSWORD </b></p>
                   <p >(PLEASE FILL DETAILS)</p>
                   <?php echo $message; ?>
                </address>
                
                <form class="pt-3" method="POST" class="register-form"  id="register-form">
                  
                  
                  <div class="form-group">
                    <input  id="new_password" onkeyup = "checkPassword();" name="new_password"type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="New Password">
                  </div>
                  <div class="form-group">
                    <input  id="confirm_password" autocomplete = "off" onkeyup = "checkPassword();" name="confirm_password" class="form-control form-control-lg"  placeholder="Confirm New Password">
                    <div id="confirmPasswordError">
                  </div>
                  
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" id = "changePass" name = "submit"   >CHANGE</button>
                  </div>
                  
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
    <!-- <script language='javascript' type='text/javascript'>
      function check(input) {
      if (input.value != document.getElementById('password').value) {
      input.setCustomValidity('Password Must be Matching.');
      } else {
      // input is valid -- reset the error message
      input.setCustomValidity('');
      }
      }
   </script> -->
    <script type = "text/javascript">


        function checkPassword () {

            let newPassword = $('#new_password').val();

            let confirmPassword = $('#confirm_password').val();

            if (newPassword == confirmPassword) {

                // $('#changePass').prop('disabled', false);
                $('#confirmPasswordError').css("color", 'green');
                $('#confirmPasswordError').html(" password matched ");
                $('#changePass').attr("disabled", false);

            } else {

                // $('#changePass').prop('disabled', true);
                $('#confirmPasswordError').css("color", 'red');
                $('#confirmPasswordError').html("** password & confirm doesn't matched ! ");
                $('#changePass').attr("disabled", true);

            }

        }

    </script>
  </body>

</html>