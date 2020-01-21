<?php 
/* Template Name: About Page */ 
get_header(); 
?>

<?php      
  $hero = get_field('hero');  
  if( $hero ): ?>

    <section class="hero hero--about" style="background-image: url('<?php echo $hero['background_image']['url']; ?>');">
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
  $who = get_field('who_we_are');  
  if( $who ): ?>

    <section>
      <div class="container">

        <div class="grid-row mar-bot-30">
          <div class="col col-full-width text-center">
            <h2><?php echo $who['heading_text_black']; ?> <span class="text-green"><?php echo $who['heading_text_colored']; ?></span></h2>
          </div>
        </div>

        <div class="grid-row">
          <div class="col col-1-2">
            <?php echo $who['text_column_1']; ?>
          </div>
          <div class="col col-1-2">
            <?php echo $who['text_column_2']; ?>
        </div>
      </div>
    </section>

<?php endif; ?>


<?php      
  $team = get_field('our_team');  
  if( $team ): ?>

    <section class="section-alt-bg">
      <div class="container">

        <div class="grid-row mar-bot-30">
          <div class="col col-full-width text-center">
            <h2><?php echo $team['heading_text_black']; ?> <span class="text-green"><?php echo $team['heading_text_colored']; ?></span></h2>
          </div>
        </div>

        <div class="grid-row">
          <div class="col col-1-2">
            <h3 class="text-center mar-bot-10">
              <?php echo $team['team_member_1_name']; ?>
            </h3>

            <?php echo $team['team_member_1_bio']; ?>
          </div>
          <div class="col col-1-2">
            <h3 class="text-center mar-bot-10">
              <?php echo $team['team_member_2_name']; ?>
            </h3>
            
            <?php echo $team['team_member_2_bio']; ?>
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>


<section>
  <div class="container">

    <div class="grid-row mar-bot-30">
      <div class="col col-full-width text-center">
        <h2><span class="text-green">FAQs</span></h2>
      </div>
    </div>

    <div class="grid-row">
      <div class="col col-full-width">

        <div class="faqs" id="faq">

          <?php if( have_rows('faqs') ): ?>
            <?php $i = 1; while( have_rows('faqs') ): the_row();               

              // vars
              $question = get_sub_field('question');
              $answer = get_sub_field('answer');

              ?>      
            
              <div class="faq">

                <dl class="faq__list">
                  <dd>
                    <div class="faq__list-item">
                      <dl>
                        <dt class="toggle-header toggle-header--<?php echo $i; ?>">
                          <svg aria-hidden="true" focusable="false" height="16" viewbox="0 0 23 23" width="16">
                          <path d="M18.208 12.458v-1.916a.965.965 0 0 0-.958-.959h-3.833V5.75a.965.965 0 0 0-.959-.958h-1.916a.965.965 0 0 0-.959.958v3.833H5.75a.965.965 0 0 0-.958.959v1.916c0 .524.434.959.958.959h3.833v3.833c0 .524.435.958.959.958h1.916a.965.965 0 0 0 .959-.958v-3.833h3.833a.965.965 0 0 0 .958-.959zM23 11.5C23 17.849 17.849 23 11.5 23S0 17.849 0 11.5 5.151 0 11.5 0 23 5.151 23 11.5z" fill-rule="evenodd" id="expand"></path></svg> <svg aria-hidden="true" focusable="false" height="16" viewbox="0 0 23 23" width="16">
                          <path d="M18.208 12.458v-1.916a.965.965 0 0 0-.958-.959H5.75a.965.965 0 0 0-.958.959v1.916c0 .524.434.959.958.959h11.5a.965.965 0 0 0 .958-.959zM23 11.5C23 17.849 17.849 23 11.5 23S0 17.849 0 11.5 5.151 0 11.5 0 23 5.151 23 11.5z" fill-rule="evenodd" id="collapse"></path></svg> <button aria-expanded="false"><?php echo $question; ?></button>
                        </dt>
                        <dd aria-hidden="true" role="region" tabindex="-1"><?php echo $answer; ?></dd>
                      </dl>
                    </div>
                  </dd>
                </dl>

              </div>

            <?php $i++; endwhile; ?>
          <?php endif; ?>

        </div>

      </div><!--/.col -->
    </div><!-- /.grid-row -->

  </div>
</section>

<?php include('inc/mailing-list-panel.php'); ?>

<?php include('inc/contact-form-panel.php'); ?>

<?php get_footer(); ?>