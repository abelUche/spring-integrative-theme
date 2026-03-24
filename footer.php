<footer class="site-footer">

<div class="container footer-wrapper">

<div class="footer-left">

<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-logo.png" alt="Dr Ali Logo">

</div>

<div class="footer-divider"></div>

<div class="footer-right">

<a href="#">Terms & Conditions</a>
<a href="#">Privacy Policy</a>
<a href="#">Disclaimer</a>

</div>

</div>

<?php wp_footer(); ?>

<!-- Calendly Script -->
<script src="https://assets.calendly.com/assets/external/widget.js" async></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const track = document.querySelector(".testimonial-track");
  const cards = document.querySelectorAll(".testimonial-card");
  const prevBtn = document.querySelector(".carousel-arrow.prev");
  const nextBtn = document.querySelector(".carousel-arrow.next");

  let index = 0;
  let autoSlide;

  function updateCarousel() {

  const card = cards[0];
  const gap = parseInt(getComputedStyle(track).gap) || 0;

  const cardWidth = card.offsetWidth + gap;

  const containerWidth = document.querySelector(".testimonial-carousel").offsetWidth;

  const centerOffset = (containerWidth / 2) - (card.offsetWidth / 2);

  track.style.transform = `translateX(${centerOffset - (index * cardWidth)}px)`;

  // active state
  cards.forEach(c => c.classList.remove("active"));
  cards[index].classList.add("active");
}

  function nextSlide() {
    if (index < cards.length - 1) {
      index++;
    } else {
      index = 0;
    }
    updateCarousel();
  }

  function prevSlide() {
    if (index > 0) {
      index--;
    } else {
      index = cards.length - 1;
    }
    updateCarousel();
  }

  /* BUTTONS */

  nextBtn.addEventListener("click", () => {
    nextSlide();
    resetAutoSlide();
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
    resetAutoSlide();
  });

  /* AUTO SLIDE */

  function startAutoSlide() {
    autoSlide = setInterval(nextSlide, 5000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  startAutoSlide();

  /* SWIPE */

  let startX = 0;

  track.addEventListener("touchstart", e => {
    startX = e.touches[0].clientX;
  });

  track.addEventListener("touchend", e => {
    let diff = e.changedTouches[0].clientX - startX;

    if (diff > 50) prevSlide();
    if (diff < -50) nextSlide();
  });

 /* INIT */

// run after everything fully loads (images, layout, etc.)
window.addEventListener("load", updateCarousel);

// recalculate on screen resize
window.addEventListener("resize", updateCarousel);

// initial run
updateCarousel();

});
</script>
</body>
</html>