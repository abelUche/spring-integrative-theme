<?php 
$hero_bg_blog = get_field('hero_bg_blog') ?: get_stylesheet_directory_uri() . '/assets/img/hero.jpg';
?>

<section class="home-hero" 
  style="background: url('<?php echo esc_url($hero_bg_blog); ?>') center/cover no-repeat;">

  <div class="hero-overlay"></div>

  <div class="container hero-content">

    <h1><?php the_field('hero_title_blog'); ?></h1>

    <p class="hero-sub">
      <?php the_field('hero_text_blog'); ?>
    </p>

  </div>

</section>