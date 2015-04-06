<footer class="app-footer">
    <div class="container footer-content">
        <div class="row">
            <div class="span-3 footer-col">
                <!-- Logo -->
                <div class="logo">
                    <!-- image logo -->
                    <a href="<?php echo $ROOT; ?>index-single.html" class="image-logo">
                        <img src="<?php echo $ROOT; ?>assets/images/logo.png" alt="One Nexus" />
                    </a>
                    <?php if ($demo == "true") { ?>
                    <!-- HTML logo -->
                    <a href="<?php echo $ROOT; ?>index-single.html" class="html-logo"><i class="fa fa-square-o"></i> [Nexus]</a>
                    <?php } ?>
                </div>                       
                <p>Start your new project with a fresh approach. Nexus is truly cutting edge in terms of design and performance.</p>
                <ul>
                    <li><b><i class="fa fa-globe"></i> Location:</b> Manhattan, New York City</li>
                    <li><b><i class="fa fa-phone-square"></i> Phone:</b> (212) 123 4567</li>
                    <li><b><i class="fa fa-envelope"></i> Email:</b> <a href="mailto:support@themeforest.net">support@themeforest.net</a></li>
                </ul>
            </div>
            <div class="span-3 footer-col">
                <h3>Newsletter</h3>
                <h4>Sign up to our mailing list</h4>
                <p>Suspendisse tempus sodales neque, eget eleifend turpis tristique eu.</p>
                <form class="newsletter h5-valid">
                    <div class="form-element">
                        <input type="email" class="box" required="" placeholder="Enter your email address" />
                        <label>Email Address</label>
                        <button type="submit">
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
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
                                <img width="50" height="50" src="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" alt="">
                            </a>
                            <div class="tweet-time"><a href="#">23 Sep</a></div>
                        </div>
                        <div class="twitter-text">
                            <div class="tweetprofilelink">
                                <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                            </div>
                            <p>Suspendisse tempus neque, eget eleifend turpis tristique eu.</p>
                        </div>
                    </div>
                    <div class="twitter-article">
                        <div class="twitter-pic">
                            <a href="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" class="modal-image">
                                <img width="50" height="50" src="<?php echo $ROOT; ?>assets/images/twitter-pic.jpg" alt="">
                            </a>
                            <div class="tweet-time"><a href="#">23 Sep</a></div>
                        </div>
                        <div class="twitter-text">
                            <div class="tweetprofilelink">
                                <strong><a href="#">Theme Forest</a></strong> <a href="#">@themeforest</a>
                            </div>
                            <p>Suspendisse tempus neque, eget eleifend turpis tristique eu.</p>
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
                            <a href="<?php if ($type == "one-page"){ ?>#s-welcome<?php } else { echo $ROOT; ?>about.html<?php } ?>">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-services<?php } else { echo $ROOT; ?>services.html<?php } ?>">
                                Services
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-latest-works<?php } else { echo $ROOT; ?>portfolio.html<?php } ?>">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-latest-posts<?php } else { echo $ROOT; ?>blog.html<?php } ?>">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="<?php if ($type == "one-page"){ ?>#s-contact<?php } else { echo $ROOT; ?>contact.html<?php } ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>