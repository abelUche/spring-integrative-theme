<section class="blog-preview section">

<div class="container">

<div class="blog-intro">

<h2>Guidance for the Menopause Journey</h2>

<p class="blog-sub">
Articles on hormones, boundaries, embodiment,
and the sacred intelligence of the female body.
</p>

<p class="blog-desc">
Explore reflections and education on spiritual menopause,
mindset medicine, hormone testing, and practical tools
to support your transition with clarity and compassion.
</p>

</div>


<h3 class="blog-heading">Recent Blog Posts</h3>


<div class="blog-grid">

<?php
$args = array(
'post_type' => 'post',
'posts_per_page' => 3
);

$query = new WP_Query($args);

if($query->have_posts()):
while($query->have_posts()):
$query->the_post();
?>

<div class="blog-card">

<a href="<?php the_permalink(); ?>">

<div class="blog-image">
<?php if(has_post_thumbnail()) {
the_post_thumbnail('medium');
} ?>
</div>

<h4><?php the_title(); ?></h4>

</a>

</div>

<?php
endwhile;
wp_reset_postdata();
endif;
?>

</div>


<div class="blog-cta">

<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="btn-primary">
READ THE BLOG
</a>

</div>

</div>

</section>