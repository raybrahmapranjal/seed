<?php include("include/head.php"); ?>
<body>
    <!--Page main section start-->
    <div id="educo_wrapper">
        <!--Header start-->
       <?php include("include/header.php"); ?> <!--header end -->
        <!--Breadcrumb start-->
        <div class="ed_pagetitle">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-6">
                        <div class="page_title">
                            <h2>Course Lesson</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index-2.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="courses.html">educo courses</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course_single.html">Single course</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="course_lesson.html">Course Lesson</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--Single content start-->

        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-12 col-12">
                        <div class="ed_course_single_item">
                            <div class="ed_course_single_image">

                                <div class="ed_video_section">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <div class="ed_video">
                                            <img src="../assets/images/default/content/Single_course_bg.jpg" class="img-responsive" alt="1" />
                                            <div class="ed_img_overlay">
                                                <a href="javascript:void(0);"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                        <iframe id="educo_video" class="embed-responsive-item" src="https://www.youtube.com/embed/8mb-0qbq984" allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                            <div class="ed_course_single_info">
                                <h2 class="ed_toppadder20">Lesson 1: Basic HTML</h2>

                                <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere sed, imperdiet quis nisi.
                                    Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Uctus ac eros a, faucibus iaculis quam. Nam non iaculis justo. Donec maximus varius velit.Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit
                                    diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. Aliquam sagittis ipsum ex, sed luctus augue venenatis ut.</p>

                                <p>Fusce at rutrum tellus, ac elementum neque. In nec velit orci. Etiam purus felis, pellentesque sit amet tincidunt at, iaculis quis erat. Morbi imperdiet sodales sapien nec rhoncus. Donec placerat mi et libero iaculis, id
                                    maximus est vestibulum. Etiam augue augue, auctor at ornare eget, porta ac nisl. Aliquam et mattis dolor, et aliquet ligula.</p>

                                <p>Suspendisse euismod sapien facilisis tellus aliquam pellentesque.Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis, pulvinar est at, commodo mauris.Sed ultricies posuere magna elementum laoreet.
                                    Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique.</p>

                                <button type="button" class="btn ed_btn pull-left ed_orange">preview lesson</button>
                                <button type="button" class="btn ed_btn pull-right ed_orange">next lesson</button>

                            </div>
                        </div>
                        <div class="ed_time_executor ed_toppadder40">
                            <ul>
                                <li><a href="course_lesson.html">lessons</a> <span>estimated time</span></li>
                                <li><a href="course_lesson.html">development overview</a> <span><i class="fa fa-check-circle-o"></i></span></li>
                                <li><a href="course_lesson.html">basic html</a> <span>Currently active</span></li>
                                <li><a href="course_lesson.html">Basic CSS</a> <span>Locked</span></li>
                                <li><a href="course_lesson.html">Advanced HTML + CSS</a> <span>Locked</span></li>
                                <li><a href="course_lesson.html">Javascript Beginners</a> <span>Locked</span></li>
                            </ul>
                        </div>
                    </div>

                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="sidebar_wrapper_upper">
                            <div class="sidebar_wrapper">

                                <aside class="widget widget_progress_bar">
                                    <h4 class="widget-title">lessons status</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                            <span class="sr-only">75% Complete</span>
                                            <p>75% Completed</p>
                                        </div>
                                    </div>
                                </aside>

                                <aside class="widget widget_categories">
                                    <h4 class="widget-title">Search lessons</h4>
                                    <ul>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> School Psychology</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Youth Counselling</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Exam Stress</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Our Expertise</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Vocational Counselling</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-chevron-right"></i> Student Guidance</a></li>
                                    </ul>
                                </aside>

                                <aside class="widget widget_sharing">
                                    <h4 class="widget-title">share this lesson</h4>
                                    <ul>
                                        <li><a href="course_single.html"><i class="fa fa-facebook"></i> facebook</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-linkedin"></i> linkedin</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-twitter"></i> twitter</a></li>
                                        <li><a href="course_single.html"><i class="fa fa-google-plus"></i> google+</a></li>
                                    </ul>
                                </aside>

                            </div>
                        </div>
                        <div class="ed_sidebar_slider ed_bottompadder10">
                            <h3>popular courses</h3>
                            <div id="owl-demo3" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s10.jpg" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Project Learning </a><span>£25</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s9.jpg" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">billing seminar</a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s8.jpg" alt="item3" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">User experience Jam </a><span>£38</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s5.jpg" alt="item4" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Girls on Rails </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s7.jpg" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Coding Seminar </a><span>free</span></h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="ed_item_img">
                                        <img src="../assets/images/default/slider/sec1_s4.jpg" alt="item2" class="img-responsive">
                                    </div>
                                    <div class="ed_mostrecomeded_course_slider ed_most_recomended_data">
                                        <h4><a href="course_single.html">Javascript Campus </a><span>£60</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Sidebar End-->

                </div>
            </div>

        </div>

        <!--Single content end-->
        <!--Newsletter Section six start-->
        <div class="ed_newsletter_section">
            <div class="ed_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                                <div class="ed_newsletter_section_heading">
                                    <h4>Let us inform you about everything important directly.</h4>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                                <div class="row">
                                    <div class="ed_newsletter_section_form">
                                        <form class="form row m-0">
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                                                <input class="form-control" type="text" placeholder="Newsletter Email" />
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                <button class="btn ed_btn ed_green">confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Newsletter Section six end-->
        <!--Footer Top section start-->
        <div class="ed_footer_wrapper">
            <div class="ed_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <p>
                                    <a href="index-2.html"><img src="../assets/images/footer/F_Logo.png" alt="Footer Logo" /></a>
                                </p>
                                <p>Edution is an outstanding PSD template targeting educational institutions, helping them establish strong identity on the internet without any real developing knowledge.
                                </p>
                                <div class="ed_sociallink">
                                    <ul>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="bottom" title="Whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">find us</h4>
                                <p><i class="fa fa-safari"></i>Wimbledon Street 42a, 45290 Wimbledon, <br/>United Kingdom</p>
                                <p><i class="fa fa-envelope-o"></i><a href="javascript:void(0);">info@edutioncollege.gov.co.uk</a> <a href="javascript:void(0);">public@edutioncollege.gov.co.uk</a></p>
                                <p><i class="fa fa-phone"></i> 1-220-090-080</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="widget text-widget">
                                <h4 class="widget-title">social media</h4>
                                <p><strong>@education </strong> How many students do you educate monthly? Open <a href="#"> http://t.co/KFDdzLSD9</a><br/>2 days ago</p>

                                <p><strong>@educationUK </strong> Web Design that works. Have a look at this masterpiece. <a href="#">http://t.co/9j8DH93zrO</a><br/>5 days ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Top section end-->
        <!--Footer Bottom section start-->
        <?php include("include/footer.php"); ?> 
        <!--Footer Bottom section end-->
    </div>
    <!--Page main section end-->



    <!--Main js file start-->
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/modernizr.js"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="../assets/js/smooth-scroll.js"></script>
    <script src="../assets/js/plugins/revel/jquery.themepunch.tools.min.js"></script>
    <script src="../assets/js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.navigation.min.js"></script>
    <script src="../assets/js/plugins/revel/revolution.extension.slideanims.min.js"></script>
    <script src="../assets/js/plugins/countto/jquery.countTo.js"></script>
    <script src="../assets/js/plugins/countto/jquery.appear.js"></script>
    <script src="../assets/js/default-custom.js"></script>
</body>



</html>