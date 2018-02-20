<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocaltda
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="content" class="container">
	<div class="col-xs-12 text-right whatsapp">
		<a href="https://api.whatsapp.com/send?phone=59176381123"><i class="fa fa-whatsapp fondo general" aria-hidden="true"></i> 76381123
		</a>
	</div>
	<div class="row">
		<header id="masthead" class="site-header fondo__general col-xs-12">
			<div class="site-branding col-xs-12 col-sm-4 col-md-4">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<div class="main-navigation col-xs-12 col-sm-8 col-md-8">
				<nav id="site-navigation" class="navbar">
					<div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="nav-btn--oca navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				    </div>
					<?php
						wp_nav_menu( array(
						    'theme_location'    => 'primary',
						    'depth'             => 2,
						    'container'         => 'div',
						    'container_class'   => 'collapse navbar-collapse',
						    'container_id'      => 'myNavbar',
						    'menu_class'        => 'nav navbar-nav navbar-right',
						    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						    'walker'            => new WP_Bootstrap_Navwalker(),
						) );
					?>
				</nav><!-- #site-navigation -->
				
			</div>
		</header><!-- #masthead -->
	</div>