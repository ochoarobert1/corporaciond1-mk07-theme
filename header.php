<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <?php /* MAIN STUFF */ ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>" />
    <meta name="robots" content="NOODP, INDEX, FOLLOW" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="dns-prefetch" href="//connect.facebook.net" />
    <link rel="dns-prefetch" href="//facebook.com" />
    <link rel="dns-prefetch" href="//googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//google-analytics.com" />
    <?php /* FAVICONS */ ?>
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
    <?php /* THEME NAVBAR COLOR */ ?>
    <meta name="msapplication-TileColor" content="#CBCBCB" />
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png" />
    <meta name="theme-color" content="#CBCBCB" />
    <?php /* AUTHOR INFORMATION */ ?>
    <meta name="language" content="<?php echo get_bloginfo('language'); ?>" />
    <meta name="author" content="Corporación D1" />
    <meta name="copyright" content="http://corporaciond1.com/" />
    <meta name="geo.position" content="10.4992589,-66.8286118" />
    <meta name="ICBM" content="10.4992589,-66.8286118" />
    <meta name="geo.region" content="VE" />
    <meta name="geo.placename" content="Avenida Arístides Calvani Torre D1 Los Chorros Caracas 1071 - Venezuela" />
    <meta name="DC.title" content="<?php if (is_home()) { echo get_bloginfo('name') . ' | ' . get_bloginfo('description'); } else { echo get_the_title() . ' | ' . get_bloginfo('name'); } ?>" />
    <?php /* MAIN TITLE - CALL HEADER MAIN FUNCTIONS */ ?>
    <?php wp_title('|', false, 'right'); ?>
    <?php wp_head() ?>
    <?php /* OPEN GRAPHS INFO - COMMENTS SCRIPTS */ ?>
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php /* IE COMPATIBILITIES */ ?>
    <!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7" /><![endif]-->
    <!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8" /><![endif]-->
    <!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9" /><![endif]-->
    <!--[if gt IE 8]><!-->
    <html <?php language_attributes(); ?> class="no-js" />
    <!--<![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script> <![endif]-->
    <!--[if IE]> <script type="text/javascript" src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script> <![endif]-->
    <!--[if IE]> <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /> <![endif]-->
    <?php get_template_part('includes/fb-script'); ?>
    <?php get_template_part('includes/ga-script'); ?>
</head>

<body class="the-main-body <?php echo join(' ', get_body_class()); ?>" itemscope itemtype="http://schema.org/WebPage">
    <div id="fb-root"></div>
    <div class="menu-opener">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menu-container menu-container-hidden">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?>" class="img-fluid img-menu-logo" />
        <?php /* MENU CONTAINER */?>
        <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'items_wrap' => '<ul class="nav">%3$s</ul>') ); ?>
        
    </div>
    <?php if (is_front_page()) { ?>
    <div class="brochure-link-container">
        <a href="http://corporaciond1.com/wp-content/uploads/2017/05/opt-d1_brochure.pdf" class="btn btn-md btn-brochure"><?php _e('brochure', 'corporaciond1'); ?> <i class="fa fa-download"></i></a>
    </div>
    <?php } ?>
