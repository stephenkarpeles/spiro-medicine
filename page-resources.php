<?php 
/* Template Name: Resources Page */ 
get_header(); 
?>

<?php      
  $hero = get_field('hero');  
  if( $hero ): ?>

    <section class="hero hero--resources">
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
  $content = get_field('content_block');  
  if( $content ): ?>

    <section class="section-extra-padding">
      <div class="container">

        <?php if( have_rows('content_block') ): ?>
          <?php $i = 1; while( have_rows('content_block') ): the_row();

            // vars
            $colHeading1 = get_sub_field('column_1_heading');
            $colText1 = get_sub_field('column_1_text');
            $colHeading2 = get_sub_field('column_2_heading');
            $colText2 = get_sub_field('column_2_text');

            ?>        

            <div class="grid-row grid-row--underlined grid-row--underlined-<?php echo $i; ?>">

              <div class="col col-1-2">
                <h4 class="heading-alt heading-alt--a">
                  <?php echo $colHeading1; ?>
                </h4>
                <?php echo $colText1; ?>
              </div>

              <div class="col col-1-2">
                <h4 class="heading-alt heading-alt--b">
                  <?php echo $colHeading2; ?>
                </h4>
                <?php echo $colText2; ?>    
              </div>

            </div>

          <?php $i++; endwhile; ?>
        <?php endif; ?>

      </div>
    </section>

<?php endif; ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>