<header class="app-header" id="app-header">
    <div class="container">
        <div class="header-wrapper">
            <!-- Logo -->
            <div class="logo" id="logo">
                <!-- image logo -->
                <a href="<?php echo $ROOT; ?>index-single.html" class="image-logo">
                    <img src="<?php echo $ROOT; ?>assets/images/logo.png" alt="One Nexus" />
                </a>
                <?php if ($demo == true) { ?>
                <!-- HTML logo -->
                <a href="<?php echo $ROOT; ?>index-single.html" class="html-logo"><i class="fa fa-square-o"></i> [Nexus]</a>
                <?php } ?>
            </div>
            <!-- Main-Nav -->
            <?php if ($type == "one-page") { ?>
                <nav class="main-nav">
                    <ul>
                        <li class="active">
                            <a href="index.html">Home</a>
                            <?php if ($demo == true) { ?>
                            <!-- Dropdown Nav --> 
                            <ul>
                                <li>
                                    <a href="<?php echo $ROOT; ?>index-single.html">Parallax Title</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-2.html">Parallax Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-2.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-2.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-3.html">Fixed Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-3.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-3.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-4.html">Video Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-4.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-4.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <?php } ?>
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
                        <li<?php if ($title == "Index"){ ?> class="active"<?php } ?>>
                            <a href="<?php echo $ROOT; ?>index.html">Home</a>
                            <?php if ($demo == true) { ?>
                            <!-- Dropdown Nav --> 
                            <ul>
                                <li>
                                    <a href="index-single.html">Parallax Title</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-2.html">Parallax Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-2.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-2.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-3.html">Fixed Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-3.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-3.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index-single-4.html">Video Background</a>
                                    <ul>
                                        <li><a href="<?php echo $ROOT; ?>index-single-4.html">One-Page</a></li>
                                        <li><a href="<?php echo $ROOT; ?>index-4.html">Multi-Page</a></li>
                                    </ul>
                                </li>
                            </ul>                            
                            <?php } ?>
                        </li>
                        <li<?php if ($title == "About Us") { ?> class="active"<?php } ?>><a href="<?php echo $ROOT; ?>about.html">About</a></li>
                        <li<?php if ($title == "Services") { ?> class="active"<?php } ?>><a href="<?php echo $ROOT; ?>services.html">Services</a></li>
                        <li<?php if ($type == "portfolio")  { ?> class="active"<?php } ?>><a href="<?php echo $ROOT; ?>portfolio.html">Portfolio</a></li>
                        <li<?php if ($type == "blog"){ ?> class="active"<?php } ?>><a href="<?php echo $ROOT; ?>blog.html">Blog</a></li>
                        <li<?php if ($title == "Contact Us") { ?> class="active"<?php } ?>><a href="<?php echo $ROOT; ?>contact.html">Contact</a></li>
                    </ul>
                    <div class="icon-round-lrg-plain search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </nav>
            <?php } ?>
        </div>
    </div>
</header>