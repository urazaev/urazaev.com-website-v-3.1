<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Urazaev_Production
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/manifest.json">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/safari-pinned-tab.svg">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

</head>

<body <?php body_class(); ?>>

<header class="header">
        <div class="header__container container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">навигация</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="header__logo navbar-brand" href="/">
                        <img class="header__logo-item" src="<?php echo get_template_directory_uri(); ?>/img/logo-normal-white.png" alt="Urazaev Production">
                    </a>
                </div>                
                    <?php /* Primary navigation */
                    wp_nav_menu( array(
                    'menu' => 'primary',
                    'depth' => 2,
                    'container_class' => 'navbar-collapse navbar-right collapse',
                    'container_id' => 'navbar',
                    'menu_class' => 'nav navbar-nav',
                      //Process nav menu using our custom nav walker
                    'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
            </nav>
            <!--navbar-->
        </div>
        <!-- container-->
    </header>
