
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
                  <input type="text" name="email" id="login_name" placeholder="Enter email">
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

                  <button class="cmn-btn" name="submit" id="submit">log in</button>
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
            <h3 class="title">Participants</h3>

            <div class="account-form-wrapper">
              <form action="form/participants_upload.php" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                  <label>Name <sup>*</sup></label>
                  <input type="username" name="username" id="signup_name" placeholder="Enter your full name">
                </div>
                <div class="form-group">
                  <label>phone <sup>*</sup></label>
                  <input type="phone" name="phone" onchange = "validPhone(this.value);" id="contact" placeholder="phone">
                  <i id = "phone-message"></i>
                </div>
                <div class="form-group">
                  <label>email <sup>*</sup></label>
                  <input type="email" id="email" name="email" onchange = "validateEmail(this.value);" id="signup_email" placeholder="email">
                  <i id = "email-message"></i>
                </div>
                <div class="form-group">
                  <label>SELECT RESIDENCE <sup>*</sup></label>
                  <select class="form-select" name="residence" aria-label="Default select example">
                      <option selected>Residence</option>
                      <option value="Baksa">Baksa</option>
                      <option value="Chirang">Chirang</option>
                      <option value="Kokrajhar">Kokrajhar</option>
                      <option value="Tamulpur">Tamulpur</option>
                      <option value="Udalguri">Udalguri</option>
                  </select>
                </div>
          
                <div class="form-group">
                  <label>upload logo image <sup>*</sup></label>
                  <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                            <input id="upload" type="file" name="aboutImage" accept="image/*"   onchange="readURL(this);" class="form-control border-0">
                            <label id="upload-label"  for="upload" name="aboutImage" accept="image/*"  class="font-weight-light text-muted">Choose file</label>
                            <div class="input-group-append">
                                <label for="upload" name="aboutImage" accept="image/*"   class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                            </div>
                    </div>

                       <!-- Uploaded image area-->
            
                    <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
                </div>

                <div class="divider"> </div>     
                <div class="d-flex flex-wrap mt-2">
                  <div class="custom-checkbox">
                    <input type="checkbox" name="id-2" id="id-2" checked>
                    <label for="id-2">I agree to the</label>
                    <span class="checkbox"></span>
                  </div>
                  <a href="#0" class="link ml-1">Terms, Privacy Policy and Fees</a>
                </div>
                <div class="form-group text-center mt-5">
                  <button  type="submit" name="partcipantSubmit" id="partcipantSubmit" class="cmn-btn">Submit</button>
                </div>
              </form>
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
              <li >
                <a href="index.php">Home</a>
                
                
              </li>
              
            </ul>
            <!-- <div class="nav-right">
              <a href="contest.html" class="cmn-btn style--three btn--sm"><img src="assets/images/icon/btn/tag.png" alt="icon" class="mr-2"> Buy Tickets</a>
            </div> -->
          </div>
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>
  <!-- header-section end  -->

    <!-- hero start -->
    <section class="hero">
     <!--  <div class="hero__shape"><img src="assets/images/elements/hero-shape.jpg.png" alt="image"></div>
      <div class="hero__element"><img src="assets/images/elements/hero-building.png" alt="image"></div> -->
      <div class="hero__car wow bounceIn" data-wow-duration="0.5s" data-wow-delay="1s">
        <!-- <img src="assets/images/elements/car-shadow.png" alt="image" class="car-shadow"> -->
        <!-- <img src="assets/images/elements/car-ray.png" alt="image" class="car-ray"> -->
        <img src="assets/images/elements/car-light.png" alt="image" class="car-light">
        <img src="assets/images/elements/bg15.png" alt="image" class="hero-car">
        <!-- <img src="assets/images/elements/car-star.png" alt="image" class="car-star"> -->
      </div>
      <div class="container">
        <!-- <img src="assets/images/elements/bg15.png" alt="image" class="hero-car"> -->
        <div class="row justify-content-center justify-content-lg-start">
          <div class="col-lg-6 col-md-8">
            <div class="hero__content">
              <div class="hero__subtitle wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">LOGO COMPETITION 2023</div>
                  <h2 class="hero__title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">big win</h2>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">Now's your chance to win a CASH! Check out the RULES you can win in our cash prize draws. Will you be our next lucky winner?</p>
                  <div class="hero__btn wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <a href="#0" class="cmn-btn" data-toggle="modal" data-target="#signupModal">Participate Now</a>
                  </div>
                
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section>
    <!-- hero start -->

 <!-- overview section start -->
  <section class="latest-winner-section position-relative pt-120 pb-120">
      <div class="el-1"><img src="assets/images/elements/w-el-1.png" alt="image"></div>
      <div class="el-2"><img src="assets/images/elements/w-el-2.png" alt="image"></div>
      <div class="el-3"><img src="assets/images/elements/w-el-3.png" alt="image"></div>
  

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="section-header text-center">
              <span class="section-sub-title">About us</span>
              <h2 class="section-title">Logo Design & Tagline Contest 2023</h2>
              <p>We are inviting the participants of BTR to participate in logo designs and tagline contest. The designs and tagline shall highlight the SEED department. The selected logo will be used by the SEED department.</p>
            </div>
          </div>
        </div><!-- row end -->
      </div><!-- container end -->
     
    </section>
    <!-- overview section end -->
    <!-- lottery section starts -->
    <section class="pb-120 mt-minus-50">
    <div class="bg-shape--top"><img src="assets/images/elements/round-shape-2.png" alt="image"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="subscribe-area">
              <div class="left">
                <span class="subtitle">Participate</span>
                <h3 class="title"> Get a change to win Rs.50,000/- cash</h3>
              </div>
              <div class="right">
                <div class="right"><a href="#0" data-toggle="modal" data-target="#signupModal" class="cmn-btn">play</a></div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>


    <!-- lottery-details end -->
    <!-- support section start  -->
     <section class="position-relative pt-120 pb-120">
      <div class="bg-el"><img src="assets/images/bg/winner.jpg" alt="image"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="section-header text-center">
              <span class="section-sub-title">FACILITATOR</span>
              <h2 class="section-title">SmartBtr</h2>
              
            </div>
          </div>
        </div>
        <div class="row mb-none-30">
          <div class="col-lg-12 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="support-card">
              <div class="support-card__thumb">
                <img src="assets/images/icon/support/logo.png" alt="image">
              </div>
              <div class="support-card__content">
                <h3 class="support-card__title">About us</h3>
                <p>SmartBTR aims to give best technology. Throughout the world the demand of information technology is increasing yet it has been only limited to the cities. SmartBTR begun at a remote place of Assam, a small village named Srirampur at Santal Colony Tribal Belt and Block. SmartBTR is open to all and will empower the small businesses through technology and become the lighthouse in the remote areas.</p>
                
              </div>
            </div><!-- support-card end -->
          </div>
        </div>
      </div>
    </section>



    

    

    <!-- testimonial section start -->
    <section class="has-bg--shape pt-120 pb-120">
     
      <div class="container">
      </div>
        
        <!-- faq section start -->
       <section class="overview-section pt-120">
      
      <div class="obj-1"><img src="assets/images/elements/overview-obj-1.png" alt="image"></div>
      <div class="obj-2"><img src="assets/images/elements/overview-obj-2.png" alt="image"></div>
      <div class="obj-3"><img src="assets/images/elements/overview-obj-3.png" alt="image"></div>
      <div class="obj-4"><img src="assets/images/elements/overview-obj-4.png" alt="image"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="faq-top-wrapper pt-120">
              <div class="section-header text-center">
                <span class="section-sub-title">You Have Questions</span>
                <h2 class="section-title">WE HAVE ANSWERS</h2>
                <p>Do not hesitate to send us an email if you can't find what you're looking for.</p>
              </div>
              <ul class="nav nav-tabs cmn-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">RULES AND REGULATIONS</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="banking-tab" data-toggle="tab" href="#banking" role="tab" aria-controls="banking" aria-selected="true">TERMS AND CONDITIONS</a>
                </li>
                
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="result-tab" data-toggle="tab" href="#result" role="tab" aria-controls="result" aria-selected="false">RESULTS ALERTS</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">PRIZE CLAIM</a>
                </li>
              </ul>
            </div><!-- faq-top-wrapper end -->
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="faq-body-wrapper">
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                  <div class="accordion cmn-accordion" id="faqAcc-one">
                    <div class="card">
                      <div class="card-header" id="h-1">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          RULES AND REGULATIONS
                        </button>
                      </div>
                      <div id="collapse1" class="collapse show" aria-labelledby="h-1" data-parent="#faqAcc-one">
                        <div class="card-body">
                          <p><li>
                              Entrants must be at least 18 years old to participate.
                            </li>
                            <li>
                              Each entrant may submit up to three logo designs.
                            </li>
                            <li>
                              All submissions must be original work created by the entrant. Plagiarism or use of any pre-existing logos or copyrighted materials will result in disqualification.
                            </li>
                            <li>
                              Submissions must be in a digital format (such as a JPG or PNG file), and must be at least 300 dpi resolution.
                            </li>
                            <li>
                              The logo should be designed with the SEED's brand in mind, and should be appropriate for the SEED's target audience.
                            </li>
                            <li>
                              The winning logo will become the property of the SEED, and the entrant will transfer all ownership rights to the logo to the SEED upon winning the competition.
                            </li>
                            <li>
                              The judging panel will consist of members of the SEED marketing team, as well as outside design experts. The decision of the judges will be final.
                            </li>
                            <li>
                              The deadline for submissions is January 31st. Submissions received after this date will not be accepted.
                            </li>
                            <li>
                              By entering the competition, entrants agree to the above rules and the decisions of the judges.
                            </li>

                        </div>
                      </div>
                    </div><!-- card end -->
                  </div>
                </div>
                <div class="tab-pane fade show active" id="banking" role="tabpanel" aria-labelledby="banking-tab">
                  <div class="accordion cmn-accordion" id="faqAcc-two">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          TERMS AND CONDITIONS
                        </button>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqAcc-two">
                        <div class="card-body">
                          <p>ELIGIBILITY: The competition is open to all individuals over the age of 18, except for employees of the company hosting the competition.
                            </li>
                            <li>
                              SUBMISSION REQUIREMENTS: Entrants must submit a digital version of their logo design, along with a completed entry form. The design must be original and created by the entrant. It must not infringe on any third-party intellectual property rights.
                            </li>
                            <li>
                              JUDGING CRITERIA: Entries will be judged on creativity, originality, and relevance to the company's brand. The judges' decisions will be final.
                            </li>
                            <li>
                             PRIZES: The winning entrants will receive a cash prizes of Rs. 50,000 for 1st, Rs 30,000 for 2nd and Rs. 10,000 for 3rd. There will be consolation prizes of Rs. 5000 for maintaining morale and creating a positive atmosphere among the participants.
                            </li>
                            <li>
                              RIGHTS: By entering the competition, entrants grant the SEED hosting the competition the right to use their submitted designs for any purpose, including but not limited to marketing and promotional materials. Entrants will retain ownership of their designs, but the SEED will have a perpetual, royalty-free license to use the winning design.
                            </li>
                            <li>
                             LIMITATION AND LIABILITY: The SEED hosting the competition will not be liable for any injuries, losses, or damages of any kind arising from or in connection with the competition.
                            </li>
                            <li>
                              TERMINATION: The SEED reserves the right to cancel or modify the competition at any time, for any reason.
                            </li>
                            <li>
                             GOVERNING LAW: These terms and conditions will be governed by the laws of the state in which the competition is held.
                            </li>
                            <li>
                              DISPUTE RESOLUTION: Any disputes arising out of or in connection with the competition will be resolved through binding arbitration in accordance with the rules of the American Arbitration Association. </p>
                        </div>
                      </div>
                    </div><!-- card end -->
                  </div>
                </div>
                <div class="tab-pane fade" id="winning" role="tabpanel" aria-labelledby="winning-tab">
                  <div class="accordion cmn-accordion" id="faqAcc-three">
                    <div class="card">
                      <div class="card-header" id="h-4">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                          How do I deposit funds into my Rifa Lottos account?
                        </button>
                      </div>
                      <div id="collapse4" class="collapse show" aria-labelledby="h-4" data-parent="#faqAcc-three">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra  maecenas accumsan lacus vel facilisis. </p>
                        </div>
                      </div>
                    </div><!-- card end -->
                   
                    
                  </div>
                </div>
                <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                  <div class="accordion cmn-accordion" id="faqAcc-four">
                    <div class="card">
                      <div class="card-header" id="h-7">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                          RESULTS AND ALERTS
                        </button>
                      </div>
                      <div id="collapse7" class="collapse show" aria-labelledby="h-7" data-parent="#faqAcc-four">
                        <div class="card-body">
                          <p><li>
                 Wait for bracket to generate
              </li>
              <li>
                 You will receive a pop up/notification once your match has scheduled

              </li>
              <li>
                 Click link directing you to the match details page

              </li> </p>
                        
                        </div>
                      </div>
                    </div><!-- card end -->
                  </div>
                </div>
                <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                  <div class="accordion cmn-accordion" id="faqAcc-five">
                    <div class="card">
                      <div class="card-header" id="h-10">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                          PRIZE CLAIM
                        </button>
                      </div>
                      <div id="collapse10" class="collapse show" aria-labelledby="h-10" data-parent="#faqAcc-five">
                        <div class="card-body">
                          <p>Prize claims must be completed within 24 hours of the end of the tournament otherwise there will be the risk penalty of the prize. Claims can take
              up to 72 hours to be processed. Players who reside outside the BTR are not eligible to receive or claim any prizes from SEED Logo Competition. </p>
                        
                        </div>
                      </div>
                    </div><!-- card end -->
                  </div>
                </div>
              </div><!-- tab-content end -->
            </div><!-- faq-body-wrapper end -->
          </div>
        </div>
      </div>
    </section>
    <!-- faq section end -->
        </div>
      </div>
    </section>
    <!-- testimonial section end -->

    <!-- support section start  -->
    <section class="pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="section-header text-center">
              <span class="section-sub-title">Get in touch with our friendly support</span>
              <h2 class="section-title">Customer Support</h2>
              <p>Have a question or need help? Contact our friendly support team.</p>
            </div>
          </div>
        </div>
        <div class="row mb-none-30">
          <div class="col-lg-12 mb-30 wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
            <div class="support-card">
              <div class="support-card__thumb">
                <img src="assets/images/icon/support/1.png" alt="image">
              </div>
              <div class="support-card__content">
                <h3 class="support-card__title">Talk to our support team</h3>
                <p>Got a question about Lotteries? Get in touch with our friendly staff.</p>
                <div class="btn-grp justify-content-xl-start mt-3">
                  <a href="tel:6564545" class="btn-border btn-sm text-capitalize">Call us <i class="fas fa-phone-alt"></i></a>
                  <a href="http://pixner.net/cdn-cgi/l/email-protection#402428242a00272d21292c6e232f2d" class="cmn-btn btn-sm text-capitalize">Email us <i class="far fa-envelope"></i></a>
                </div>
              </div>
            </div><!-- support-card end -->
          </div>
          
        </div>
      </div>
    </section>
    <!-- support section end  -->

      <?php include("include/footer.php");?>
  </div>
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
 
  <!-- contact js -->
  <script src="assets/js/contact.js"></script>
  <!-- custom js -->
  <script src="assets/js/app.js"></script>
  <!-- SignIn Area End -->
  
  <script type="text/javascript">
    
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}

  </script>
    <script type="text/javascript">
   function validPhone(val) {

        if (val != "") {

            $('#phone-message').css("color", 'black');

            $('#phone-message').html("loading...");

            $.ajax ({

                url: 'form/validPhone.php',

                data: {

                    check: val

                },

                dataType: 'text',

                method: 'get',

                success: function (response) {

                    if (response == "invalid") {
                      $('#partcipantSubmit').attr("disabled", true);

                      $('#phone-message').css("color", 'red');

                      $('#phone-message').html("Invalid Phone Number.");

                    } else if (response == "Not available") {

                        $('#partcipantSubmit').attr("disabled", true);

                        $('#phone-message').css("color", 'red');

                        $('#phone-message').html("Sorry! this phone already exists");

                    } else {

                        $('#partcipantSubmit').attr("disabled", false);

                        $('#phone-message').css("color", 'green');

                        $('#phone-message').html("phone  available");

                    } 

                }

            });

        } else {

            $('#phone-message').css("color", 'red');

            $('#phone-message').html("Please enter a phone");

        }

    }
  
   function validateEmail(val) {

        if (val != "") {

            $('#email-message').css("color", 'black');

            $('#email-message').html("loading...");

            $.ajax ({

                url: 'form/validEmail.php',

                data: {

                    check: val

                },

                dataType: 'text',

                method: 'get',

                success: function (response) {

                    if (response == "Not available") {

                        $('#partcipantSubmit').attr("disabled", true);

                        $('#email-message').css("color", 'red');

                        $('#email-message').html("Sorry! email already exists");

                    } else {

                        $('#partcipantSubmit').attr("disabled", false);

                        $('#email-message').css("color", 'green');

                        $('#email-message').html("email  available");

                    }

                }

            });

        } else {

            $('#email-message').css("color", 'red');

            $('#email-message').html("Please enter a email");
            

        }

    }
  </script>
  

  </body>

</html>