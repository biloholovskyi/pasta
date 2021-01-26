<footer class="footer footer_product">
  <div class="left">
    <div>© ОАО «GoodNut» 2020 г.</div>
    <div class="border">/</div>
    <div class="politics">Политика конфиденциальности</div>
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
    var myMap = new ymaps.Map("map", {
      center: [51.767703, 55.198824],
      zoom: 17
    });

    myMap.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

    myMap.controls
      .remove('trafficControl')
      .remove('fullscreenControl')
      .remove('rulerControl')
      .remove('typeSelector')
      .remove('searchControl')
      .remove('zoomControl')
      .remove('geolocationControl');

    var myPin = new ymaps.Placemark([51.767703, 55.198824],
      {
        balloonContentHeader: 'BRP',
        balloonContentBody: 'BRP',
        balloonContentFooter: 'BRP',
        hintContent: 'BRP'
      },
      {
        iconLayout: 'default#image',
        // iconImageHref: '../wp-content/themes/motodom/media/icon/pin.png',
        iconImageHref: './media/icon/pin.png',
        iconImageSize: [83.14, 64],
        iconImageOffset: [0, 0]
      });

    myMap.geoObjects.add(myPin);
  }

  $(document).ready(function () {
    let windowWidth = $(window).width();
    let containerWidth = $('.container').width();
    let wrapper = $('.contact-page__wrapper').width();
    let mapWidth = windowWidth - ((windowWidth - containerWidth) / 2 + wrapper);

    // $('#map').css('width', mapWidth + 'px');
  });
</script>
</html>
