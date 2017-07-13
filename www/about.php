<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
/* Pre-set parameters */
$relative_path = "";
$page_name = "About";
?>
<!DOCTYPE HTML>
<html>
<?php include_once("template/html_header_template.php"); ?>
<body>
<?php include_once("template/header_template.php"); ?>
<!--single-->
<div class="single">
  <div class="container">
    <h2>About MRC</h2>
    <div class="top-single">
      <h4>“Research and education flourish when beautiful minds gather and when the inspiration strikes.”
      </h4>
      <p class="eget">With the support of our sponsors and collaborators, the Multimedia Research Centre is able to
        conduct state-of-the-art projects that help students and researchers prepare for their obligations to society.
        Based in the Computing Science Department at the University of Alberta, MRC’s mission statement aligns with that
        of the University – dare to discover and dare to deliver. We promote research and education without borders.
        Moreover, <b>we aim to deliver research and education anywhere, at any time, for anyone.</b>
      </p>
      <p class="eget">Since its establishment in 2006, MRC has trained numerous undergraduates, graduates, researchers
        and scholars, who are now having successful careers either in academia or industry. Our research in computer
        vision, computer graphics, image processing and perceptual factors is targeted towards the applications of
        biomedicine and education.</p>
      <p class="eget">In addition to collaborating with other departments and faculties in the University, MRC is also
        closely associated with companies in San Jose and other research groups internationally, which include
        ParisTech, INSA Lyon and Telecom Lille in France. Visiting scholars, e.g. from China, Mexico and Brazil, funded
        by foreign governments and Canadian funding agencies constitute an extended family of MRC.</p>
      <p><b>Also, visit the MSc with Specialization in <a href="http://mmgrad.org"><u>Multimedia Program
        website.</u></a></b></p>
      <br>
      <table width="100%" border="0" cellpadding="5">
        <tbody><tr>
          <td align="center"><img src="images/mrc/about/photo_embs_bbq_thumb.jpg" width="350" height="262"><br>IEEE Northern Canada Section BBQ June 2009</td>
          <td width="50%" align="center"><img src="images/mrc/about/photo_gangconvocation_thumb.jpg" width="350" height="262"><br>MRC Alumni - Dr. Gang Wu 2009 June Convocation</td>
        </tr>
        <tr>
          <td align="center"><img src="images/mrc/about/photo_icore2008_02.jpg" width="350" height="262"><br>iCORE Summit 2008 at Banff, Alberta, Canada</td>
          <td width="50%" align="center"><img src="images/mrc/about/photo_icore2008_01.jpg" width="350" height="262"><br>iCORE Summit 2008 at Banff, Alberta, Canada</td>
        </tr>
        <tr>
          <td align="center"><img src="images/mrc/about/photo_hallowen07 005.jpg" width="350" height="262"><br>Multimedia Research Centre - Halloween 2007</td>
          <td width="50%" align="center"><img src="images/mrc/about/photo_crome_members.jpg" width="350" height="262"><br>Multimedia Research Centre - Team members and interns (2007)</td>

        </tr>

        </tbody></table>
      <p align="center"><b><u><a href="about_before2010.php">Before 2010</a></u></b></p>
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