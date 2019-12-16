<?php
/**
 * Template Name: Landing / Signup Page
 *
 * @package WordPress
 * @subpackage DR_PATTERSON
 * @since DR_PATTERSON 1.0
 */

get_header('alt'); ?>

<section class="landing">
	<div class="landing__container">
		<div class="landing__logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-reversed.svg" alt="<?php bloginfo( 'name' ); ?>">
		</div>
		<h1 class="landing__heading">Welcome to Spiro.</h1>
		<h2 class="landing__subheading">We offer compassionate, hyperaccessible, evidence-based psychotherapy, specializing in reproductive health.</h2>
		<p class="landing__blurb">Sign up to learn more about us and how we can support you on your journey.</p>
		<div class="landing__form-wrap">
			
			<?php echo do_shortcode('[contact-form-7 id="1192" title="Landing Sign-up Form"]'); ?>
		</div>
		<p class="landing__subtext">
			&copy; <?php echo date('Y'); ?> Spiro, LLC. Beta Version 1.0
		</p>
	</div>
</section>

<?php get_footer('alt'); ?>