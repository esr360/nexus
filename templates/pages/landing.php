<?php 
$ROOT = '/';
// start the ouput buffer
ob_start(); 
// page config
$title = "Welcome to Nexus";
$url = "landing.html";
$type = "";
$parentTitle = "";
$parentUrl = "";
?>

<?php require("../global/head.php"); ?>

<body class="landing">

    <!-- SITE CONTENT -->

    <div id="site-content">

        <!-- Header -->

        <?php require("../global/header.php"); ?>

        <!-- Sub-Header -->

        <section class="hero sub-header">
            <div class="container inactive">
                <div class="sh-title-wrapper">
                    <h1><?php echo $title; ?></h1>
                    <p>Please choose from the below demos to see some of the different variant possibilities.</p>
                    <a class="button border round cta" href="#">Purchase Theme</a>
                </div>
            </div>
        </section>

        <!-- Main Content -->

        <section class="section primary">
            <div class="container">

                <header class="sep active">
                    <div class="section-title">
                        <h2><i>One-Page</i> Demos</h2>
                    </div>
                    <p>Our one-page demos encapsulate all of the sections that are found across the multi-paged version on one page (apart from the single <a href="single-post.html">blog</a>/<a href="single-project.html">portfolio</a> pages).</p>
                </header>

                <div class="row theme-demos">
                    <div class="span-3">
                        <h3>Parallax Title</h3>
                        <a href="index-single.html#app-blue" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option1.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small active" href="index-single.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index-single.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index-single.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index-single.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Parallax Background</h3>
                        <a href="index-single-2#app-pink.html" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option2.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-single-2.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index-single-2.html#app-green" target="blank"></a>
                            <a class="theme-color small active" href="index-single-2.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index-single-2.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Fixed Background</h3>
                        <a href="index-single-3.html#app-red" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option3.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-single-3.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index-single-3.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index-single-3.html#app-pink" target="blank"></a>
                            <a class="theme-color small active" href="index-single-3.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Video Background</h3>
                        <a href="index-single-4.html#app-green" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option4.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-single-4.html#app-blue" target="blank"></a>
                            <a class="theme-color small active" href="index-single-4.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index-single-4.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index-single-4.html#app-red" target="blank"></a>
                        </div>
                    </div>
                </div>

                <hr class="stripes" />

                <header class="sep active">
                    <div class="section-title">
                        <h2><i>Multi-Page</i> Demos</h2>
                    </div>
                    <p>The multi-page demos split the content into several pages for a more spread out experience, and have a much smaller homepage as a result.</p>
                </header>

                <div class="row theme-demos">
                    <div class="span-3">
                        <h3>Parallax Title</h3>
                        <a href="index.html#app-blue" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option1.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small active" href="index.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Parallax Background</h3>
                        <a href="index-2.html#app-pink" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option2.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-2.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index-2.html#app-green" target="blank"></a>
                            <a class="theme-color small active" href="index-2.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index-2.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Fixed Background</h3>
                        <a href="index-3.html#app-red" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option3.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-3.html#app-blue" target="blank"></a>
                            <a class="theme-color small" href="index-3.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index-3.html#app-pink" target="blank"></a>
                            <a class="theme-color small active" href="index-3.html#app-red" target="blank"></a>
                        </div>
                    </div>
                    <div class="span-3">
                        <h3>Video Background</h3>
                        <a href="index-4.html#app-green" target="blank">
                            <img src="<?php echo $ROOT; ?>assets/images/demo/option4.png" alt="" />
                        </a>
                        <div class="theme-colors">
                            <a class="theme-color small" href="index-4.html#app-blue" target="blank"></a>
                            <a class="theme-color small active" href="index-4.html#app-green" target="blank"></a>
                            <a class="theme-color small" href="index-4.html#app-pink" target="blank"></a>
                            <a class="theme-color small" href="index-4.html#app-red" target="blank"></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->

        <footer class="app-footer">
            <div class="bottom-bar">
                <div class="container">
                    <div class="footer-wrapper">
                        <!-- Copyright Section -->
                        <div class="copyright" id="copyright">
                            © SkyUX 2015
                        </div>
                        <!-- Footer Navigation -->
                        <nav class="footer-nav">                
                            <ul>
                                <li>
                                    <a href="about.html">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="services.html">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="portfolio.html">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="blog.html">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>

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
$cachefile = "../../landing.html";
$fp = fopen($cachefile, 'w'); 
// save the contents of output buffer to the file
fwrite($fp, ob_get_contents()); 
// close the file
fclose($fp); 
// Send the output to the browser
ob_end_flush(); 
?>