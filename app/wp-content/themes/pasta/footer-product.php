<footer class="footer footer_product">
  <div class="border"></div>
  <div class="left">
    <div>ИП Ахмерова Р.С. ОГРНИП 317169000173513 </div>
    <div class="slash" style="margin: 0 8px"> / </div>

    <?php
      $args = array(
        'numberposts' => 1, // если -1 то выводит все
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'politics', // тип поста
        'suppress_filters' => true,
      );

      $posts = get_posts($args);

      foreach ($posts as $post) {
        setup_postdata($post);
        ?>

        <a href="<?php the_field('politics'); ?>" target="_blank" class="politics">Политика конфиденциальности</a>

        <?php
      }
      wp_reset_postdata(); // сброс
    ?>

  </div>
  <div class="right">
    <?php
      $args = array(
        'numberposts' => -1, // если -1 то выводит все
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'social', // тип поста
        'suppress_filters' => true,
      );

      $posts = get_posts($args);

      foreach ($posts as $post) {
      setup_postdata($post);
    ?>
    <a class="social" href="<?php the_field('link'); ?>" target="_blank"><img
        src="<?php echo get_the_post_thumbnail_url(); ?>" alt="icon"></a>
        <?php
      }
      wp_reset_postdata(); // сброс
    ?>
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

  function init() {
    <?php
    $args = array(
      'numberposts' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
      'post_type' => 'contact',
      'suppress_filters' => true,
    );

    $posts = get_posts($args);
    foreach($posts as $post){ setup_postdata($post);
    ?>

    <?php
      $acc = CFS()->get('address_loop');
      $i = get_the_ID();
      $id = 0;
      if (!empty($acc)) {
      foreach ($acc as $one_acc) {
      $id++;
    ?>

        var myMap<?php echo $i + $id; ?> = new ymaps.Map("map-<?php echo $i + $id; ?>", {
          center: [<?php echo $one_acc['coordinate']; ?>],
          zoom: 17
        });





    myMap<?php echo $i + $id; ?>.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

    myMap<?php echo $i + $id; ?>.controls
      .remove('trafficControl')
      .remove('fullscreenControl')
      .remove('rulerControl')
      .remove('typeSelector')
      .remove('searchControl')
      .remove('zoomControl')
      .remove('geolocationControl');

    //var myPin<?php //echo $i + $id; ?>// = new ymaps.Placemark([<?php //echo $one_acc['coordinate']; ?>//],
    //  {
    //    balloonContentHeader: 'Pasta',
    //    balloonContentBody: 'Pasta',
    //    balloonContentFooter: 'Pasta',
    //    hintContent: 'Pasta'
    //  },
    //  {
    //    iconLayout: 'default#image',
    //    iconImageHref: '../wp-content/themes/pasta/media/icon/newPin.png',
    //    iconImageSize: [83.14, 64],
    //    iconImageOffset: [0, 0]
    //  });

    //myMap<?php //echo $i + $id; ?>//.geoObjects.add(myPin<?php //echo $i + $id; ?>//);

    <?php
        }
      }
    ?>

    <?php
    }
    wp_reset_postdata(); // сброс
    ?>
  }

  // $(document).ready(function () {
  //   sizeMap();
  // });
  //
  // $(window).resize(function () {
  //   sizeMap();
  // });
  //
  // function sizeMap() {
  //   let windowWidth = $(window).width();
  //   let containerWidth = $('.container').width();
  //   let wrapper = $('.contact-page__wrapper').width();
  //   let mapWidth = windowWidth - ((windowWidth - containerWidth) / 2 + wrapper);
  //
  //   // $('.contact-page__map').css('width', mapWidth + 'px');
  // }
</script>
</html>
