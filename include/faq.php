
<div class="container">
  <h1 class="section__headline">ABOUT SEED</h1>
  <!-- <h2 class="FAQs__headline">Basic Things</h2> -->
  <ul class="FAQs">
     <?php 
                if ($readuser) {
                $n=0;
                foreach ($readuser as $aboutKey)
                $string=$aboutKey['description'];
                if (strlen($string) > 200) {
                  $trimstring = substr($string, 0, 200). ' <a href="vision-about.php"><p> <font color=#ff5555; > ..more"</a> ';
                  } else {
                  $trimstring = $string;
                  }
                   {
                ?>
    <li class="FAQ FAQ--active">
      <span class="FAQ__title">What is SEED?</span>
      <div class="FAQ__answer">
        <h5>About SEED</h5>
        
        <p align="justify"><?php  echo  $trimstring; ?></p>
      </div>
    </li>
    <?php }
                  } 
                  ?>
    <li class="FAQ">
      <?php 
                if ($readuser4) {
                $n=0;
                foreach ($readuser4 as $aboutKey)
                $string=$aboutKey['description'];
                if (strlen($string) > 200) {
                  $trimstring = substr($string, 0, 200). ' <a href="vision-about.php">echo "<p> <font color=blue > ..more"</a> ';
                  } else {
                  $trimstring = $string;
                  }
                   {
                ?>
      <span class="FAQ__title">Why SEED?</span>
      <div class="FAQ__answer">
        <h5>Why SEED?</h5>
        <!-- <img src="seed-admin/admin/<?php echo $aboutKey['image'] ;?>" alt=""> -->
        <p align="justify"><?php  echo  $trimstring; ?></p>
      </div>
    </li>
    <?php }
                  } 
                  ?>
    <li class="FAQ">
      <?php 
                if ($readuser6) {
                $n=0;
                foreach ($readuser6 as $aboutKey)
                $string=$aboutKey['description'];
                if (strlen($string) > 200) {
                  $trimstring = substr($string, 0, 200). ' <a href="vision-about.php">echo "<p> <font color=blue > ..more"</a> ';
                  } else {
                  $trimstring = $string;
                  }
                   {
                ?>
      <span class="FAQ__title">Our Mission</span>
      <div class="FAQ__answer">
        <h5>Our Mission</h5>
        <p align="justify"><?php  echo  $trimstring; ?></p>
      </div>
    </li>
    <?php }
                  } 
                  ?>

  </ul>  

</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="function.js"></script>
<script type="text/javascript">
  // Code By Webdevtrick ( https://webdevtrick.com )
$('body').delegate('.FAQ', 'click', function(){
  $('.FAQ').removeClass('FAQ--active');
  $(this).addClass('FAQ--active');
});
</script>

</body>
</html>