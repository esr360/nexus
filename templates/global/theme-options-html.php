<?php if ($demo == true) { ?>
<div class="theme-options">
    <i class="fa fa-cog options-trigger hover-bg-brand-1 brand-1-active"></i>
    <div class="options-content">
        <h3>Theme Options</h3>
        <div class="row bp0 page-type">
            <div class="span-6">
                <a href="<?php echo $ROOT; ?>index-single.html" class="button brand-1-active round full-width<?php if ($type == "one-page") { ?> active<?php } ?>">
                	One Page
                </a>
            </div>
            <div class="span-6">
                <a href="<?php echo $ROOT; ?>index.html" class="button round brand-1-active full-width<?php if ($type != "one-page") { ?> active<?php } ?>">
                	Multi-Page
                </a>
            </div>
        </div>
        <section class="theme-option">
            <h4>Fixed Header</h4>
            <p>Toggle to enable the fixed header.</p>
            <div class="input-toggle">
                <input type="checkbox" id="fixed-header-toggle" name="fixed-header-toggle" />
                <label for="fixed-header-toggle"></label>
            </div>
        </section>
        <section class="theme-option">
            <h4>HTML Logo</h4>
            <p>Toggle to enable HTML logo instead of image.</p>
            <div class="input-toggle">
                <input type="checkbox" id="html-logo" name="html-logo" checked />
                <label for="html-logo"></label>
            </div>
        </section>
        <section class="theme-option">
            <h4 class="hidden">Theme Colors</h4>
            <div class="theme-colors">
                <a href="<?php echo $ROOT; ?>assets/styles/css/app.css" class="theme-color"></a>
                <a href="<?php echo $ROOT; ?>assets/styles/css/app-green.css" class="theme-color"></a>
                <a href="<?php echo $ROOT; ?>assets/styles/css/app-pink.css" class="theme-color"></a>
                <a href="<?php echo $ROOT; ?>assets/styles/css/app-red.css" class="theme-color"></a>
                <a href="<?php echo $ROOT; ?>assets/styles/css/app-grey.css" class="theme-color"></a>
            </div>
        </section>
    </div>
</div>
<?php } ?>