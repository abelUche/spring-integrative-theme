<section class="approach section">

<div class="container">

<div class="approach-header">

<?php if(get_field('approach_title')): ?>
<h2 class="approach-title">
  <?php the_field('approach_title'); ?>
</h2>
<?php endif; ?>

<?php if(get_field('approach_subtitle')): ?>
<p class="approach-sub">
  <?php echo nl2br(get_field('approach_subtitle')); ?>
</p>
<?php endif; ?>

</div>


<div class="approach-grid">

<div class="approach-text">

<?php if(get_field('approach_paragraph_1')): ?>
<p>
  <?php the_field('approach_paragraph_1'); ?>
</p>
<?php endif; ?>

<?php if(get_field('approach_highlight')): ?>
<p class="approach-highlight">
  <?php the_field('approach_highlight'); ?>
</p>
<?php endif; ?>

<?php if(get_field('approach_paragraph_2')): ?>
<p>
  <?php the_field('approach_paragraph_2'); ?>
</p>
<?php endif; ?>

</div>


<div class="approach-image">
<?php if(get_field('approach_image')): ?>
  <img src="<?php the_field('approach_image'); ?>" alt="<?php the_field('approach_image_alt'); ?>">
<?php endif; ?>
</div>

</div>


<div class="approach-quote">

<?php if(get_field('approach_quote')): ?>
<p>
  <?php the_field('approach_quote'); ?>
</p>
<?php endif; ?>

</div>

</div>

</section>