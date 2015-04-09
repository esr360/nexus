<?php
// page config
$title = "Welcome to Nexus";
$url = "";
$type = "master";
$parentTitle = "";
$parentUrl = "";
?>

<?php require("../global/head.php"); ?>

<body class="master">

    <!-- SITE CONTENT -->

    <div id="site-content">

        <!-- Header -->

        <!-- Main Content -->

        <section class="section primary">
            <div class="container">

				<ul>
					<li><a href="about.php">about.php</a></li>
					<li><a href="blog.php">blog.php</a></li>
					<li><a href="contact.php">contact.php</a></li>
					<li><a href="index.php">index.php</a></li>
					<li><a href="index-2.php">index-2.php</a></li>
					<li><a href="index-3.php">index-3.php</a></li>
					<li><a href="index-4.php">index-4.php</a></li>
					<li><a href="index-single.php">index-single.php</a></li>
					<li><a href="index-single-2.php">index-single-2.php</a></li>
					<li><a href="index-single-3.php">index-single-3.php</a></li>
					<li><a href="index-single-4.php">index-single-4.php</a></li>
					<li><a href="portfolio.php">portfolio.php</a></li>
					<li><a href="services.php">services.php</a></li>
					<li><a href="single-post.php">single-post.php</a></li>
					<li><a href="single-project.php">single-project.php</a></li>
				</ul>

            </div>
        </section>

        <!-- Footer -->

    </div><!-- end #site-content -->

    <!-- TOOLS/UTILITIES -->

    <?php require("../global/tools-utilities.php"); ?>

    <!-- SCRIPTS -->

    <?php require("../global/global-scripts.php"); ?>

    <!-- General -->
    <script src="<?php echo $ROOT; ?>assets/js/app.js"></script>

</body>

<?php require("../global/feet.php"); ?>