<?php include("include/head.php"); ?>
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
                   <p class="font-weight-bold"><b> ADMIN REGISTRATION </b></p>
                   <p >(PLEASE FILL DETAILS)</p>
                </address>
                
                <form class="pt-3" method="POST" class="register-form" action="form/adminRegister.php" id="register-form">
                  <div class="form-group">
                    
                    <input name="uname" type="text" class="form-control form-control-lg " onchange = "validateUsername(this.value);" id="username"  placeholder="name" required="">
                    <i id = "username-message"></i>
                  </div>
                  <div class="form-group">
                    <input name="email" type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" required="">
                  </div>
                  
                  <div class="form-group">
                    <input name="pwd" id="password" onkeyup = "checkPassword();"  class="form-control form-control-lg"  placeholder="Password" required="">
                  </div>
                  <div class="form-group">
                    <input  id="confirm_password" autocomplete = "off" onkeyup = "checkPassword();" name="confirm_password" type="rpassword" class="form-control form-control-lg"  placeholder="ConfirmPassword" required="">
                    <i id = "passwordError"></i>
                  </div>
                  
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="register" id="register" >REGISTER</button>
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
    
   
   <script type="text/javascript">
   function validateUsername(val) {

        if (val != "") {

            $('#username-message').css("color", 'black');

            $('#username-message').html("loading...");

            $.ajax ({

                url: 'form/aunthenticateUser.php',

                data: {

                    check: val

                },

                dataType: 'text',

                method: 'get',

                success: function (response) {

                    if (response == "Not available") {

                        $('#register').attr("disabled", true);

                        $('#username-message').css("color", 'red');

                        $('#username-message').html("Sorry! username not already exists");

                    } else {

                        $('#register').attr("disabled", false);

                        $('#username-message').css("color", 'green');

                        $('#username-message').html("Username available");

                    }

                }

            });

        } else {

            $('#username-message').css("color", 'red');

            $('#username-message').html("Please enter a username");

        }

    }
    function checkPassword () {

            let Password = $('#password').val();

            let confirmPassword = $('#confirm_password').val();

            if (Password == confirmPassword) {
                $('#register').attr("disabled", false);
                $('#passwordError').css("color", 'green');
                $('#passwordError').html("Password matches");
                

            } else {
              $('#register').attr("disabled", true);
              $('#passwordError').css("color", 'red');
              $('#passwordError').html("**Password doesnot matches!");
              

            }

        }
       

</script>
  </body>

</html>