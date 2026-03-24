<section class="note section">

<div class="container">

<?php if(get_field('note_title')): ?>
<h2 class="note-title">
  <?php the_field('note_title'); ?>
</h2>
<?php endif; ?>


<?php if(get_field('note_text')): ?>
<p class="note-text">
  <?php the_field('note_text'); ?>
</p>
<?php endif; ?>

</div>

</section>