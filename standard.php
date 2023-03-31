<?php include("include/header.php");?>
<link rel="stylesheet" type="text/css" href="imgstyle.css">

    <script src="js/smart_btr.min.js" type="text/javascript"></script>
    <script src="smart_btr.js" type="text/javascript"></script>
 <body class="demo-5">
        <!--WRAPPER START--> 
        <div class="wrapper"> 
            <?php include("include/navbar.php"); ?>
              <!-- SAB BANNER START-->
            <div class="sab_banner overlay">
                <div class="container">
                    <div class="sab_banner_text">
                        <h2>Photo Gallery</h2>
                        <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Photo Gallery</li>
                        </ul>
                        <?php include("include/slider_top.php"); ?>
                    </div>
                </div>
            </div>


    
    <div class="col-md-6">
    <div style="width:100%;margin:80px auto;">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:50px;left:0px;width:960px;height:480px; margin-bottom: 200px; overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
            <div>
                <img data-u="image" src="photoimg/004.jpg" />
                <img data-u="thumb" src="photoimg/004-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/005.jpg" />
                <img data-u="thumb" src="photoimg/005-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/006.jpg" />
                <img data-u="thumb" src="photoimg/006-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/007.jpg" />
                <img data-u="thumb" src="photoimg/007-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/008.jpg" />
                <img data-u="thumb" src="photoimg/008-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/009.jpg" />
                <img data-u="thumb" src="photoimg/009-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/010.jpg" />
                <img data-u="thumb" src="photoimg/010-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/013.jpg" />
                <img data-u="thumb" src="photoimg/013-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/014.jpg" />
                <img data-u="thumb" src="photoimg/014-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/015.jpg" />
                <img data-u="thumb" src="photoimg/015-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/016.jpg" />
                <img data-u="thumb" src="photoimg/016-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/017.jpg" />
                <img data-u="thumb" src="photoimg/017-s99x66.jpg" />
            </div>
            <div>
                <img data-u="image" src="photoimg/018.jpg" />
                <img data-u="thumb" src="photoimg/018-s99x66.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation composer</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#000;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
</div>
</div>


            <?php include("include/footer.php"); ?>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->
</body>
</html>
