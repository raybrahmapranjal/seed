<?php include("include/header.php"); ?>

<body>

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

	<div class="page-wraper">
     
        <!-- HEADER START -->
        <?php include("include/navbar.php"); ?>
        <!-- HEADER END -->
      
        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">Contact Us</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->                            
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        
                        <!-- BREADCRUMB ROW END -->                        
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->
           
            <!-- CONTACT FORM -->
            <div class="section-full twm-contact-one">   
                <div class="section-content">
                    <div class="container">
                            
                        <!-- CONTACT FORM-->
                        <div class="contact-one-inner">
                            <div class="row">

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-form-outer">

                                        <!-- TITLE START-->
                                        <div class="section-head left wt-small-separator-outer">
                                            <h2 class="wt-title">Send Us a Message</h2>
                                            <p>Feel free to contact us and we will get back to you as soon as we can.</p>
                                        </div>
                                        <!-- TITLE END--> 

                                        <form  class="cons-contact-form" method="post" action="https://thewebmax.org/jobzilla/form-handler2.php">
                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="phone" type="text" class="form-control" required placeholder="Phone">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group mb-3">
                                                        <input name="subject" type="text" class="form-control" required placeholder="Subject">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                    <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Submit Now</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div> 

                                <div class="col-lg-6 col-md-12">
                                    <div class="contact-info-wrap">

                                        <div class="contact-info">
                                            <div class="contact-info-section">  
                                                    
                                                      

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon custome-size"><i class="fas fa-mobile-alt"></i></div>
                                                        <h3 class="twm-title">Feel free to contact us</h3>
                                                        <p><a href="tel:+216-761-8331">+2 900 234 4241</a></p>
                                                        <p><a href="tel:+216-761-8331">+2 900 234 3219</a></p>
                                                    </div>

                                                    <div class="c-info-column">
                                                        <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                                                        <h3 class="twm-title">Support</h3>
                                                        <p>smartBTR@gmail.com</p>
                                                        <p>support12@gmail.com</p>
                                                    </div>
                                            
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="gmap-outline">
                <div class="google-map">
                    <div style="width: 100%">
                        <iframe height="460" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                    </div>
                </div>
            </div>
      

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
      <?php include("include/footer.php"); ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

        <!--Model Popup Section Start-->
            <!--Signup popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup" aria-hidden="true" aria-labelledby="sign_up_popupLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form>

                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel">Sign Up</h2>
                                <p>Sign Up and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <!--Signup Candidate-->  
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#sign-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                    </li>
                                    <!--Signup Employer-->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#sign-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                    </li>
                                    
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                    <!--Signup Candidate Content-->  
                                    <div class="tab-pane fade show active" id="sign-candidate">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree1">
                                                        <label class="form-check-label" for="agree1">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--Signup Employer Content--> 
                                    <div class="tab-pane fade" id="sign-Employer">
                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Email*">
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <input name="phone" type="text" class="form-control" required="" placeholder="Phone*">
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div class="form-group mb-3">
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="agree2">
                                                        <label class="form-check-label" for="agree2">I agree to the <a href="javascript:;">Terms and conditions</a></label>
                                                        <p>Already registered?
                                                            <button class="twm-backto-login" data-bs-target="#sign_up_popup2" data-bs-toggle="modal" data-bs-dismiss="modal">Log in here</button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="site-button">Sign Up</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div> 
                            </div>

                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>

                        </form>
                    </div>
                </div>
                
            </div>
            <!--Login popup -->
            <div class="modal fade twm-sign-up" id="sign_up_popup2" aria-hidden="true" aria-labelledby="sign_up_popupLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                        <form>
                            <div class="modal-header">
                                <h2 class="modal-title" id="sign_up_popupLabel2">Login</h2>
                                <p>Login and get access to all the features of Jobzilla</p>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="twm-tabs-style-2">
                                    <ul class="nav nav-tabs" id="myTab2" role="tablist">

                                        <!--Login Candidate-->  
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login-candidate" type="button"><i class="fas fa-user-tie"></i>Candidate</button>
                                        </li>
                                        <!--Login Employer-->
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#login-Employer" type="button"><i class="fas fa-building"></i>Employer</button>
                                        </li>
                                    
                                    </ul>
                                    
                                    <div class="tab-content" id="myTab2Content">
                                        <!--Login Candidate Content-->  
                                        <div class="tab-pane fade show active" id="login-candidate">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password3">
                                                            <label class="form-check-label rem-forgot" for="Password3">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <!--Login Employer Content--> 
                                        <div class="tab-pane fade" id="login-Employer">
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="username" type="text" required="" class="form-control" placeholder="Usearname*">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <input name="email" type="text" class="form-control" required="" placeholder="Password*">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group mb-3">
                                                        <div class=" form-check">
                                                            <input type="checkbox" class="form-check-input" id="Password4">
                                                            <label class="form-check-label rem-forgot" for="Password4">Remember me <a href="javascript:;">Forgot Password</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <button type="submit" class="site-button">Log in</button>
                                                    <div class="mt-3 mb-3">Don't have an account ? 
                                                        <button class="twm-backto-login" data-bs-target="#sign_up_popup" data-bs-toggle="modal" data-bs-dismiss="modal">Sign Up</button>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                            <div class="modal-footer">
                                <span class="modal-f-title">Login or Sign up with</span>
                                <ul class="twm-modal-social">
                                    <li><a href="javascript.html" class="facebook-clr"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript.html" class="twitter-clr"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript.html" class="linkedin-clr"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript.html" class="google-clr"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--Model Popup Section End-->

 	</div>



<!-- JAVASCRIPT  FILES ========================================= --> 
<?php include("include/footer_javascipt.php"); ?>


</body>

</html>
