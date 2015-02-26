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
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="#">404</a></li>
                                <li>
                                    <a href="#">Careers</a>
                                    <ul>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Coming Soon</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li> 
                        <li class="active">
                            <a href="#site-content">Home</a>
                            <ul>
                                <li><a href="#">Parallax Title</a></li>
                                <li><a href="#">Parallax Background</a></li>
                                <li><a href="#">Fixed Background</a></li>
                                <li><a href="#">Video Background</a></li>
                            </ul>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <div class="search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </nav>
            <?php } else { ?>
                <nav class="main-nav">
                    <ul>
                        <!-- Dropdown Nav -->
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li<?php if ($title == "404") { ?> class="active"<?php } ?>><a href="#">404</a></li>
                                <li<?php if ($title == "Careers") { ?> class="active"<?php } ?>>
                                    <a href="#">Careers</a>                                    
                                    <ul>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                        <li><a href="#">Lorem Ipsum</a></li>
                                    </ul>
                                </li>
                                <li<?php if ($title == "Coming Soon") { ?> class="active"<?php } ?>><a href="#">Coming Soon</a></li>
                                <li<?php if ($title == "FAQ") { ?> class="active"<?php } ?>><a href="#">FAQ</a></li>
                            </ul>
                        </li> 
                        <li<?php if ($title == "Index"){ ?> class="active"<?php } ?>>
                            <a href="index.html">Home</a>
                            <ul>
                                <li><a href="#">Parallax Title</a></li>
                                <li><a href="#">Parallax Background</a></li>
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
                    <div class="search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                </nav>
            <?php } ?>
        </div>
    </div>
</header>