<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path = "../";
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
        <h2>Learning Influence of Content on Image Quality
        </h2>
        <h4 style="text-align: center">Navaneeth Kamballur Kottayil</h4>
        <div class="top-single">
            <p class="eget">
                In this project we derive a computational strategy to enhance the performance of Image Quality Metrics
                (IQM) by using content specific features of an image. We do this by creating Visual Error Importance
                (VEI) map that is applied to the error maps computed by the IQM. A global optimization can be used to
                compute the VEI map that is optimal for any given IQM from a set of simple image features.
            </p>
            <p style="text-align: center"><img src="../images/mrc/projects/nav_p1/image1.png"></p>
            <p class="eget">
                Error importance maps if we artificially force the algorithm to simulate a scene content is shown below.
            </p>
            <p style="text-align: center"><img src="../images/mrc/projects/nav_p1/image2.png"></p>
            <p class="eget">
                Note how error importance change; in outdoor natural scenes, VEI emphasizes errors in smooth, well lit
                areas and lower to medium complexity regions, with a lower priority to salient objects. Such areas are
                more important if natural scenes are being displayed. On the other hand, for outdoor scenes with
                man-made structures, we see that VEI assigns more importance, in term of image quality, to regions with
                higher details, and less importance to smooth regions. For indoor scenes, we observe a larger importance
                given to smoother regions.
            </p>
            <p class="eget">
                Our results show that VEI maps produce improvement in performance of IQA in all the cases we tested.
            </p>
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