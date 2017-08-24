<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path = "";
$page_name = "projects";
?>
<!DOCTYPE HTML>
<html>
<?php include_once("template/html_header_template.php"); ?>
<body>
<?php include_once("template/header_template.php"); ?>
<!--single-->
<div class="single">

    <div class="container">
        <h2>Projects</h2>
        <div class="blog">
            <div class="col-md-4 blog-text">
                <h4><a href="sub_projects/sub_p1.php">Highlighting objects of interest in an image by integrating
                        saliency and
                        depth
                    </a></h4>
                <p style="color: #5e5e5e ">Stereo images have been captured primarily for 3D reconstruction in the past.
                    However, the depth information acquired from stereo can also be used along with saliency to
                    highlight certain
                    objects in a scene.</p>
            </div>
            <div class="col-md-8 welcome-img">
                <a href="sub_projects/sub_p1.php" class="mask"><img
                            src="images/mrc/projects/sub_p1/SUBHAYAN_Project.png"
                            alt="image"
                            class="img-responsive zoom-img"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <br>
        <br>
        <div class="blog">
            <div class="col-md-4 blog-text two">
                <h4><a href="sub_projects/navaneeth_p1.php">Learning Influence Of Content On Image Quality
                    </a></h4>
                <p style="color: #5e5e5e">In this project we derive a computational strategy to enhance the performance
                    of Image Quality Metrics (IQM) by using content specific features of an image. We do this by
                    creating Visual Error Importance (VEI) map that is applied to the error maps computed by the IQM. A
                    global optimization can be used to compute the VEI map that is optimal for any given IQM from a set
                    of simple image features..</p>
            </div>
            <div class="col-md-8 blog-img two">
                <a href="sub_projects/navaneeth_p1.php" class="mask"><img src="images/mrc/projects/nav_p1/image1.png"
                                                                          alt="image"
                                                                          class="img-responsive zoom-img"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <br>
        <br>
        <div class="blog">
            <div class="col-md-4 blog-text">
                <h4><a href="sub_projects/alvin_p1.php">Sensor-Based Cloud Computing Interface (CCI) with Multi-Sensor
                        Motion
                        Fusion
                    </a></h4>
                <p style="color: #5e5e5e">In this study, we use data captured by smart sensors to deploy a Cloud
                    Computing Interface in the Cloud
                    infrastructure (CCI). To achieve the benefit from processing, analyzing, evaluating and storing fine
                    motion
                    data.</p>
            </div>
            <div class="col-md-8 welcome-img">
                <a href="sub_projects/alvin_p1.php" class="mask"><img
                            src="images/mrc/projects/alvin_p1/F3-software-screenshort.png" alt="image"
                            class="img-responsive zoom-img"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <br>
        <br>
        <div class="blog">
            <div class="col-md-4 blog-text two">
                <h4><a href="sub_projects/sara_p1.php">Early Diagnosis of Parkinson’s disease using MRI images</a></h4>
                <p style="color: #5e5e5e">The research goal is to develop treatments that can slow or halt the
                    progression of the disease before it significantly affects quality of life. As a computing science
                    research, my plan is to facilitate early diagnosis.</p>
            </div>
            <div class="col-md-8 blog-img two">
                <a href="sub_projects/sara_p1.php" class="mask"><img src="images/b1.jpg" alt="image"
                                                                     class="img-responsive zoom-img"></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--<div class="blog">-->
        <!--<div class="col-md-4 blog-text">-->
        <!--<h4><a href="sub_projects/alvin_p1.html">Early Diagnosis of Parkinson’s disease using MRI images-->
        <!--</a></h4>-->

        <!--</div>-->
        <!--<div class="col-md-8 welcome-img">-->
        <!--<a href="sub_projects/alvin_p1.html" class="mask"><img-->
        <!--src="images/mrc/projects/alvin_p1/F3-software-screenshort.png" alt="image"-->
        <!--class="img-responsive zoom-img"></a>-->
        <!--</div>-->
        <!--<div class="clearfix"></div>-->
        <!--</div>-->
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