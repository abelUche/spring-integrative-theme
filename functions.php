<?php
/**
 * Astra Child Theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/* ===============================
   Dr. Ali – Opt-in Page Assets
================================ */
function dr_ali_assets() {

  if (
  is_page_template('page-dr-ali.php') ||
  is_page_template('page-thank-you.php') ||
  is_page_template('page-home.php')
) {

    wp_enqueue_style(
      'dr-ali-fonts',
      'https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap',
      [],
      null
    );

    wp_enqueue_style(
      'dr-ali-styles',
      get_stylesheet_directory_uri() . '/assets/css/dr-ali-v2.css',
      [],
      '1.0'
    );

  }
}
add_action('wp_enqueue_scripts', 'dr_ali_assets');

function spring_theme_assets() {

  if ( is_page_template('page-home.php') ) {

    wp_enqueue_style(
      'spring-main',
      get_stylesheet_directory_uri() . '/assets/css/main.css',
      [],
      time()
    );

  }

}

add_action('wp_enqueue_scripts', 'spring_theme_assets');
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