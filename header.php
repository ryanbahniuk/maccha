<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8" />

    <?php //put this in htaccess file to keep html5 validation ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title><?php (is_home()) ? bloginfo('name') : wp_title(''); ?></title>        
    <meta name="description" content="<?php bloginfo('description'); ?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-precomposed.png" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.png" />
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico"><![endif]-->
    <!-- or, set /favicon.ico for IE10 win -->
    <meta name="msapplication-TileColor" content="#D83434" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/icons/tile-icon.png" />
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
</head>

<body <?php body_class(); ?> >
    
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand brand-text" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><?php bloginfo('name'); ?></a>
                </div>

                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <?php main_menu(); ?>
                </div>
            </div>
        </nav>
    </header>