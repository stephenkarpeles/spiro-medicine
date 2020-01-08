<?php 
/* Template Name: Homepage */ 
get_header(); 
?>

<section class="hero hero--home">
  <div class="container">
    <div class="hero__content">
      <h1>
        <span>Welcome to</span> Spiro
      </h1>
      <p>
        We offer compassionate, hyperaccessible, evidence-based psychotherapy, specializing in reproductive health.
      </p>
      <a href="" class="btn btn--primary btn--medium">
        Contact Us to Learn More
      </a>
    </div>
    
  </div>
</section>

<section class="home-services-grid">
  <div class="container">

    <div class="section-heading-wrap">
      <h2><span>Our</span> Services</h2>
    </div>

    <div class="grid-row">

      <div class="col col-1-4">

        <div class="featured-box">
          <div class="featured-box__icon">
            <i class="fas fa-briefcase-medical"></i>
          </div>
          <h4 class="featured-box__heading">Heading</h3>
          <p class="featured-box__blurb">Management and care of a patient to combat disease and disorder.</p>
          <a href="" class="featured-box__cta btn btn--primary btn--small">
            Learn More
          </a>
        </div>

      </div>

      <div class="col col-1-4">

        <div class="featured-box">
          <div class="featured-box__icon">
            <i class="fas fa-briefcase-medical"></i>
          </div>
          <h4 class="featured-box__heading">Heading</h3>
          <p class="featured-box__blurb">Management and care of a patient to combat disease and disorder.</p>
          <a href="" class="featured-box__cta btn btn--primary btn--small">
            Learn More
          </a>
        </div>
        
      </div>
      <div class="col col-1-4">

        <div class="featured-box">
          <div class="featured-box__icon">
            <i class="fas fa-briefcase-medical"></i>
          </div>
          <h4 class="featured-box__heading">Heading</h3>
          <p class="featured-box__blurb">Management and care of a patient to combat disease and disorder.</p>
          <a href="" class="featured-box__cta btn btn--primary btn--small">
            Learn More
          </a>
        </div>
        
      </div>
      <div class="col col-1-4">

        <div class="featured-box">
          <div class="featured-box__icon">
            <i class="fas fa-briefcase-medical"></i>
          </div>
          <h4 class="featured-box__heading">Heading</h3>
          <p class="featured-box__blurb">Management and care of a patient to combat disease and disorder.</p>
          <a href="" class="featured-box__cta btn btn--primary btn--small">
            Learn More
          </a>
        </div>
        
      </div>
    </div>
  </div>
</section>

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

<section class="section-alt-bg">
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

<section class="section-extra-padding">
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
</section>

<?php include('inc/mailing-list-panel.php'); ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>