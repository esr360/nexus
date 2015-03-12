<?php 
$ROOT = '/';
// start the ouput buffer
ob_start(); 
// page config
$title = "Services";
$url = "services.html";
$type = "";
$parentTitle = "";
$parentUrl = "";
?>

<?php require("../global/head.php"); ?>

<body class="further services">

    <!-- SITE CONTENT -->

    <div id="site-content">

        <!-- Header -->

        <?php require("../global/header.php"); ?>

        <!-- Sub-Header -->

        <?php require("../global/sub-header.php"); ?>

        <!-- Breadcrumb -->

        <?php require("../global/breadcrumb.php"); ?>

        <!-- Main Content -->

        <?php require("../sections/services-further.php"); ?>

        <?php require("../sections/quote.php"); ?>

        <?php require("../sections/pricing.php"); ?>

        <?php require("../sections/testimonials.php"); ?>

        <?php require("../sections/latest-works-further.php"); ?>

        <?php require("../sections/promo-banner.php"); ?>

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

</body>

<?php require("../global/feet.php"); ?>

<?php
$cachefile = "../../services.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>