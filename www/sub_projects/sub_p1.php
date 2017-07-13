<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path= "../";
$page_name = "projects";
?>
<!DOCTYPE HTML>
<html>
<?php include_once("../template/html_header_template.php"); ?>
<body>
<?php include_once("../template/header_template.php"); ?>
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