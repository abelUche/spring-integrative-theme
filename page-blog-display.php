<?php
/*
Template Name: Blog display
*/

get_header();

$sections = [
  'hero-blog',
  'blog-intro-white',
  'blog-preview-blog',
  'blog-science',
  'divider',
  'spotlight-blog',
  'hero',
  'approach',
  'testimonials',
  'note',
];

foreach($sections as $section){
  get_template_part('template-parts/' . $section);
}

get_footer();
?>