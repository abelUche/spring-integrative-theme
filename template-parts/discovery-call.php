<section class="discovery-call section">

<div class="container">

<?php if(get_field('discovery_title')): ?>
<h2 class="discovery-title">
  <?php the_field('discovery_title'); ?>
</h2>
<?php endif; ?>


<?php if(get_field('discovery_subtitle')): ?>
<p class="discovery-sub">
  <?php the_field('discovery_subtitle'); ?>
</p>
<?php endif; ?>


<?php if(get_field('discovery_text')): ?>
<div class="discovery-text">
  <?php the_field('discovery_text'); ?>
</div>
<?php endif; ?>


<?php 
$calendly = get_field('discovery_calendly_link');
?>

<?php if($calendly): ?>

<a href="#" 
   class="btn-discovery"
   onclick="Calendly.initPopupWidget({url: '<?php echo esc_url($calendly); ?>'}); return false;">
  <?php the_field('discovery_button_text'); ?>
</a>

<div class="calendar-wrapper">

  <div 
    class="calendly-inline-widget" 
    data-url="<?php echo esc_url($calendly); ?>" 
    style="min-width:320px;height:700px;">
  </div>

</div>

<?php else: ?>

<div class="calendar-placeholder">
  [No Calendly link added in ACF]
</div>

<?php endif; ?>

</div>

</section>