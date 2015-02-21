<nav class="breadcrumb">
    <div class="container">
        <ul>
            <li class="home"><a href="index.html"><i class="fa fa-home"></i></a></li>
            <li><a href="index.html">Nexus</a></li>
            <?php if (strlen($parentTitle) !== 0) { ?>
            	<li><a href="<?php echo $parentUrl; ?>"><?php echo $parentTitle; ?></a></li>
            <?php } ?>
            <li class="current"><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
        </ul>
    </div>
</nav>