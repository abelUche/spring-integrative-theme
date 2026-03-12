<?php
get_header();

$sections = [
'hero',
'intro-white',
'intro-green',
'science',
'approach',
'testimonials',
'services',
'free-download',
'discovery-call',
'blog-preview',
'instagram'
];

foreach($sections as $section){
get_template_part('template-parts/' . $section);
}

get_footer();
?>