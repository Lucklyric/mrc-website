<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Highlighting objects of interest in an image by integrating saliency and depth</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script src="../js/modernizr.custom.97074.js"></script>
  <!---- start-smoth-scrolling---->
  <script type="text/javascript" src="../js/move-top.js"></script>
  <script type="text/javascript" src="../js/easing.js"></script>
  <!---End-smoth-scrolling---->
  <!--script-->
  <script src="../js/jquery.chocolat.js"></script>
  <link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen" charset="utf-8">
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
        <a href="../index.php"><img src="../images/mrc/mrc_logo.png" style="height: 80px"><span
          style="font-size: 22px;color: black"> Multimedia Research Centre</span> </a>
      </div>
      <div class="top-menu">
        <span class="menu"><img src="../images/nav.png" alt=""/> </span>
        <ul>
          <li><a href="../index.php" class="scroll">Home</a></li>
          <li><a href="../about.php" class="scroll">About MRC</a></li>
          <li><a href="../people.php" class="scroll">People</a></li>
          <li><a href="../projects.php" class="active scroll">Projects</a></li>
          <li><a href="../publications.php" class="scroll">Publications</a></li>
          <li><a href="../partners.php" class="scroll">Partners</a></li>
          <li><a href="../events.php" class="scroll">Events</a></li>
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
    <h2>Highlighting objects of interest in an image by integrating saliency and depth
    </h2>
    <h4 style="text-align: center">Subhayan Mukherjee</h4>
    <div class="top-single">
      <p class="eget">Stereo images have been captured primarily for 3D reconstruction in the past. However, the depth
        information acquired from stereo can also be used along with saliency to highlight certain objects in a scene.
        This approach can be used to make still images more interesting to look at, and highlight objects of interest in
        the scene. We introduce this novel direction here. Even though we use depth from stereo in this project, our
        approach is applicable to depth data acquired from any sensor modality.

      </p>
      <p style="text-align: center"><img src="../images/mrc/projects/sub_p1/image2.png"></p>
      <p class="eget">The above diagram shows an overview of our proposed method. Depth and saliency information from
        the source image are fused and thresholded to identify the salient regions of source image in 3D. The nearest
        cluster of salient regions are designated as the Regions of Interest (ROI), and kept intact. Depth of Field
        (DoF) effect is rendered by increasing defocus (Gaussian blur) with increasing distance from the ROI, as shown
        in the below set of images. Thus, the proposed method automatically selects the ROI, whereas the rival methods
        require manual ROI selection by the user to render DoF.
      </p>
      <p style="text-align: center"><img src="../images/mrc/projects/sub_p1/image3.png"></p>

    </div>
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