<footer class="footer footer_product">
  <div class="left">
    <div>© ОАО «GoodNut» 2020 г.</div>
    <div class="border">/</div>
    <a href="#" target="_blank" class="politics">Политика конфиденциальности</a>
  </div>
  <div class="right">
    <a class="social" href="#"><img src="./media/icon/yt.svg" alt="icon"></a>
    <a class="social" href="#"><img src="./media/icon/vk.svg" alt="icon"></a>
    <a class="social" href="#"><img src="./media/icon/fb.svg" alt="icon"></a>
    <a class="social" href="#"><img src="./media/icon/twitter.svg" alt="icon"></a>
  </div>
</footer>
</div>

<style>
  [class*="ymaps-2"][class*="-ground-pane"] {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
    /* Firefox 3.5+ */
    -webkit-filter: brightness(100%) grayscale(100%) invert(80%);
    /* Chrome 19+ & Safari 6+ */
  }
</style>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<!--<script src="buildjs/owl.carousel.min.js"></script>-->
<!--<script src="buildjs/index.js"></script>-->
<script>
  ymaps.ready(init);
  function init(){
    <?php
    $args = array(
      'numberposts' => -1,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'post_type'   => 'contact',
      'suppress_filters' => true,
    );

    $posts = get_posts( $args );
    foreach($posts as $post){ setup_postdata($post);
    ?>

    var myMap<?php echo $post->ID; ?> = new ymaps.Map("map-<?php echo $post->ID; ?>", {
      center: [<?php echo get_field('contact_coordination'); ?>],
      zoom: 17
    });

    myMap<?php echo $post->ID; ?>.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

    myMap<?php echo $post->ID; ?>.controls
      .remove('trafficControl')
      .remove('fullscreenControl')
      .remove('rulerControl')
      .remove('typeSelector')
      .remove('searchControl')
      .remove('zoomControl')
      .remove('geolocationControl');

    var myPin<?php echo $post->ID; ?> = new ymaps.Placemark([<?php echo get_field('contact_coordination'); ?>],
      {
        balloonContentHeader: 'MOTODOM',
        balloonContentBody: 'MOTODOM',
        balloonContentFooter: 'MOTODOM',
        hintContent: 'MOTODOM'
      },
      {
        iconLayout: 'default#image',
        iconImageHref: '../wp-content/themes/motodom/media/icon/newPin.png',
        iconImageSize: [83.14, 64],
        iconImageOffset: [0, 0]
      });

    myMap<?php echo $post->ID; ?>.geoObjects.add(myPin<?php echo $post->ID; ?>);
    <?php
    }
    wp_reset_postdata(); // сброс
    ?>
  }

  $(document).ready(function () {
    sizeMap();
  });

  $(window).resize(function () {
    sizeMap();
  });

  function sizeMap () {
    let windowWidth = $(window).width();
    let containerWidth = $('.container').width();
    let wrapper = $('.contact-page__wrapper').width();
    let mapWidth = windowWidth - ((windowWidth - containerWidth) / 2 + wrapper);

    // $('.contact-page__map').css('width', mapWidth + 'px');
  }
</script>
</html>
