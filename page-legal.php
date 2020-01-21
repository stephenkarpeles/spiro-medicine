<?php 
/* Template Name: Legal Page */ 
get_header(); 
?>

<section class="page-legal">
  <div class="container">
    <h1><?php the_title(); ?></h1>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
      endwhile; else: ?>
        <p></p>
    <?php endif; ?>   

  </div>
</section>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>