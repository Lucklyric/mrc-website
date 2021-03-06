<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Multimedia Research Centre | Home :: MRC</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="keywords" content="Sciencelab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
  <script type="application/x-javascript"> addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
  }, false);
  function hideURLbar() {
    window.scrollTo(0, 1);
  } </script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script src="js/modernizr.custom.97074.js"></script>
  <!---- start-smoth-scrolling---->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <!---End-smoth-scrolling---->
  <!--script-->
  <script src="js/jquery.chocolat.js"></script>
  <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
  <!--light-box-files -->
  <script type="text/javascript" charset="utf-8">
    $(function () {
      $('.gallery a').Chocolat();
    });
  </script>
  <!--script-->

</head>
<body>
<div class="header head1">
  <div class="header-top">
    <div class="container">
      <div class="logo">
        <a href="index.php"><img src="images/mrc/mrc_logo.png" style="height: 80px"><span
          style="font-size: 22px;color: black"> Multimedia Research Centre</span> </a>
      </div>
      <div class="top-menu">
        <span class="menu"><img src="images/nav.png" alt=""/> </span>
        <ul>
          <li><a href="index.php" class="scroll">Home</a></li>
          <li><a href="about.php" class="scroll">About MRC</a></li>
          <li><a href="people.php" class="scroll">People</a></li>
          <li><a href="projects.php" class="scroll">Projects</a></li>
          <li><a href="publications.php" class="scroll">Publications</a></li>
          <li><a href="partners.php" class="scroll">Partners</a></li>
          <li><a href="events.php" class="active scroll">Events</a></li>
        </ul>
      </div>
      <!--script-nav-->
      <script>
        $("span.menu").click(function () {
          $(".top-menu ul").slideToggle("slow", function () {
          });
        });
      </script>

      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--single-->
<div class="single">
  <div class="container">


  </div>
</div>
<!--footer-->
<div class="footer-section">
  <div class="container">
    <div class="footer-bottom">
      <p>Copyright &copy; 2017 <span>Multimedia Research Centre</span> All rights reserved | Design by <a
        href="http://w3layouts.com">W3layouts</a></p>
    </div>
    <script type="text/javascript">
      $(document).ready(function () {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({easingType: 'easeOutQuart'});

      });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  </div>
</div>
</body>
</html>