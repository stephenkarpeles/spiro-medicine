<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spiro-medicine
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer">

    <div class="container">
      <div class="footer-col-wrap">
        <div class="footer-col footer-col--left">
          <div class="footer__logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-white.svg ?>" alt="Spiro Medicine Logo">
          </div>
        </div>
        <div class="footer-col footer-col--right">
          <nav class="footer__nav">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            ) );
            ?>
          </nav>

          <nav class="footer__social-nav">
            <ul>
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-instagram"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div> 
    </div><!-- .container -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
