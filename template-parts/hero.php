<?php 
$hero_bg = get_field('hero_bg') ?: get_stylesheet_directory_uri() . '/assets/img/hero.jpg';
?>

<section class="home-hero" 
  style="background: url('<?php echo esc_url($hero_bg); ?>') center/cover no-repeat;">

  <div class="hero-overlay"></div>

  <div class="container hero-content">

    <h1><?php the_field('hero_title'); ?></h1>

    <p class="hero-sub">
    <?php the_field('hero_text'); ?>
    </p>

  </div>

</section>