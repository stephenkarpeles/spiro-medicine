<?php 
/* Template Name: Services Page */ 
get_header(); 
?>

<?php      
  $hero = get_field('hero');  
  if( $hero ): ?>

    <section class="hero hero--services" style="background-image: url('<?php echo $hero['background_image']['url']; ?>');">
      <div class="container">
        <div class="hero__content">
          <h1>
            <?php echo $hero['heading_text_black']; ?> <span><?php echo $hero['heading_text_colored']; ?></span>
          </h1>
          <div class="breadcrumbs">
            <?php get_breadcrumb(); ?>
          </div>
        </div>    
      </div>
    </section>

<?php endif; ?>


<?php      
  $intro = get_field('intro_block');  
  if( $intro ): ?>

    <section class="section-extra-padding">
      <div class="container">

        <div class="grid-row mar-bot-20">
          <div class="col col-full-width text-center">
            <h2><?php echo $intro['heading_text_black']; ?> <span class="text-green"><?php echo $intro['heading_text_colored']; ?></span></h2>
          </div>
        </div>

        <div class="grid-row">
          <div class="col col-full-width">
            <?php echo $intro['text_content']; ?>
            <div class="text-center mar-top-20">
              <a href="#contact-form-panel" class="scroll btn btn--secondary btn--large"><?php echo $intro['button_text']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>


<?php      
  $testimonial = get_field('testimonial');  
  if( $testimonial ): ?>

    <section class="testimonial-panel">
      <div class="container">
        <div class="testimonial-panel__content">
          <h3 class="testimonial-panel__heading"><?php echo $testimonial['heading']; ?></h3>
          <p class="testimonial-panel__quote"><?php echo $testimonial['quote']; ?></p>
          <p class="testimonial-panel__author">- <?php echo $testimonial['author']; ?></p>
        </div>
      </div>
    </section>

<?php endif; ?>


<?php      
  $support = get_field('support_block');  
  if( $support ): ?>

    <section class="section-extra-padding">
      <div class="container">
        <div class="grid-row mar-bot-20">
          <div class="col col-full-width text-center">
            <h2><?php echo $support['heading_text_black']; ?> <span class="text-green"><?php echo $support['heading_text_colored']; ?></span></h2>
          </div>
        </div>

        <div class="support-block-content">
          <div class="grid-row">
            <div class="col col-1-2">            
              <?php echo $support['text_column_1']; ?>
            </div>
            <div class="col col-1-2">
              <?php echo $support['text_column_2']; ?>
            </div>
          </div>
        </div>

      </div>
    </section>

<?php endif; ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>