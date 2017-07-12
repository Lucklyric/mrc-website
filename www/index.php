<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <title>Multimedia Research Centre | Home :: MRC</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.1.6.mini.js" type="text/javascript"></script>
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


    <!--Animating the list under the MRC research focus-->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {

            var i = 0,
                delay = 3000,
                animate = 400;

            function animateList() {
                var imax = $("ul#list li").length - 1;
                $("ul#list li:eq(" + i + ")")
                    .animate({"fontSize": "20px"}, animate)
                    .animate({"fontSize": "20px"}, delay)
                    .animate({"fontSize": "10px"}, animate, function () {

                        (i == imax) ? i = 0 : i++;
                        animateList();
                    });

            };

            animateList();
        });
    </script>

    <!--script-->

</head>
<body>
<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="index.php"><img src="images/mrc/mrc_logo.png" style="height: 80px"><span
                    style="font-size: 22px;color: black"> Multimedia Research Centre</span> </a>
        </div>
        <div class="top-menu">
            <span class="menu"><img src="images/nav.png" alt=""/> </span>
            <ul>
                <li><a href="index.php" class="active scroll">Home</a></li>
                <li><a href="about.php" class="scroll">About MRC</a></li>
                <li><a href="people.php" class="scroll">People</a></li>
                <li><a href="projects.php" class="scroll">Projects</a></li>
                <li><a href="publications.php" class="scroll">Publications</a></li>
                <li><a href="partners.php" class="scroll">Partners</a></li>
