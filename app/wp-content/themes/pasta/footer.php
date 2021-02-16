</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
<script>
  let swiper = new Swiper('.swiper-container', {
    direction: 'vertical',
    slidesPerView: 1,
    spaceBetween: 30,
    speed: 3000,
    mousewheel: true,
    loop: true,
    parallax: true,
    pagination: false,
    simulateTouch: false
  });
</script>
<!--<script src="buildjs/owl.carousel.min.js"></script>-->
<!--<script src="buildjs/index.js"></script>-->
</html>
