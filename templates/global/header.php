<header class="app-header" id="app-header">
    <div class="container">
        <div class="header-wrapper">
            <!-- Logo -->
            <div class="logo" id="logo">
                <!-- image logo -->
                <a href="index-single.html" class="image-logo">
                    <img src="<?php echo $ROOT; ?>assets/images/logo.png" alt="One Nexus" />
                </a>
                <!-- HTML logo -->
                <a href="index-single.html" class="html-logo"><i class="fa fa-square-o"></i> [Nexus]</a>
            </div>
            <!-- Main-Nav -->
            <?php if ($type == "one-page"){ ?>
                <nav class="main-nav">
                    <ul>
                        <!-- Dropdown Nav --> 
                        <li class="active">
                            <a href="#site-content">Home</a>
                            <ul>
                                <li>
                                    <a href="#">Parallax Title</a>
                                    <ul>
                                        <li><a href="#">One-Page</a></li>
                                        <li><a href="#">Multi-Page</a></li>#
                                    </ul>
                                </li>
                                <li><a href="#">Parallax Background</a></li>
                                <li><a href="#">Fixed Background</a></li>
                                <li><a href="#">Video Background</a></li>
                            </ul>
                        </li>
                        <li><a href="#s-welcome">About</a></li>
                        <li><a href="#s-services">Services</a></li>
                        <li><a href="#s-latest-works">Portfolio</a></li>
                        <li><a href="#s-latest-posts">Blog</a></li>
                        <li><a href="#s-contact">Contact</a></li>
                    </ul>
                    <div class="icon-round-lrg-plain search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </nav>
            <?php } else { ?>
                <nav class="main-nav">
                    <ul>
                        <!-- Dropdown Nav -->
                        <li<?php if ($title == "Index"){ ?> class="active"<?php } ?>>
                            <a href="index.html">Home</a>
                            <ul>
                                <li>
                                    <a href="#">Parallax Title</a>
                                    <ul>
                                        <li><a href="#">One-Page</a></li>
                                        <li><a href="#">Multi-Page</a></li>#
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Parallax Background</a>
                                    <ul>
                                        <li><a href="#">One-Page</a></li>
                                        <li><a href="#">Multi-Page</a></li>#
                                    </ul>
                                </li>
                                <li><a href="#">Fixed Background</a></li>
                                <li><a href="#">Video Background</a></li>
                            </ul>
                        </li>
                        <li<?php if ($title == "About Us") { ?> class="active"<?php } ?>><a href="about.html">About</a></li>
                        <li<?php if ($title == "Services") { ?> class="active"<?php } ?>><a href="services.html">Services</a></li>
                        <li<?php if ($type == "portfolio")  { ?> class="active"<?php } ?>><a href="portfolio.html">Portfolio</a></li>
                        <li<?php if ($type == "blog"){ ?> class="active"<?php } ?>><a href="blog.html">Blog</a></li>
                        <li<?php if ($title == "Contact Us") { ?> class="active"<?php } ?>><a href="contact.html">Contact</a></li>
                    </ul>
                    <div class="icon-round-lrg-plain search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </nav>
            <?php } ?>
        </div>
    </div>
</header>