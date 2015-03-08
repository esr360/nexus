<section class="section primary contact inactive" id="s-contact">
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
        <div class="row">
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="desktop" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
                        <div class="title">
                            <h4>Web Design</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="tablet" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
                        <div class="title">
                            <h4>Mobile App Design</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
                </div>
            </div>
            <div class="span-4 widget">
                <div class="widget-content">
                    <header>
                        <i class="livicon" data-n="image" data-op="1" data-c="#C1C1C1" data-s="55" data-hc="false"></i>
                        <div class="title">
                            <h4>Graphic Design</h4>
                            <h5>Donec finibus fringilla purus</h5>
                        </div>
                    </header>
                    <p>Cum socis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec finibus fringilla purus. Integer libero justo, mattis et magna eget.</p>
                </div>
            </div>
        </div>
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