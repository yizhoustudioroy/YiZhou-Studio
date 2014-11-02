<!doctype html>
<html class="no-js">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php bloginfo('site_name'); ?></title>
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/bower_components/bootstrap/dist/css/bootstrap.css" />
        <!-- endbower -->
        <!-- endbuild -->
        <!-- build:css(.tmp) styles/main.css -->
        <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/styles/main.css">
        <!-- endbuild -->
        <!-- build:js(.) scripts/oldieshim.js -->
        <!--[if lt IE 9]>
        <script src="<?=get_stylesheet_directory_uri()?>/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <script src="<?=get_stylesheet_directory_uri()?>/bower_components/respond/dest/respond.min.js"></script>
        <![endif]-->
        <!-- endbuild -->
        <?php wp_head(); ?>
    </head>
    <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
    <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
    <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

        <div class="container home">
            <header>
                <div class="logo">
                    <a href="<?=site_url()?>" title="Home">
                        <img class="hidden-xs" src="<?=get_stylesheet_directory_uri()?>/images/logo/logo-pc.png" alt="The Marker" width="72" height="82">
                        <img class="visible-xs" src="<?=get_stylesheet_directory_uri()?>/images/logo/logo-mobile.png" alt="The Marker" width="" height="">
                        <span class="hidden-xs">Home</span>
                    </a>
                </div>

                <div class="site-search">
                    <form action="<?=site_url()?>" class="form-inline">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control site-search-input" type="search" name="s" placeholder="Search Keyword...">
                                <span class="input-group-btn">
                                    <input class="btn site-search-btn" type="submit" class="btn" value="SEARCH">
                                </span>
                            </div>
                        </div>
                    </form>
                    <a href="#" class="site-search-toggle visible-xs">Search</a>
                </div>

                <div class="social-share">
                    <ul>
                        <li><a href="" class="icon-weibo"></a></li>
                        <li><a href="" class="icon-tencentwb"></a></li>
                        <li><a href="" class="icon-tudou"></a></li>
                        <li><a href="" class="icon-youtube"></a></li>
                    </ul>
                </div>
            </header>

            <div id="body">
                <!-- Start Main Content -->
                <?php if(!is_home()){ ?>
                <nav class="primary-nav">
                    <?php wp_nav_menu(array('theme_location'=>'main-nav', 'container'=>false, 'menu_class'=>'breadcrumb hidden-xs')); ?>

                    <div class="navbar navbar-fixed-bottom visible-xs">
                        <div class="navbar-left">
                            <a href="#" class="nav-back">
                                <span class="icon-back" href="#">Back</span>
                            </a>
                        </div>
                        <div class="navbar-toggle dropdown">
                            <a class="nav-menu" href="#" data-toggle="dropdown">
                                <span class="icon-menu"></span>
                            </a>
                            <?php wp_nav_menu(array('theme_location'=>'main-nav', 'container'=>false, 'menu_class'=>'dropdown-menu pull-right')); ?>
                        </div>
                    </div>
                </nav>
                <?php } ?>
                
