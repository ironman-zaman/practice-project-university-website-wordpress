<?php
get_header();
?>

<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>);"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">
           All Events
        </h1>
        <h2 class="headline headline--medium">See what is going on our world</h2>
       
      </div>
</div>

<div class="container container--narrow page-section">
  <?php
  while(have_posts()){
    the_post();
  ?>
    <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
  <?php
  }
  echo paginate_links();
  ?>

</div>

<?php
get_footer();
?>