<!--                <li><a href="events.php" class="scroll">Events</a></li>-->
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
<div class="body-container">
    <!--Pictures for the main page -->
    <!--<div id="jssor_1"-->
    <!--style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:300px;overflow:hidden;visibility:hidden;">-->
    <!--&lt;!&ndash; Loading Screen &ndash;&gt;-->

    <!--<div data-u="slides"-->
    <!--style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">-->

    <!--<div>-->
    <!--<img data-u="image" src="images/mrc/main/convo17.jpg"/>-->
    <!--<div data-u="caption" data-t="8"-->
    <!--style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,255,255,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">-->
    <!--MM grad 2017-->
    <!--</div>-->
    <!--<div data-u="caption" data-t="9"-->
    <!--style="position:absolute;top:298px;left:-600px;width:600px;height:2px;z-index:0;background-color:rgba(255,255,255,0.6);"></div>-->
    <!--</div>-->
    <!--<div>-->
    <!--<img data-u="image" src="images/mrc/main/convo17-1.jpg"/>-->
    <!--<div data-u="caption" data-t="8"-->
    <!--style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">-->
    <!--Convocation 2017-->
    <!--</div>-->
    <!--<div data-u="caption" data-t="9"-->
    <!--style="position:absolute;top:298px;left:-600px;width:600px;height:2px;z-index:0;background-color:rgba(255,255,255,0.6);"></div>-->
    <!--</div>-->
    <!--<div>-->
    <!--<img data-u="image" src="images/mrc/main/convo17-2.jpg"/>-->
    <!--<div data-u="caption" data-t="8"-->
    <!--style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">-->
    <!--Convocation 2017-->
    <!--</div>-->
    <!--<div data-u="caption" data-t="9"-->
    <!--style="position:absolute;top:298px;left:-600px;width:600px;height:2px;z-index:0;background-color:rgba(255,255,255,0.6);"></div>-->
    <!--</div>-->
    <!--<div>-->
    <!--<img data-u="image" src="images/mrc/main/convo17-3.jpg"/>-->
    <!--<div data-u="caption" data-t="8"-->
    <!--style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">-->
    <!--Convocation 2017-->
    <!--</div>-->
    <!--<div data-u="caption" data-t="9"-->
    <!--style="position:absolute;top:298px;left:-600px;width:600px;height:2px;z-index:0;background-color:rgba(255,255,255,0.6);"></div>-->
    <!--</div>-->
    <!--<div>-->
    <!--<img data-u="image" src="images/mrc/main/convo17-4.jpg"/>-->
    <!--<div data-u="caption" data-t="8"-->
    <!--style="position:absolute;top:30px;left:30px;width:350px;height:30px;z-index:0;background-color:rgba(235,81,0,0.6);font-size:20px;color:#ffffff;line-height:30px;text-align:center;">-->
    <!--Convocation 2017-->
    <!--</div>-->
    <!--<div data-u="caption" data-t="9"-->
    <!--style="position:absolute;top:298px;left:-600px;width:600px;height:2px;z-index:0;background-color:rgba(255,255,255,0.6);"></div>-->
    <!--</div>-->

    <!--</div>-->
    <!--</div>-->


    <div class="content">
        <img src="images/mrc/main/campus-aerial.jpg" style="width:100%;height: 512px;object-fit: cover">
        <!-- PUT MRC Contents here Start -->
        <div class="services-section" id="services">
            <div class="container">
                <h3>Welcome to the Multimedia Research Center (MRC)</h3>
            </div>
        </div>
        <div class="services-grids">
            <div class="col-md-6 service-leftgrid">
                <div class="service1">
                    <div class="left-grid1">
                            <span><img class="manImg" src="images/mrc/overview.jpg"
                                       style="width:70px;height:40px;"></span>
                    </div>
                    <div class="left-grid2">
                        <h2>Overview </h2>
                        <p align="justify" style="font-size:140%;">Our research centre actively conducts
                            state-of-the-art projects
                            in computer vision, computer graphics, image processing and perceptual factors that
                            promote
                            unrestricted
                            access to education and advances in biomedical technology.
                            Multimedia Research Centre (MRC) provides a collaborative environment for dedicated and
                            self-motivated
                            students to enhance their skill sets via exchanging research experience with only
                            other
                            MRC members
                            but also researchers in other world class research groups. </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="service2">
                    <div class="left-grid1">
                        <!--<span class="glyphicon glyphicon-user" aria-hidden="true"></span>-->
                    </div>
                    <!--<div class="left-grid2">
                      <h4>Magnam aliqu</h4>
                      <p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
                    </div>-->
                    <!--<div class="clearfix"></div>
                  </div>
                  <div class="service1">
                    <div class="left-grid1">
                      <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    </div>
                    <div class="left-grid2">
                      <h4>Voluptas nulla </h4>
                      <p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
                    </div>-->
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 service-rightgrid">
                <div class="service1">
                    <div class="left-grid1">
                        <span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span>
                    </div>
                    <div class="left-grid2">
                        <h2>Join MRC </h2>
                        <p align="justify" style="font-size:140%;">Applicants to the graduate program in our
                            Computing
                            Science
                            Department are always welcome, and you are invited to join the following research
                            activities
                            conducted in
                            MRC. Our students carry out applied research with focus on:
                        </p>
                        <p align="center" style="font-size:130%;">
                            <b><i>Intelligent Multimedia Analysis & Processing</i></b>
                            </br>
                            <b><i>Multimedia Data Mining</i></b>
                            </br>
                            <b><i>Online and Mobile Multimedia Education</i></b>
                            </br>
                            <b><i>Computer Graphics, Computer Vision, Image Processing </i></b>
                            </br>
                            <b><i>Augmented Reality</i></b>
                            </br>
                            <b><i>Scientific and Medical Data Visualization</i></b>
                            </br>
                            <b><i>Human Factors, Perceptual Analysis and User Studies</i></b>
                        </p>

                    </div>

                    <div class="clearfix"></div>
                </div>
                <!--div class="service2">
                  <div class="left-grid1">
                    <span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
                  </div>
                  <div class="left-grid2">
                    <h4>PCum sociis natoque </h4>
                    <p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="service1">
                  <div class="left-grid1">
                    <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                  </div>
                  <div class="left-grid2">
                    <h4>Phasellus porta </h4>
                    <p>How wonderful it is that nobody need wait a singlemoment before starting to improve the world.</p>
                  </div-->
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--gallery-->
<!--div class="gallery" id="gallery">
  <div class="container">
    <h3>gallery</h3>
    <div class="gallery-grids">
    <section>
      <ul id="da-thumbs" class="da-thumbs">
        <li>
          <a href="images/g1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g1.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g2.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g3.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g4.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g5.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g6.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g7.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g8.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <li>
          <a href="images/g9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
            <img src="images/g9.jpg" alt="" />
            <div>
              <h5>project</h5>
              <span>non suscipit leo fringilla non suscipit leo fringilla molestie</span>
            </div>
          </a>
        </li>
        <div class="clearfix"> </div>
      </ul>
    </section>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
  <script type="text/javascript">
    $(function() {

      $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

    });
  </script>
      </div>
