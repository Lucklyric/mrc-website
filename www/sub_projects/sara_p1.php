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
        <h2>Early Diagnosis Of Parkinson’s Disease Using MRI Images
        </h2>
        <h4 style="text-align: center">Sara Soltaninejad</h4>
        <div class="top-single">
            <p class="eget">Parkinson’s disease (PD) is the second important degenerative neurological disease (NDDs)
                next to Alzheimer’s disease that usually causes major threat to the elderly people. Parkinson's disease
                is caused by the progressive loss of a particular set of nerve cells that produce dopamine, which has a
                critical role in transmitting the signals in the brain. Due to degeneration of these cells, the patient
                faces movement disorders, including muscle rigidity, tremors, and changes in speech and gait. After
                diagnosis, treatments can help relieve symptoms, but there is no cure. Sometimes, the doctors may
                suggest surgery to regulate certain regions of the brain hoping to relieve symptoms. Therefore, the
                research goal is to develop treatments that can slow or halt the progression of the disease before it
                significantly affects quality of life. As a computing science research, my plan is to facilitate early
                diagnosis.
            </p>
            <p class="eget">The diagnosis of PD is challenging even by experienced clinical experts. Very often, there
                is no noticeable symptom in the early stage and only at a later stage patients display severe tremor
                condition (tremor dominant cases). Many clinical tests and non-licensed diagnostic techniques have been
                conducted, targeting accuracy, repeatability and reliability. But none of them have demonstrated the
                required accuracy and ease of use that can warrant them as a standard clinical practice. On the other
                hand, magnetic resonance imaging (MRI) has been referred as “a gold standard” mechanism for studying the
                brain anatomy of different developmental stage. MRI research has attracted a lot of interest with the
                belief that it can be used for early diagnosis of Parkinson’s disease.

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