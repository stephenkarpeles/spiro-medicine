<?php 
/* Template Name: Homepage */ 
get_header(); 
?>


<?php      
  $hero = get_field('hero');  
  if( $hero ): ?>

    <section class="hero hero--home" style="background-image: url('<?php echo $hero['background_image']['url']; ?>');">
      <div class="container">
        <div class="hero__content">
          <h1>
            <span><?php echo $hero['heading_small_text']; ?></span> <?php echo $hero['heading_large_text']; ?>
          </h1>
          <p>
            <?php echo $hero['blurb']; ?>
          </p>
          <a href="#contact-form-panel" class="scroll btn btn--primary btn--medium">
            <?php echo $hero['button_text']; ?>
          </a>
        </div>
        
      </div>
    </section>

<?php endif; ?>


<?php      
  $services = get_field('services');  
  if( $services ): ?>

    <section class="home-services-grid">
      <div class="container">

        <div class="section-heading-wrap">
          <h2><span><?php echo $services['heading_text_colored']; ?></span> <?php echo $services['heading_text_black']; ?></h2>
        </div>

        <div class="grid-row">

          <div class="col col-1-4">

            <div class="featured-box">
              <div class="featured-box__icon">
                <i class="<?php echo $services['column_1_icon']; ?>"></i>
              </div>
              <h4 class="featured-box__heading"><?php echo $services['column_1_heading']; ?></h4>
              <p class="featured-box__blurb"><?php echo $services['column_1_blurb']; ?></p>
              <a href="" class="featured-box__cta btn btn--primary btn--small">
                <?php echo $services['column_1_button_text']; ?>
              </a>
            </div>

          </div>

          <div class="col col-1-4">

            <div class="featured-box">
              <div class="featured-box__icon">
                <i class="<?php echo $services['column_2_icon']; ?>"></i>
              </div>
              <h4 class="featured-box__heading"><?php echo $services['column_2_heading']; ?></h4>
              <p class="featured-box__blurb"><?php echo $services['column_2_blurb']; ?></p>
              <a href="" class="featured-box__cta btn btn--primary btn--small">
                <?php echo $services['column_2_button_text']; ?>
              </a>
            </div>
            
          </div>
          <div class="col col-1-4">

            <div class="featured-box">
              <div class="featured-box__icon">
                <i class="<?php echo $services['column_3_icon']; ?>"></i>
              </div>
              <h4 class="featured-box__heading"><?php echo $services['column_3_heading']; ?></h4>
              <p class="featured-box__blurb"><?php echo $services['column_3_blurb']; ?></p>
              <a href="" class="featured-box__cta btn btn--primary btn--small">
                <?php echo $services['column_3_button_text']; ?>
              </a>
            </div>
            
          </div>
          <div class="col col-1-4">

            <div class="featured-box">
              <div class="featured-box__icon">
                <i class="<?php echo $services['column_4_icon']; ?>"></i>
              </div>
              <h4 class="featured-box__heading"><?php echo $services['column_4_heading']; ?></h4>
              <p class="featured-box__blurb"><?php echo $services['column_4_blurb']; ?></p>
              <a href="" class="featured-box__cta btn btn--primary btn--small">
                <?php echo $services['column_4_button_text']; ?>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>


<?php      
  $learn = get_field('learn_more');  
  if( $learn ): ?>

    <section class="hero hero--home-learn-more" style="background-image: url('<?php echo $learn['background_image']['url']; ?>');">
      <div class="container">
        <div class="hero__content">
          <h3><?php echo $learn['heading_text_colored']; ?> <span><?php echo $learn['heading_text_black']; ?></span></h3>
          <p><?php echo $learn['blurb']; ?></p>
          <a href="<?php echo $learn['button_link']; ?>" class="btn btn--primary btn--medium">
            <?php echo $learn['button_text']; ?>
          </a>
        </div>
      </div>
    </section>

<?php endif; ?>


<section class="section-alt-bg section-extra-padding">
  <div class="container">
    <div class="grid-row">
      <div class="col col-1-2">

        <?php      
          $testimonial = get_field('testimonial');  
          if( $testimonial ): ?>

            <div class="testimonial-block" style="background-image: url('<?php echo $testimonial['background_image']['url']; ?>');">
              <div class="testimonial-block__content">
                <div class="testimonial-block__heading">
                  <h3>
                    <?php echo $testimonial['heading']; ?>
                  </h3>
                </div>
                <div class="testimonial-block__quote">
                  <p><?php echo $testimonial['quote']; ?></p>
                </div>
                <div class="testimonial-block__author">
                  <p>
                    <?php echo $testimonial['author']; ?>
                  </p>
                </div>  
              </div>      
            </div>

        <?php endif; ?>

      </div>

      <div class="col col-1-2 col-vert-centered">

        <?php      
          $team = get_field('team');  
          if( $team ): ?>

            <div class="link-box">
              <div class="link-box__heading">
                <h3><?php echo $team['heading_text_black']; ?> <span class="text-green"><?php echo $team['heading_text_colored']; ?></span></h3>
              </div>
              <div class="link-box__text">
                <p><?php echo $team['blurb']; ?></p>
              </div>
              <div class="link-box__cta">
                <a href="<?php echo $team['button_link']; ?>" class="btn btn--secondary btn--medium">
                  <?php echo $team['button_text']; ?>
                </a>
              </div>
            </div>

        <?php endif; ?>

      </div>
    </div>
  </div>  
</section>


<!-- <section class="section-extra-padding">
  <div class="container">
    <div class="grid-row mar-bot-30">
      <div class="col col-full-width text-center">
        <h2>Read Our <span class="text-green">Content</span></h2>
      </div>
    </div>

    <div class="grid-row">
      <div class="col col-2-5">

        <div class="post-block post-block--no-img">
          <div class="post-block__content">
            <h3 class="post-block__title">
              10 Steps to Take to Feel Better
            </h3>
            <p class="post-block__excerpt">
              This is a statement that describes the team. They have this many years of experience and they also do this…
            </p>
            <div class="post-block__cta">
              <a href="" class="btn btn--secondary btn--medium">
                Read More
              </a>
            </div>
          </div>
        </div>

      </div>
      <div class="col col-3-5">
        <div class="post-block post-block-wide">
          <div class="post-block-wide__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trees-thumb.png ?>" alt="Post Block Image">
          </div>
          <div class="post-block-wide__content">
            <h4 class="post-block__title">
              10 Steps to Take to Feel Better
            </h4>
            <p class="post-block__excerpt">
              This is a statement that describes the team. They have experience and they also do this…
            </p>
            <div class="post-block__cta">
              <a href="" class="btn btn--secondary btn--small">
                Read More
              </a>
            </div>
          </div>
        </div>

        <div class="post-block post-block-wide">
          <div class="post-block-wide__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/trees-thumb.png ?>" alt="Post Block Image">
          </div>
          <div class="post-block-wide__content">
            <h4 class="post-block__title">
              10 Steps to Take to Feel Better
            </h4>
            <p class="post-block__excerpt">
              This is a statement that describes the team. They have experience and they also do this…
            </p>
            <div class="post-block__cta">
              <a href="" class="btn btn--secondary btn--small">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php include('inc/mailing-list-panel.php'); ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>