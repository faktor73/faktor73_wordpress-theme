<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php faktor73_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
<?php wp_head(); ?>
<!-- A little bit of javascript -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		jQuery("#menuToggle").click(function(){
			jQuery("nav#responsive_menu").toggleClass("show-it");
		});
	});
</script>
</head>
<body <?php body_class(); ?>>
<div class="hamburg">
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<div id="search"><?php get_search_form(); ?></div>
</nav>

<nav id="responsive_menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
		<div class="menu_container">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
		</div>
	</nav>	
	
<div id="menuToggle">
	<label for="navigation" class="hide">Navigation</label><input id="navigation" name="navigation" type="checkbox" />
	<span></span>
	<span></span>
	<span></span>
	<ul id="just_an_ul"><li></li></ul>
	
</div>
	
</header>
<div id="container">
<main id="content" role="main">