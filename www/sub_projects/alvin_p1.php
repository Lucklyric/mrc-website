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
<!--single-->
<div class="single">
    <div class="container">
        <h2>Sensor-Based Cloud Computing Interface (CCI) with Multi-Sensor Motion Fusion
        </h2>
        <h4 style="text-align: center">Alvin(Xinyao) Sun</h4>
        <div class="top-single">
            <br>
            <p style="text-align: center">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/T701osg-Iig" frameborder="0"
                        allowfullscreen></iframe>
            </p>
            <br>
            <p class="eget">In this study, we use data captured by smart sensors to deploy a Cloud Computing Interface
                in the
                Cloud infrastructure (CCI). To achieve the benefit from processing, analyzing, evaluating and storing
                fine
                motion data. We introduce a smart sensor-based motion detection technique for objective measurement and
                assessment of surgical dexterity among users at different experience levels. The goal is to allow
                trainees to
                evaluate their performance based on a reference model shared through CCI, without the physical presence
                of an
                evaluating surgeon.
            </p>
            <p style="text-align: center"><img src="../images/mrc/projects/alvin_p1/Selection_001.png"></p>
            <p class="eget">However, accurately tracking the articulation of hand poses in real-time is still an open
                research
                problem. A sensor has a limited viewing volume and there is noisy sensor data caused by the complex and
                fast
                finger movements. In this work, we also focus on improving hand pose estimation and enhancing existing
                single-view based tracking systems. We propose using multiple sensors and fuse the estimations from
                multiple
                sources in order to predict hand pose motion more accurately.

            </p>
            <p style="text-align: center"><img src="../images/mrc/projects/alvin_p1/F3-software-screenshort.png"></p>
            <br>
            <p style="text-align: center"><img src="../images/mrc/projects/alvin_p1/F2-multisensor.jpg"></p>

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