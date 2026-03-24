<section id="services" class="services section">

<div class="container">

<div class="services-header">

<?php if(get_field('services_title')): ?>
<h2><?php the_field('services_title'); ?></h2>
<?php endif; ?>

<?php if(get_field('services_subtitle')): ?>
<p class="services-sub">
  <?php the_field('services_subtitle'); ?>
</p>
<?php endif; ?>

</div>


<div class="services-cards">

<?php if(have_rows('services_list')): ?>
  <?php while(have_rows('services_list')): the_row(); ?>

    <div class="service-card">

      <h3><?php the_sub_field('service_title'); ?></h3>

      <?php if(get_sub_field('service_text_1')): ?>
      <p><?php the_sub_field('service_text_1'); ?></p>
      <?php endif; ?>

      <?php if(get_sub_field('service_text_2')): ?>
      <p><?php the_sub_field('service_text_2'); ?></p>
      <?php endif; ?>

      <?php if(get_sub_field('service_text_3')): ?>
      <p><?php the_sub_field('service_text_3'); ?></p>
      <?php endif; ?>

      <?php if(get_sub_field('service_button_link')): ?>
      <a href="<?php the_sub_field('service_button_link'); ?>" class="btn-primary">
        <?php the_sub_field('service_button_text'); ?>
      </a>
      <?php endif; ?>

    </div>

  <?php endwhile; ?>
<?php endif; ?>

</div>

</div>

</section>