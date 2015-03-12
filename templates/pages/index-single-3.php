<?php 
$ROOT = '/';
// start the ouput buffer
ob_start(); 
$ROOT = '/';
// page config
$title = "Index";
$url = "index-single-3.html";
$type = "one-page";
$parentTitle = "";
$parentUrl = "";
?>

<?php require("../global/head.php"); ?>

<body class="index index-single hero-fixed">

    <!-- SITE CONTENT -->

    <div id="site-content">

        <!-- Header -->

        <?php require("../global/header.php"); ?>

        <!-- Hero -->

        <?php require("../sections/hero.php"); ?>

        <!-- Main Content -->

        <?php require("../sections/welcome.php"); ?>

        <?php require("../sections/skills.php"); ?>

        <?php require("../sections/why-choose-us.php"); ?>

        <?php require("../sections/promo-banner.php"); ?>

        <?php require("../sections/team.php"); ?>

        <?php require("../sections/more-info.php"); ?>

        <?php require("../sections/services.php"); ?>

        <?php require("../sections/stats.php"); ?>

        <?php require("../sections/what-we-offer.php"); ?>

        <?php require("../sections/clients.php"); ?>

        <?php require("../sections/pricing.php"); ?>

        <?php require("../sections/quote.php"); ?>

        <?php require("../sections/latest-works.php"); ?>

        <?php require("../sections/testimonials.php"); ?>

        <?php require("../sections/latest-posts.php"); ?>

        <?php require("../sections/promo-banner.php"); ?>

        <?php require("../sections/contact.php"); ?>

        <div id="map"></div>

        <!-- Footer -->
        
        <?php require("../global/footer.php"); ?>

    </div><!-- end #site-content -->

    <!-- TOOLS/UTILITIES -->

    <?php require("../global/tools-utilities.php"); ?>

    <?php require("../global/theme-options-html.php"); ?>

    <!-- SCRIPTS -->

    <?php require("../global/global-scripts.php"); ?>
    
    <?php require("../global/theme-options-js.php"); ?>

    <!-- General -->

    <script src="<?php echo $ROOT; ?>assets/js/global.js"></script>
    <script src="<?php echo $ROOT; ?>assets/js/animate-number.js"></script>
    <script src="<?php echo $ROOT; ?>assets/js/form-validation.js"></script>
    <script src="<?php echo $ROOT; ?>assets/js/homepage.js"></script>
    <script src="<?php echo $ROOT; ?>assets/js/scroll-spy.js"></script>
    <script src="<?php echo $ROOT; ?>assets/js/section-welcome.js"></script>

    <!-- Google Map -->

    <?php require("../global/google-map.php"); ?>

</body>

<?php require("../global/feet.php"); ?>

<?php
$cachefile = "../../index-single-3.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>