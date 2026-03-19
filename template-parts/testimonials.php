<section class="testimonials section">

<div class="container">

<div class="testimonials-header">

<?php if(get_field('testimonials_title')): ?>
<h2><?php the_field('testimonials_title'); ?></h2>
<?php endif; ?>

<?php if(get_field('testimonials_subtitle')): ?>
<p class="testimonials-sub">
  <?php the_field('testimonials_subtitle'); ?>
</p>
<?php endif; ?>

</div>


<div class="testimonial-carousel">     

<div class="testimonial-track">

<?php if(have_rows('testimonials_list')): ?>
  <?php while(have_rows('testimonials_list')): the_row(); 

    $active = get_sub_field('testimonial_active') ? 'active' : '';
  ?>

    <div class="testimonial-card <?php echo $active; ?>">

      <h4 class="testimonial-title">
        <?php the_sub_field('testimonial_title'); ?>
      </h4>

      <p class="testimonial-body">
        <?php the_sub_field('testimonial_body'); ?>
      </p>

      <span class="testimonial-author">
        — <?php the_sub_field('testimonial_author'); ?>
      </span>

    </div>

  <?php endwhile; ?>
<?php endif; ?>

</div>


<!-- ARROWS -->
<div class="carousel-controls">

<button class="carousel-arrow prev">
  <img class="arrow-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/before.png" alt="Previous">
</button>

<button class="carousel-arrow next">
  <img class="arrow-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/next.png" alt="Next">
</button>

</div>

</div>


<?php if(get_field('testimonials_footer')): ?>
<p class="testimonial-footer">
  <?php the_field('testimonials_footer'); ?>
</p>
<?php endif; ?>

</div>

</section>