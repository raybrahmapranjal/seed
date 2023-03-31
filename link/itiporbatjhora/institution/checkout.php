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
                            <h2>Checkout</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index-2.html">home</a></li>
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb end-->
        <!--checkout start-->
        <div class="ed_graysection ed_toppadder80 ed_bottompadder80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="woo-cart-table">
                            <form class="checkout woocommerce-checkout">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Billing Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>first name <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>last name <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Company Identity</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Billing Address <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Town / City <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>County / Region <sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label>Postcode / Zip<sup>*</sup></label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <h3 class="checkout-heading">Shipping Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>Country <sup>*</sup></label>
                                                    <select class="form-control">
												<option value="0">Select a country…</option>
												<option value="1">Åland Islands</option>
												<option value="2">Algeria</option>
												<option value="3">Australia</option>
												<option value="4">Brazil</option>
												<option value="5">India</option>
												<option value="6">Switzerland</option>
												<option value="7">United Kingdom (UK)</option>
												<option value="8">United States (US)</option>
											</select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label> Post / Zip Code</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="woocommerce-checkout-payment">
                                                    <h3>Payment method</h3>
                                                    <ul class="payment_methods methods">
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="dbt" id="c1" name="checkout">
                                                                    <label for="c1"></label>
                                                                </div>
                                                            </div>
                                                            Direct Bank Transfer
                                                            <div class="payment_box" data-period="dbt">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="cheque_payment" id="c2" name="checkout">
                                                                    <label for="c2"></label>
                                                                </div>
                                                            </div>
                                                            Checque Payment
                                                            <div class="payment_box" data-period="cheque_payment">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="credit_card" id="c3" name="checkout">
                                                                    <label for="c3"></label>
                                                                </div>
                                                            </div>
                                                            Credit Card
                                                            <img src="../assets/images/cards.jpg" class="pull-right" alt="">
                                                            <div class="payment_box" data-period="credit_card">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ed_rate">
                                                                <div class="custom-checkbox">
                                                                    <input type="radio" value="paypal" id="c4" name="checkout">
                                                                    <label for="c4"></label>
                                                                </div>
                                                            </div>
                                                            Paypal
                                                            <img src="../assets/images/paypal.jpg" class="pull-right" alt="">
                                                            <div class="payment_box" data-period="paypal">
                                                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn ed_btn pull-right ed_orange">place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--checkout end-->
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


<!-- Mirrored from kamleshyadav.com/html/educo/educo/default/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2022 07:59:16 GMT -->
</html>