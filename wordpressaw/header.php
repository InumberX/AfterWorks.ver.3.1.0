<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressAW
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<?php wp_head(); ?>
</head>

<body id="<?php echo get_post_meta($post->ID, 'bodyId' ,true); ?>" <?php body_class(); ?>>
<div class="wrap-all">

<header id="HEADER_MENU">
<div class="inner">
<div class="h-logo-box">
<h1>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
<img src="<?php header_image(); ?>" alt="After Works.">
</a>
</h1>
</div><!-- /.h-logo-box -->
<div class="sp-menu-btn">
<span></span><span></span><span></span>
</div>
<div class="h-menu-nav-box">
<nav>
<div class="ttl-box">
<h3><span>MENU</span></h3>
</div>
<?php
wp_nav_menu( array(
'theme_location' => 'header-menu',
'menu_id'        => 'HEADER-MENU',
) );
?>
<a href="javascript:void(0);" class="sp-close-btn">閉じる</a>
</nav>
</div><!-- /.h-menu-nav-box -->
</div><!-- /.inner -->
</header>

<main class="main-wrap">
<article>
