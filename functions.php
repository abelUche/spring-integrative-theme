<?php
/**
 * Astra Child Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/* ===============================
   Global Assets (CLEAN)
================================ */

function spring_global_assets() {

  // Fonts (used everywhere)
  if (
    is_page_template('page-home.php') ||
    is_page_template('page-blog-display.php') ||
    is_page_template('page-dr-ali.php') ||
    is_page_template('page-thank-you.php')
  ) {
    wp_enqueue_style(
      'spring-fonts',
      'https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap',
      [],
      null
    );
  }

  // Homepage and Blog-display page CSS
  if ( 
    is_page_template('page-home.php') ||
    is_page_template('page-blog-display.php')
    
    ) {
    wp_enqueue_style(
      'spring-main',
      get_stylesheet_directory_uri() . '/assets/css/main.css',
      [],
      time()
    );
  }

  // Dr Ali pages CSS
  if (
    is_page_template('page-dr-ali.php') ||
    is_page_template('page-thank-you.php')
  ) {
    wp_enqueue_style(
      'dr-ali-styles',
      get_stylesheet_directory_uri() . '/assets/css/dr-ali-v2.css',
      [],
      time()
    );
  }

}
add_action('wp_enqueue_scripts', 'spring_global_assets');


/* ===============================
   Announcement Bar
================================ */

function spring_announcement_bar() {
?>
<div class="announcement-bar">
  Announcement Bar Text
</div>
<?php
}
add_action('astra_header_before', 'spring_announcement_bar');


/* ===============================
   Image Sizes
================================ */

function spring_image_sizes() {
  add_image_size('blog-thumb', 600, 400, true);
}
add_action('after_setup_theme', 'spring_image_sizes');