<section id="science" class="science section">

<div class="container">

<div class="science-header">

<?php if(get_field('science_title')): ?>
<h2><?php the_field('science_title'); ?></h2>
<?php endif; ?>

<?php if(get_field('science_subtitle')): ?>
<p class="science-sub">
  <?php the_field('science_subtitle'); ?>
</p>
<?php endif; ?>

</div>

<div class="science-grid">

<div class="science-image">
  <?php if(get_field('science_image')): ?>
    <img src="<?php the_field('science_image'); ?>" alt="<?php the_field('science_image_alt'); ?>">
  <?php endif; ?>
</div>

<div class="science-text">

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

</div>

</div>

</div>

</section>