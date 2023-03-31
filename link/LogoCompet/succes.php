<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logo Competition|SEED</title>
  <!-- site favicon -->
  <link rel="icon" type="image/png" href="assets/images/seed1.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">
  <!-- custom select css -->
  <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
  <!-- animate css  -->
  <link rel="stylesheet" href="assets/css/vendor/animate.min.css">
  <!-- lightcase css -->
  <link rel="stylesheet" href="assets/css/vendor/lightcase.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/css/vendor/slick.css">
  <!-- jquery ui css -->
  <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css">
  <!-- datepicker css -->
  <link rel="stylesheet" href="assets/css/vendor/datepicker.min.css">
  <!-- style main css -->
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/preloader.css">
  <link rel="stylesheet" href="assets/css/uploadImage.css">
</head>
  <body>
    
  <!-- preloader area start -->
  <div class="preloader" id="preloader">
    <div class="loader loader-1">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>
    </div>
  </div>
  <!-- preloader area end -->

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->


 
  <!-- page-wrapper start -->
  <div class="page-wrapper">
      <!-- login modal -->
  <div class="modal fade" id="loginModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <h3 class="title">ADMIN LOGIN </h3>
            <p >(PLEASE FILL YOUR DETAILS)</p>
                              <div class="" style="color:red;">
                                 <?php if (isset($_SESSION['errorLogin'])) {
                                    echo $_SESSION['errorLogin'];
                                    unset($_SESSION['errorLogin']);
                                    
                                    } 
                                    
                                    ?>
                              </div>
            <div class="account-form-wrapper">
              <form id="login-form"  method="POST" action="new_logo/session/session.php">
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="text" name="username" id="login_name" placeholder="Enter username">
                </div>
                <div class="form-group">
                  <label>password <sup>*</sup></label>
                  <input type="password" name="password" id="login_pass" placeholder="password">
                </div>
                <div class="d-flex flex-wrap justify-content-between mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-1" id="id-1" checked>
                    <label for="id-1">Remember Password</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link">Forgot Password?</a>
                </div>

                 
                <div class="form-group text-center mt-5">
                  <button class="cmn-btn" name="submit" id="signin">log in</button>
                </div>
              </form>
              <p class="text-center mt-4">Don’t have an account? <a href="#0" data-toggle="modal" data-target="#signupModal"> Sign Up Now</a></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up modal -->
  <div class="modal fade" id="signupModal" tabindex="1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="account-form-area">
            <button type="button" class="close-btn" data-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
            <h3 class="title">Open Free Account</h3>
            <div class="account-form-wrapper">
              <form>
                <div class="form-group">
                  <label>Email <sup>*</sup></label>
                  <input type="email" name="signup_name" id="signup_name" placeholder="Enter your Email">
                </div>
                <div class="form-group">
                  <label>password <sup>*</sup></label>
                  <input type="password" name="signup_pass" id="signup_pass" placeholder="password">
                </div>
                <div class="form-group">
                  <label>confirm password <sup>*</sup></label>
                  <input type="password" name="signup_re-pass" id="signup_re-pass" placeholder="Confirm Password">
                </div>
                <div class="d-flex flex-wrap mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-2" id="id-2" checked>
                    <label for="id-2">I agree to the</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                </div>
                <div class="form-group text-center mt-5">
                  <button class="cmn-btn">log in</button>
                </div>
              </form>
              <p class="text-center mt-4"> Already have an account? <a href="#0" data-target="#loginModal">Login</a></p>
              <div class="divider">
                <span>or</span>
              </div>
              <ul class="social-link-list">
                <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- header-section start  -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="left d-flex align-items-center">
              <a href="tel:65655655"><i class="las la-phone-volume"></i> Customer Support</a>
              
            </div>
          </div>
          <div class="col-sm-6">
            <div class="right">
              
              <a href="#0" class="user__btn" data-toggle="modal" data-target="#loginModal"><i class="las la-user"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- header__top end -->
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.php"><img src="assets/images/seed1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li class="menu_has_children">
                <a href="index.php">Home</a>
                
              </li>
             
            </ul>
            
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    <!-- inner-hero-section start -->
    <section class="inner-hero-section style--four">
      <div class="bg-shape"><img src="assets/images/elements/inner-hero-shape-2.png" alt="image"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="inner-page-content">
              <h2 class="title">Uploaded <img src="images/tick1.gif" style="height: 10vh;margin-top: -20px;"></h2>
              <a href="index.php" class="cmn-btn d-inline-flex flex-wrap align-items-center active">GO BACK HOME <i class="las la-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- inner-hero-section end -->
   


  </div><!-- page-wrapper end -->
  <!-- page-wrapper end -->
  <!-- jQuery library -->
  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
  <!-- custom select js -->
  <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
  <!-- lightcase js -->
  <script src="assets/js/vendor/lightcase.js"></script>
  <!-- wow js -->
  <script src="assets/js/vendor/wow.min.js"></script>
  <!-- slick slider js -->
  <script src="assets/js/vendor/slick.min.js"></script>
  <!-- countdown js -->
  <script src="assets/js/vendor/jquery.countdown.js"></script>
  <!-- jquery ui js -->
  <script src="assets/js/vendor/jquery-ui.min.js"></script>
  <!-- datepicker js -->
  <script src="assets/js/vendor/datepicker.min.js"></script>
  <script src="assets/js/vendor/datepicker.en.js"></script>
  <!-- preloader -->
  <script src='assets/js/vendor/TweenMax.min.js'></script>
  <script src='assets/js/vendor/MorphSVGPlugin.min.js'></script>
  <script src="assets/js/preloader.js"></script>
  <!-- contact js -->
  <script src="assets/js/contact.js"></script>
  <!-- custom js -->
  <script src="assets/js/app.js"></script>
  </body>

</html>