<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path= "";
$page_name = "Publications";
?>
<!DOCTYPE HTML>
<html>
<?php include_once("template/html_header_template.php"); ?>
<body>
<?php include_once("template/header_template.php"); ?>
<!--single-->
<div class="single">
    <div class="container container-publication" style="max-width: 650px">
        <h2>Publications</h2>
        <p><strong><a href="publications.php">Journals</a></strong> | <strong><u>
            Books and
                    Patents</u></strong> | <strong><a href="publications_2010_current.php">2010-Current</a></strong> | <strong><a
                href="publications_before_2010.php">Before
            2010</a></strong></p>
        <br>

        <p><strong>Patents</strong></p>
        <ul>

            <li>A. Basu, "Method and apparatus for super high resolution stereo imaging”, Canadian Patent #2,120,240,
                2002
            </li>
            <li>A. Basu, “Method and apparatus for 3D scanning of objects with voids”, Canadian Patent #2,369,710, Sept.
                2006
            </li>
        </ul>
        <p><strong>Book</strong></p>
        <ul>
            <li> I. Cheng, L. Vicent, A. Basu and R. Goebel, “Multimedia in Education: Adaptive Learning and Testing,”
                World Scientific Publishing Co. Pte. Ltd. Aug. 2010.
            </li>
            <li>I. Cheng, G. Cortelazzo, A. Basu and S.K. Tripathi, “3D Online Multimedia: Processing,&nbsp;&nbsp;&nbsp;&nbsp;
                Visualization and Transmission,” World Scientific Press, October 2008
            </li>
            <li>“Computer Vision: Systems, Theory, and Applications,” Edited by A. Basu and X. Li, World Scientific
                Press, April 1993
            </li>

        </ul>
        <p><strong>Book Chapter</strong></p>
        <ul>
            <li>R. Shen, G. Guo, I. Cheng and A. Basu, “Active Calibration,” in Encyclopedia of Computer Vision,
                Springer, Edited by K. Ikeuchi, University of Tokyo, 2013.
            </li>
            <li>A. Basu and J. Baldwin, “A real-time stereo panoramic imaging system”, Edited by R. Bensoman (Paris) and
                S.B. Kang (Microsoft), Springer Verlag, 2001.
            </li>
        </ul>
        <p><strong>Technology Registered</strong></p>
        <ul>
            <li>Technology titled “Multimedia Innovative Item Types for Educational Testing” registered under Tech ID
                2006064 filed with TecEdmonton, 2006
            </li>
        </ul>


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