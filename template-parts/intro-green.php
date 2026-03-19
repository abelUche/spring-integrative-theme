<section class="intro-green section">

  <div class="container intro-green-inner">

    <?php if(get_field('intro_green_heading')): ?>
      <h2>
        <?php the_field('intro_green_heading'); ?>
      </h2>
    <?php endif; ?>

    <?php if(get_field('intro_green_subheading')): ?>
      <p class="intro-green-sub">
        <?php the_field('intro_green_subheading'); ?>
      </p>
    <?php endif; ?>

    <?php if(get_field('intro_green_text')): ?>
      <p>
        <?php the_field('intro_green_text'); ?>
      </p>
    <?php endif; ?>

    <!-- Bullet Points -->
    <div class="intro-invitations">

      <?php if(get_field('intro_point_1')): ?>
        <p class="intro-point">
          <img class="arrow-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow.png" alt="arrow">
          <?php the_field('intro_point_1'); ?>
        </p>
      <?php endif; ?>

      <?php if(get_field('intro_point_2')): ?>
        <p class="intro-point">
          <img class="arrow-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow.png" alt="arrow">
          <?php the_field('intro_point_2'); ?>
        </p>
      <?php endif; ?>

      <?php if(get_field('intro_point_3')): ?>
        <p class="intro-point">
          <img class="arrow-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow.png" alt="arrow">
          <?php the_field('intro_point_3'); ?>
        </p>
      <?php endif; ?>

    </div>

    <?php if(get_field('intro_green_footer')): ?>
      <p class="intro-green-footer">
        <?php echo wp_kses_post(get_field('intro_green_footer')); ?>
      </p>
    <?php endif; ?>

  </div>

</section>