</div>
</div>
<!--//gallery-->
<!--team-->
<!--div class="team" id="team">
  <div class="container">
  <h3>Our Team Members</h3>
  <div class="team-info">
    <div class="col-md-3 team-grids">
      <a href="#">
        <img class="img-responsive" src="images/t1.jpg" alt="">
        <div class="captn">
          <h4>Tincidun</h4>
          <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
        </div>
      </a>
    </div>
    <div class="col-md-3 team-grids">
      <a href="#">
        <img class="img-responsive" src="images/t2.jpg" alt="">
        <div class="captn">
          <h4>Velit uti</h4>
          <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
        </div>
      </a>
    </div>
    <div class="col-md-3 team-grids">
      <a href="#">
        <img class="img-responsive" src="images/t3.jpg" alt="">
        <div class="captn">
          <h4>Posuere</h4>
          <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
        </div>
      </a>
    </div>
    <div class="col-md-3 team-grids">
      <a href="#">
        <img class="img-responsive" src="images/t4.jpg" alt="">
        <div class="captn">
          <h4>Augc sfe</h4>
          <p>Aenean pulvinar ac enimet posuere tincidunt velit Utin tincidunt</p>
        </div>
      </a>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
</div>
<!--//team-->

<!--start-blog-->
<!--div id="blog" class="blog-section">
   <div class="container">
         <h3>Blog</h3>
     <div class="blog">
       <div class="col-md-4 blog-text">
         <h5>THU 14 May, 2015</h5>
        <h4><a href="single.html">EXCEPTEUR SINT OCCAECAT CUPIDATAT NON</a></h4>
         <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
      <div class="col-md-8 welcome-img">
       <a href="single.html" class="mask"><img src="images/b2.jpg" alt="image" class="img-responsive zoom-img"></a>
      </div>
       <div class="clearfix"> </div>
     </div>
      <div class="blog">
     <div class="col-md-4 blog-text two">
         <h5>THU 14 May, 2015</h5>
        <h4><a href="single.html">EXCEPTEUR SINT OCCAECAT CUPIDATAT NON</a></h4>
         <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
      <div class="col-md-8 blog-img two">
       <a href="single.html" class="mask"><img src="images/b3.jpg" alt="image" class="img-responsive zoom-img"></a>
      </div>
       <div class="clearfix"> </div>
     </div>
      <div class="blog">
       <div class="col-md-4 blog-text">
         <h5>THU 14 May, 2015</h5>
         <h4><a href="single.html">EXCEPTEUR SINT OCCAECAT CUPIDATAT NON</a></h4>
         <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
       </div>
      <div class="col-md-8 welcome-img">
       <a href="single.html" class="mask"><img src="images/b1.jpg" alt="image" class="img-responsive zoom-img"></a>
      </div>
       <div class="clearfix"> </div>
     </div>
</div>
</div-->
<div class="contact-section" id="contact">
    <div class="container">
        <div class="contact-header">
            <h3>contact us</h3>

            <p align="justify" style="font-size:140%;">Computing Science Center (CSC) 2-25, Department of Computing
                Science</p>
            <p align="justify" style="font-size:140%;">University of Alberta, Edmonton, Alberta, Canada</p>
            <p align="justify" style="font-size:140%;">Phone:780-492-8028</p>
            <p align="justify" style="font-size:140%;"><a href="mailto:anup@cs.ualberta.ca"><u>E-mail</u></a></p>
        </div>
        <div align="center" class="google-map">
            <div id="map"></div>
        </div>
    </div>

</div>


</div>

<div class="footer-section">
    <div class="container">
        <div class="footer-bottom">
            <p>Copyright &copy; 2017 <span>Multimedia Research Centre.</span> All rights reserved </a></p>
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
<script>
    function initMap() {
        var uluru = {lat: 53.526907, lng: -113.526988};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByDFxlrRFrmYxZclm7ZxzlYqYMHVYn1FM&callback=initMap">
</script>
</html>