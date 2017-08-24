<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path = "";
$page_name = "people";
?>
<!DOCTYPE HTML>
<html>
<?php include_once("template/html_header_template.php"); ?>
<body>
<?php include_once("template/header_template.php"); ?>
<!--single-->
<div class="single">
    <div class="container">
        <!--team-->
        <h2>Our Team Members</h2>
        <div class="team" id="team" style="padding-top: 0">
            <h4>Professors:</h4>
            <div class="team-info">
                <div class="col-md-3 team-grids">
                    <a href="https://webdocs.cs.ualberta.ca/~anup/">
                        <img class="img-responsive people-img" src="images/mrc/people/RecentAnup.JPG" alt="">
                        <div class="captn">
                            <h4 style="color: white">Anup Basu</h4>
                            <p>Director</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="https://webdocs.cs.ualberta.ca/~lin/">
                        <img class="img-responsive" src="images/mrc/people/irene.jpg" alt="">
                        <div class="captn">
                            <h4 style="color: white;">Irene Cheng</h4>
                            <p>Scientific Director</p>
                        </div>
                    </a>
                </div>
                <div class="clearfix" style="align-content: center"></div>
            </div>
            <br>
            <h4>Students:</h4>
            <div class="team-info" style="align-content: center">
                <div class="col-md-3 team-grids">
                    <a href="https://www.linkedin.com/in/navaneethkamballurkottayil">
                        <img class="img-responsive" src="images/mrc/people/Navaneeth.jpg" alt="">
                        <div class="captn">
                            <h4 style="color: white">Navaneeth Kamballur Kottayil</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="https://goo.gl/ZcilSo">
                        <img class="img-responsive" src="images/mrc/people/Subhayan.png" alt="">
                        <div class="captn">
                            <h4 style="color: white;">Subhayan Mukherjee</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="https://webdocs.cs.ualberta.ca/~khalifab/">
                        <img class="img-responsive" src="images/mrc/people/housam.jpg" alt="">
                        <div class="captn">
                            <h4 style="color: white">Housam Khalifa</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="https://ca.linkedin.com/in/sarah-soltaninejad-33762349">
                        <img class="img-responsive" src="images/mrc/people/sara.png" alt="">
                        <div class="captn">
                            <h4 style="color: white">Sara Soltaninejad</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="">
                        <img class="img-responsive" src="images/mrc/people/MehdiFaraji.jpg" alt="">
                        <div class="captn">
                            <h4 style="color: white">Mehdi Faraji</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 team-grids">
                    <a href="https://webdocs.cs.ualberta.ca/~xinyao1/">
                        <img class="img-responsive" src="images/mrc/people/alvin.png" alt="">
                        <div class="captn">
                            <h4 style="color: white">Alvin(Xinyao) Sun</h4>
                            <p>PhD Student</p>
                        </div>
                    </a>
                </div>
                <br>
                <!--<div class="col-md-3 team-grids">-->
                <!--<a href="#">-->
                <!--<img class="img-responsive" src="images/t3.jpg" alt="">-->
                <!--<div class="captn">-->
                <!--<h4>Posuere</h4>-->
                <!--<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>-->
                <!--</div>-->
                <!--</a>-->
                <!--</div>-->
                <!--<div class="col-md-3 team-grids">-->
                <!--<a href="#">-->
                <!--<img class="img-responsive" src="images/t4.jpg" alt="">-->
                <!--<div class="captn">-->
                <!--<h4>Augc sfe</h4>-->
                <!--<p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>-->
                <!--</div>-->
                <!--</a>-->
                <!--</div>-->

                <div class="clearfix"></div>
            </div>
        </div>
        <!--//team-->

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