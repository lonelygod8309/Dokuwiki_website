<?php
/**
 * Template part for site-branding
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Euphony
 */

?>

<div class="site-branding">
	<?php has_custom_logo() ? the_custom_logo() : ''; ?>

	<div class="site-identity">
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( wl() ); ?>" rel="home"><?php echo $conf['title']; ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( wl() ); ?>" rel="home"><?php echo $conf['title']; ?></a></p>
		<?php
		endif;

		$description = echo $conf['tagline'];
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php
		endif; ?>
	</div><!-- .site-branding-text-->
</div><!-- .site-branding -->
