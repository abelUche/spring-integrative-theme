<section class="science section">

<div class="container">

<div class="blog-science-header">

<?php if(get_field('science_title')): ?>
<h2><?php the_field('science_title'); ?></h2>
<?php endif; ?>

<?php if(get_field('science_subtitle')): ?>
<p class="science-sub">
  <?php the_field('science_subtitle'); ?>
</p>
<?php endif; ?>

</div>

<div class="blog-science-grid">

<div class="science-image">
  <?php if(get_field('science_image')): ?>
    <img src="<?php the_field('science_image'); ?>" alt="<?php the_field('science_image_alt'); ?>">
  <?php endif; ?>
</div>

<div class="blog-science-text">

<?php if(get_field('science_heading')): ?>
<h3><?php the_field('science_heading'); ?></h3>
<?php endif; ?>

<?php if(get_field('science_paragraph_1')): ?>
<p class="text-primary">
  <?php the_field('science_paragraph_1'); ?>
</p>
<?php endif; ?>

<?php if(get_field('science_paragraph_2')): ?>
<p class="text-secondary">
  <?php the_field('science_paragraph_2'); ?>
</p>
<?php endif; ?>

<div class="blog-cta">

<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-primary">
READ THE BLOG
</a>

</div>

</div>

</div>

</div>

</section>