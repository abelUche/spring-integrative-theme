<section class="free-download section">

<div class="container">

<div class="download-header">

<div class="divider"></div>

<?php if(get_field('download_title')): ?>
  <h2><?php the_field('download_title'); ?></h2>
<?php endif; ?>

<div class="divider"></div>

</div>


<p class="download-sub">

<?php if(get_field('download_badge_text')): ?>
  <span class="highlight-circle">
    <?php the_field('download_badge_text'); ?>
  </span>
<?php endif; ?>

<?php if(get_field('download_subtitle')): ?>
  <?php the_field('download_subtitle'); ?>
<?php endif; ?>

</p>


<?php if(get_field('download_text')): ?>
  <p class="download-text">
    <?php the_field('download_text'); ?>
  </p>
<?php endif; ?>


<?php 
$file = get_field('download_file');
if($file): 
?>
  <a href="<?php echo esc_url($file); ?>" class="btn-download" download>
    <?php echo get_field('download_button_text') ?: 'Download'; ?>
  </a>
<?php endif; ?>

</div>

</section>