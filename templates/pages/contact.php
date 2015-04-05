<?php 
// start the ouput buffer
ob_start(); 
// page config
$title = "Contact Us";
$url = "contact.html";
$type = "";
$parentTitle = "";
$parentUrl = "";
?>

<?php require("../global/head.php"); ?>

<body class="further contact">

    <!-- SITE CONTENT -->

    <div id="site-content">

        <!-- Header -->

        <?php require("../global/header.php"); ?>

        <!-- Sub-Header -->

        <?php require("../global/sub-header.php"); ?>

        <!-- Breadcrumb -->

        <?php require("../global/breadcrumb.php"); ?>

        <!-- Main Content -->

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

    <script src="<?php echo $ROOT; ?>assets/js/app.js"></script>
    
    <!-- Google Map -->
    
    <?php require("../global/google-map.php"); ?>

</body>

<?php require("../global/feet.php"); ?>

<?php
$cachefile = "../../contact.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>