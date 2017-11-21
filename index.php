<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Michelle Bushoy</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/overrides.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500|Open+Sans:400,600,700" rel="stylesheet">
</head>
<body>

<!-- Nav bar -->
<?php include "nav.inc"; ?>
<!-- End nav -->

<!-- Welcome Section -->
  <div id="portfolio" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row">

        <div class="col s12 m6 center"><img class="circle responsive-img" id="michelle" alt="Michelle photo" src="images/Photo.jpg"></div>

        <div class="col s12 m6 center" id="about">
          <h3 class="black-text">Michelle Bushoy</h3>
          <p class="black-text">Welcome! My name is Michelle, and I'm a Junior at University of Rochester. I'm studying Digital Media and Computer Science, with concentrations in Web Design and Human Computer Interaction. I'm passionate about the intersection between code and design. I appreciate list-making, the "Notes" app on iPhones, and highlighter sets.   <br><br>
          In my free time, I love hanging out with my family's Irish Setter, Archie, and biking. I also love cooking, which I rarely have the chance to do in my University dorm. </p><br>
  <!--       

      <a class="btn btn-primary red darken-4" href="https://www.linkedin.com/mynetwork/" target="_blank">LinkedIn</a>
       <a class="btn btn-primary red darken-4" href="https://github.com/mbushoy27" target="_blank">GitHub</a>
      <a class="btn btn-primary red darken-4" href="images/Resume.pdf" target="_blank">Resume</a> -->
      <br><br><br>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Welcome -->

<!-- Code Section -->
<div class="divider"></div>
<div id="code" class="container">
  <div class="section scrollspy">
      <br><br><h2 class="center">Code</h2><br>
      <br>
      <div class="row"> 

      <div class="col s12 m4">
          <a href="https://github.com/mbushoy27/Student-Jobs-Website" class="center" target="_blank"> <img src="images/bigpinkcode1.jpg" class="hoverable"></a>
      </div>  

      <div class="col s12 m4">
          <a href="https://github.com/mbushoy27/Drone-Pilot-Video-Game" class="center" target="_blank"> <img src="images/bigpinkcode2.jpg" class="hoverable"></a>
      </div>  

      <div class="col s12 m4">
        <a href="https://github.com/mbushoy27/TTY-Football-Game" class="center" target="_blank"> <img src="images/bigpinkcode3.jpg" class="hoverable"></a>
      </div>  

      </div>
    </div>
  </div><br><br><br>
<!-- End Code -->

<!-- Design Section -->
<div class="divider"></div>

<div id="design" class="container">
  <div class="section scrollspy">

      <br><br><h2 class="center">Design</h2><br>
      <div class="row">

       <div class="col s12 m4">
              <a href="itstillhurts.php" class="center"> <img src="images/bigpinkdesign1.jpg" class="hoverable"></a>
          </div>  

          <div class="col s12 m4">
              <a href="smithsonian.php" class="center"> <img src="images/bigpinkdesign2.jpg" class="hoverable"></a>
          </div>  

          <div class="col s12 m4">
              <a href="claritas.php" class="center"> <img src="images/bigpinkdesign3.jpg" class="hoverable"></a>
          </div>  

    </div>
  </div>
</div> <br><br><br>
<!-- End Design -->

<footer class="footer">
      <?php include "footer.inc"; ?>
</footer>

<!-- <script>
$(document).ready(function(){
    $('.scrollspy').scrollSpy();
  });

</script> -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- Below script from: https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
