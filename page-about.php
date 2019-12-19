<?php 
/* Template Name: About Page */ 
get_header(); 
?>

<section class="hero hero--about">
  <div class="container">
    <div class="hero__content">
      <h1>
        About <span>Spiro</span>
      </h1>
      <div class="breadcrumbs">
        <?php get_breadcrumb(); ?>
      </div>
    </div>    
  </div>
</section>

<section></section>
<section></section>
<section></section>

<?php include('inc/mailing-list-panel.php'); ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>