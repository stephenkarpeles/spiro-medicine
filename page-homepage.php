<?php 
/* Template Name: Homepage */ 
get_header(); 
?>

<?php      
  $interstitial = get_field('interstitial');  
  if( $interstitial ): ?>

    <section class="featured-block has-overlay-dark" style="background-image: url('<?php echo $interstitial['background_image']['url']; ?>');">
      <div class="container">
        <div class="featured-block__content">
          <div class="featured-block__image">
            <img src="<?php echo $interstitial['icon_image']['url']; ?>" alt="<?php echo $interstitial['icon_image']['alt']; ?>">
          </div>
          <div class="featured-block__heading">
            <h4><?php echo $interstitial['heading']; ?></h4>
          </div>
          <div class="featured-block__text">
            <?php echo $interstitial['copy']; ?>
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>

<?php      
  $hero = get_field('hero');  
  if( $hero ): ?>

    <section class="hero hero--home">
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

<section class="hero hero--home-learn-more">
  <div class="container">
    <div class="hero__content">
      <h3>Learn More <span>About Us</span></h3>
      <p>Our goal is to help our clients, their partners, family, and third parties be their most resilient during the process of building a family or making the decision to proceed in another</p>
      <a href="" class="btn btn--primary btn--medium">
        Learn More
      </a>
    </div>
  </div>
</section>

<section class="section-alt-bg section-extra-padding">
  <div class="container">
    <div class="grid-row">
      <div class="col col-1-2">

        <div class="testimonial-block">
          <div class="testimonial-block__content">
            <div class="testimonial-block__heading">
              <h3>
                Testimonials
              </h3>
            </div>
            <div class="testimonial-block__quote">
              <p>"Even after our first session, I already felt as though the Spiro team truly cared for me as if I was a friend of theirs."</p>
            </div>
            <div class="testimonial-block__author">
              <p>
                - Anonymous Client
              </p>
            </div>  
          </div>      
        </div>
      </div>

      <div class="col col-1-2 col-vert-centered">
        <div class="link-box">
          <div class="link-box__heading">
            <h3>Learn About <span class="text-green">The Team</span></h3>
          </div>
          <div class="link-box__text">
            <p>This is a statement that describes the team. They have this many years of experience and they also do this.</p>
          </div>
          <div class="link-box__cta">
            <a href="" class="btn btn--secondary btn--medium">
              Meet The Team
            </a>
          </div>
        </div>
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