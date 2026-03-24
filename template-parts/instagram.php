<section class="instagram-feed section">

<div class="container">

<?php if(get_field('instagram_title')): ?>
<h2 class="instagram-title">
  <?php the_field('instagram_title'); ?>
</h2>
<?php endif; ?>

<p class="instagram-sub">

<?php if(get_field('instagram_badge_text')): ?>
  <span class="highlight-circle">
    <?php the_field('instagram_badge_text'); ?>
  </span>
<?php endif; ?>

<?php if(get_field('instagram_subtitle')): ?>
  <?php the_field('instagram_subtitle'); ?>
<?php endif; ?>

</p>

<p class="instagram-desc">

<?php if(get_field('instagram_subtitle_1')): ?>
  <?php the_field('instagram_subtitle_1'); ?>
<?php endif; ?>

</p>


<div class="instagram-grid">

<?php 
$shortcode = get_field('instagram_shortcode') ?: '[instagram-feed]';
echo do_shortcode($shortcode);
?>

</div>


<div class="instagram-cta">

<?php 
$link = get_field('instagram_button_link');
$text = get_field('instagram_button_text') ?: 'Follow on Instagram';
?>

<?php if($link): ?>
<a href="<?php echo esc_url($link); ?>" target="_blank" class="btn-primary">
  <?php echo esc_html($text); ?>
</a>
<?php endif; ?>

</div>

</div>

</section>