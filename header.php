<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?> > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/base.css">
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/skeleton.css">
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/layout.css">
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/owl.carousel.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/css/owl.theme.css">       
    <link rel="stylesheet" href="<?php echo THEMEROOT?>/style.css" media="all">
    <!--[if lt IE 9]>
        <script src="<?php echo THEMEROOT?>/js/html5.js"></script>
        <![endif]-->
    <script src="<?php echo THEMEROOT?>/js/jquery.min.js"></script>
    <script src="<?php echo THEMEROOT?>/js/modernizr.js"></script>
    <script src="<?php echo THEMEROOT?>/js/SmoothScroll.js"></script>
    <script src="<?php echo THEMEROOT?>/js/jquery.gray.min.js"></script>
    <?php wp_head();?>
</head>
<body>
    <header>
        <div class="container">
            <div class="two columns">
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo IMAGES?>/logo.png"></a></div>
            </div>
            <div class="fourteen columns ">
                <div class="offset-by-nine five columns">
                    <nav class="top_nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Industry News</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </nav>
                </div>
                <hr/>
                <div class="offset-by-eight six columns">
                    <nav class="main_nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    