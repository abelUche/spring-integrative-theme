<section class="intro-white section">

<div class="container intro-inner">

<div class="intro-content">

<?php the_field('intro_white_text'); ?>

</div>

<div class="intro-actions">

<?php 
$primary = get_field('intro_white_primary_button');
if( $primary ):
?>

<a href="<?php echo esc_url($primary['url']); ?>" 
class="btn-primary"
target="<?php echo esc_attr($primary['target']); ?>">

<?php echo esc_html($primary['title']); ?>

</a>

<?php endif; ?>


<?php 
$secondary = get_field('intro_white_secondary_button');
if( $secondary ):
?>

<a href="<?php echo esc_url($secondary['url']); ?>" 
class="btn-secondary"
target="<?php echo esc_attr($secondary['target']); ?>">

<?php echo esc_html($secondary['title']); ?>

</a>

<?php endif; ?>

</div>

</div>

</section>