<section class="section primary contact <?php if ($type == "one-page") { ?> class="inactive"<?php } ?>" id="s-contact">
    <div class="container">
        <?php if ($title != "Contact Us") { ?>
            <header class="sep active">
                <div class="section-title">
                    <h2>Get in <i>Touch</i></h2>
                    <h3>Contact Us For A Free Quote</h3>
                </div>
                <p>Suspendisse tempus sodales neque, eget eleifend <a href="#">turpis tristique</a> eu. Nullam a nisl maximus, ultrices est ut blandit nislr, elit in lobortis mattis.</p>
            </header>
        <?php } else if ($title == "Contact Us") { ?>
        <div class="row contact-widgets">
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="globe" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
                        <div class="title">
                            <h4>Our Address</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <p>
                        420 Greene St<br />
                        New York, NY 10000<br />
                        Phone number (212) 111-0022<br />
                    </p>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="phone" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
                        <div class="title">
                            <h4>Get in Touch</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <ul>
                        <li>Location: Manhattan, New York City</li>
                        <li>Phone: (212) 123 4567</li>
                        <li>Email: <a href="mailto:support@themeforest.net">support@themeforest.net</a></li>
                    </ul>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="clock" data-op="1" data-c="#C1C1C1" data-s="48" data-hc="false"></i>
                        <div class="title">
                            <h4>Opening Hours</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <ul>
                        <li>Monday - Friday: 09:00 - 17:00</li>
                        <li>Saturday-Sunday: 09:00 - 14:30</li>
                        <li>Holidays: Closed</li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="stripes" />
        <?php } ?>
        <form class="h5-valid">
            <fieldset>
                <div class="form-element">
                    <input type="text" class="box" required>
                    <label>First Name</label>
                </div>
                <div class="form-element">
                    <input type="text" class="box">
                    <label>Last Name</label>
                </div>
                <div class="form-element">
                    <input type="tel" class="box">
                    <label>Phone Number</label>
                </div>
                <div class="form-element">
                    <input type="email" class="box" required>
                    <label>Email Address</label>
                </div>
            </fieldset>
            <div class="form-element">
                <textarea class="box" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="button large full-width brand-1">Submit Message</button>
        </form>
    </div>
</section>