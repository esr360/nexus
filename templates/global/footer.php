<footer class="app-footer">
    <div class="container footer-content">
        <div class="row">
            <div class="span-3 footer-col">
                <!-- Logo -->
                <div class="logo">
                    <!-- image logo -->
                    <a href="index-single.html" class="image-logo">
                        <img src="<?php echo $ROOT; ?>assets/images/logo.png" alt="One Nexus" />
                    </a>
                    <!-- HTML logo -->
                    <a href="index-single.html" class="html-logo"><i class="fa fa-square-o"></i> [Nexus]</a>
                </div>                       
                <p>Start your new project with a fresh approach. Nexus is truly cutting edge in terms of design and performance.</p>
                <ul>
                    <li><b><i class="fa fa-globe"></i> Location:</b> Manhattan, New York City</li>
                    <li><b><i class="fa fa-phone-square"></i> Phone:</b> (212) 123 4567</li>
                    <li><b><i class="fa fa-envelope"></i> Email:</b> <a href="mailto:support@themeforest.net">support@themeforest.net</a></li>
                </ul>
            </div>
            <div class="span-3 footer-col">
                <h3>Stay in Touch</h3>
                <h4>We are on many social sites</h4>
                <p>Find us on many other websites to keep up to date with our latest designs, projects and find out what we're up to.</p>
                <div class="social-icons">
                    <a href="#" class="icon tooltip" data-tip="Dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a href="#" class="icon tooltip" data-tip="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="icon tooltip" data-tip="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="icon tooltip" data-tip="LinkedIn">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="icon tooltip" data-tip="DeviantArt">
                        <i class="fa fa-deviantart"></i>
                    </a>
                    <a href="#" class="icon tooltip" data-tip="Behance">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>
            <div class="span-3 footer-col">
                <h3><i class="fa fa-twitter"></i> Twitter Feed</h3>
                <h4>View our latest tweets</h4>
                <div id="twitter-feed">
                    <div class="twitter-article">
                        <div class="twitter-pic">
                            <a href="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" class="modal-image">
                                <img width="42" height="42" src="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" alt="">
                            </a>
                        </div>
                        <div class="twitter-text">
                            <p>
                                <span class="tweetprofilelink">
                                    <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                                </span>
                                <span class="tweet-time"><a href="#">23 Sep</a></span><br>
                                Suspendisse tempus neque, eget eleifend turpis tristique eu.
                            </p>
                        </div>
                    </div>
                    <div class="twitter-article">
                        <div class="twitter-pic">
                            <a href="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" class="modal-image">
                                <img width="42" height="42" src="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" alt="">
                            </a>
                        </div>
                        <div class="twitter-text">
                            <p>
                                <span class="tweetprofilelink">
                                    <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                                </span>
                                <span class="tweet-time"><a href="#">10 Oct</a></span><br>
                                Suspendisse tempus neque, eget eleifend turpis tristique eu.
                            </p>
                        </div>
                    </div>
                </div>                        
            </div>
            <div class="span-3 footer-col">
                <h3>Testimonials</h3>
                <h4>See what our clients say</h4>
                <div class="owl-carousel footer-testimonials">
                    <div class="testimonial">
                        <blockquote>
                                <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                        </blockquote>
                        <div class="cf">
                            <span class="profile">
                                <a href="<?php echo $ROOT; ?>assets/images/stock12.jpg" class="modal-image thumb"> 
                                    <img src="<?php echo $ROOT; ?>assets/images/stock12.jpg" alt="" />
                                </a>
                            </span>
                            <cite>
                                <strong>Sam Tho</strong>
                                <i>Theme Forest</i>
                            </cite>
                        </div>
                    </div>
                    <div class="testimonial">
                        <blockquote>
                                <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                        </blockquote>
                        <div class="cf">
                            <span class="profile">
                                <a href="<?php echo $ROOT; ?>assets/images/stock8.jpg" class="modal-image thumb"> 
                                    <img src="<?php echo $ROOT; ?>assets/images/stock8.jpg" alt="" />
                                </a>
                            </span>
                            <cite>
                                <strong>John Doe</strong>
                                <i>Theme Forest</i>
                            </cite>
                        </div>
                    </div>
                    <div class="testimonial">
                        <blockquote>
                                <p>Aenean lobortis ante nunc. Integer justo ex. Curabitur at enim ac nisi...</p>
                        </blockquote>
                        <div class="cf">
                            <span class="profile">
                                <a href="<?php echo $ROOT; ?>assets/images/stock15.jpg" class="modal-image thumb"> 
                                    <img src="<?php echo $ROOT; ?>assets/images/stock15.jpg" alt="" />
                                </a>
                            </span>
                            <cite>
                                <strong>Jane Dough</strong>
                                <i>Theme Forest</i>
                            </cite>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-bar">
        <div class="container">
            <div class="footer-wrapper">
                <!-- Copyright Section -->
                <div class="copyright" id="copyright">
                    © Your Website 2015
                </div>
                <!-- Footer Navigation -->
                <nav class="footer-nav">                
                    <ul>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-welcome<?php } else { ?>about.html<?php } ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-services<?php } else { ?>services.html<?php } ?>">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-latest-works<?php } else { ?>portfolio.html<?php } ?>">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-latest-posts<?php } else { ?>blog.html<?php } ?>">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-contact<?php } else { ?>contact.html<?php } ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>