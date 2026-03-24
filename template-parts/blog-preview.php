<section class="blog-preview section">

<div class="container">

<div class="blog-intro">

<?php if(get_field('blog_title')): ?>
<h2><?php the_field('blog_title'); ?></h2>
<?php endif; ?>

<?php if(get_field('blog_subtitle')): ?>
<p class="blog-sub">
  <?php the_field('blog_subtitle'); ?>
</p>
<?php endif; ?>

<?php if(get_field('blog_description')): ?>
<p class="blog-desc">
  <?php the_field('blog_description'); ?>
</p>
<?php endif; ?>

</div>


<?php if(get_field('blog_heading')): ?>
<h3 class="blog-heading">
  <?php the_field('blog_heading'); ?>
</h3>
<?php endif; ?>


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
  the_post_thumbnail('blog-thumb');
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

<?php 
$cta_link = get_field('blog_button_link') ?: get_permalink(get_option('page_for_posts'));
?>

<a href="<?php echo esc_url($cta_link); ?>" class="btn-primary">
  <?php echo get_field('blog_button_text') ?: 'Read the Blog'; ?>
</a>

</div>

</div>

</section>