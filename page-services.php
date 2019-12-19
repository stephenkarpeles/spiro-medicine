<?php 
/* Template Name: Services Page */ 
get_header(); 
?>

<section class="hero hero--services">
  <div class="container">
    <div class="hero__content">
      <h1>
        Our <span>Services</span>
      </h1>
      <div class="breadcrumbs">
        <?php get_breadcrumb(); ?>
      </div>
    </div>    
  </div>
</section>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>