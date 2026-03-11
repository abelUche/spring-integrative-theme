<?php
/* Template Name: Dr. Ali – Personal Brand */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class('dr-ali-page'); ?>>

<main class="dr-ali-wrapper">

  <section class="dr-ali-hero">

    <div class="logo">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png?v=2" alt="Dr. Ali – Alisun Bonville">
    </div>

    <p class="eyebrow">A NEW CHAPTER WITH DR. ALI</p>

    <h1>A more conscious approach to menopause</h1>

    <p class="subhead">
      Guidance, insight, and grounded wisdom for women navigating midlife
      transitions — blending integrative medicine with spiritual awareness.
    </p>

    <div class="optin">
      <!-- Mailchimp Embed -->
      <!-- Replace ACTION URL with your Mailchimp form action -->
      <form action="https://thehormonefrequency.us5.list-manage.com/subscribe/post?u=8f3f35f9d517daaf987df911e&id=68dd3a7c85&f_id=00fc9fe4f0"
            method="post" 
            target="_blank" 
            novalidate
      >
        <input type="email" name="EMAIL" placeholder="Your email address" required>
        <button type="submit">Receive reflections & resources</button>
      </form>

      <p class="reassurance">
        One thoughtful note at a time. No spam. You may unsubscribe whenever you wish.
      </p>
    </div>

  </section>

</main>

<?php wp_footer(); ?>
</body>
</html>
