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
                            <a href="index.html">Home</a>
                            <ul>
                                <li>
                                    <a href="index-single.html">Parallax Title</a>
                                    <ul>
                                        <li><a href="index-single.html">One-Page</a></li>
                                        <li><a href="index.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-2.html">Parallax Background</a>
                                    <ul>
                                        <li><a href="index-single-2.html">One-Page</a></li>
                                        <li><a href="index-2.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-3.html">Fixed Background</a>
                                    <ul>
                                        <li><a href="index-single-3.html">One-Page</a></li>
                                        <li><a href="index-3.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-4.html">Video Background</a>
                                    <ul>
                                        <li><a href="index-single-4.html">One-Page</a></li>
                                        <li><a href="index-4.html">Multi-Page</a></li>
                                    </ul>
                                </li>
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
                                    <a href="index-single.html">Parallax Title</a>
                                    <ul>
                                        <li><a href="index-single.html">One-Page</a></li>
                                        <li><a href="index.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-2.html">Parallax Background</a>
                                    <ul>
                                        <li><a href="index-single-2.html">One-Page</a></li>
                                        <li><a href="index-2.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-3.html">Fixed Background</a>
                                    <ul>
                                        <li><a href="index-single-3.html">One-Page</a></li>
                                        <li><a href="index-3.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-4.html">Video Background</a>
                                    <ul>
                                        <li><a href="index-single-4.html">One-Page</a></li>
                                        <li><a href="index-4.html">Multi-Page</a></li>
                                    </ul>
                                </li>
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