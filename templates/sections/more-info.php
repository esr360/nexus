<section class="section secondary more-info" id="s-more-info">
    <div class="container">
        <div class="row">
            <div class="span-6 info-video">
                <div class="auto-resizable-iframe">
                    <div>
                        <iframe allowfullscreen="" src="http://www.youtube.com/embed/<?php if ($live == true) { ?>Q3oItpVa9fs<?php } else { ?>YOURID<?php } ?>"></iframe>
                    </div>
                </div>
            </div>
            <div class="span-6 more-info-meta">
                <div class="section-title">
                    <h2>More Info</h2>
                    <h3><i>Learn More About Us</i></h3>
                </div>
                <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing</b> elit. Vestibulum euismod nisi tincidunt mollis sagittis. Sed rutrum quam non tortor ornare.</p>             
                <ul class="bullet-list min-bp2">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                    <li>Cras facilisis odio urna, quis molestie enim vulputate id</li>
                    <li>Cras dictum erat id tortor ornare, vel facilisis dolor vehicula</li>
                </ul>
                <p class="button-set">
                    <a href="<?php if ($type == "one-page") { ?>#s-contact<?php } else { echo $ROOT; ?>contact.html<?php } ?>" 
                        class="button round brand-1">Get in Touch</a>
                    <span class="text-div">-</span>
                    <a href="<?php if ($type == "one-page") { ?>#s-services<?php } else { echo $ROOT; ?>about.html<?php } ?>">Read More</a>
                </p>
            </div>
        </div>
    </div>
</section>