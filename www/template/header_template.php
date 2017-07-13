<?php
/**
 * Created by IntelliJ IDEA.
 * User: luckl
 * Date: 2017-07-13
 * Time: 12:05 AM
 */
?>
<div class="header-top">
    <div class="container">
        <div class="logo">
            <a href="<?php echo $relative_path ?>index.php"><img
                        src="<?php echo $relative_path ?>images/mrc/mrc_logo.png" style="height: 80px"><span
                        style="font-size: 22px;color: black"> Multimedia Research Centre</span> </a>
        </div>
        <div class="top-menu">
            <span class="menu"><img src="<?php echo $relative_path ?>images/nav.png" alt=""/> </span>
            <ul>
                <li><a href="<?php echo $relative_path ?>index.php"
                       class="<?php echo($page_name == "Home" ? "active" : "") ?> scroll">Home</a></li>
                <li><a href="<?php echo $relative_path ?>about.php"
                       class="<?php echo($page_name == "About" ? "active" : "") ?> scroll">About MRC</a>

                </li>
                <li><a href="<?php echo $relative_path ?>people.php"
                       class="<?php echo($page_name == "people" ? "active" : "") ?> scroll">People</a>
                </li>
                <li><a href="<?php echo $relative_path ?>projects.php"
                       class="<?php echo($page_name == "projects" ? "active" : "") ?> scroll">Projects</a></li>
                <li><a href="<?php echo $relative_path ?>publications.php"
                       class="<?php echo($page_name == "Publications" ? "active" : "") ?> scroll">Publications</a>
                </li>
                <li><a href="<?php echo $relative_path ?>partners.php"
                       class="<?php echo($page_name == "Partners" ? "active" : "") ?> scroll">Partners</a></li>
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
