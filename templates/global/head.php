<?php 

$live = true;
$demo = true;
$ROOT = '';
$purchase = 'http://themeforest.net/item/nexus-responsive-multipurpose-html5-template/10789597';
 
function stockReplace($src, $class, $link=true, $urlOnly=false) {
 
   global $live;
 
   if ($live==false) {
              $src="http://placehold.it/800x543";
    }
 
    if ($link==true) {
      ?>
             <a href="<?= $src ?>" class="<?= $class ?>">            
                    <img src="<?= $src ?>" alt="" />
             </a>
      <?php
    } else if ($urlOnly==true) {
      ?>
           <?= $src ?>
      <?php
    } else {
      ?>
           <img src="<?= $src ?>" alt="" />
      <?php
    }

}

?>          

<!DOCTYPE html>
<!--[if IE 8]>     <html class="no-js ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]>  <html class="no-js"> <![endif]-->
<!--[if !IE]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Nexus - A clean & Modern HTML Template</title>
    <meta name="description" content="Nexus is a modern & responsive HTML5 template.">
    <meta name="viewport" content="width=device-width, initial-scale=0.85">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <!-- Icons & favicons -->
    <link rel="apple-touch-icon" href="<?php echo $ROOT; ?>assets/images/apple-icon-touch.png">
    <link rel="icon" href="<?php echo $ROOT; ?>assets/images/favicon.png">
    <!--[if IE]>
        <link rel="shortcut icon" href="<?php echo $ROOT; ?>assets/images/favicon.ico">
    <![endif]-->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $ROOT; ?>assets/styles/css/app.css">
    <link rel="stylesheet" class="color-switcher" href="<?php echo $ROOT; ?>assets/styles/css/app.css">

    <?php if ($demo == true) { ?>
    <!-- Theme Options -->
    <link rel="stylesheet" href="<?php echo $ROOT; ?>assets/styles/css/theme-options.css">
    <?php } ?>
    
    <!-- Modernizr -->
    <script src="<?php echo $ROOT; ?>assets/js/modernizr.min.js"></script>
</head>