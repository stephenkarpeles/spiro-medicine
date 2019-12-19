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

<?php include('inc/mailing-list-panel.php'); ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>