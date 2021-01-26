<?php
  /*
  Template Name: Product
  */
?>

<?php get_header('single'); ?>
<?php  $product_ID = get_the_ID(); ?>

<?php $img1 = get_field ('image1'); ?>
<?php $img2 = get_field ('image2'); ?>
<?php $img3 = get_field ('image3'); ?>
<?php $img4 = get_field ('image4'); ?>
<?php $img5 = get_field ('show_img'); ?>

<body>

<div style="overflow: hidden; background-color: <?php the_field('bg') ?>">
  <div class="product">
    <a href="/" class="back">
      <div class="arrow">
        <img src="<?php echo get_template_directory_uri() . '/media/icon/arrow.svg'; ?>" alt="icon">
      </div>
      <p>Вернуться в каталог</p>
    </a>
    <div class="product_overlay">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-last order-lg-first order-md-first">
            <div class="product_title">
              <div class="name"><?php the_title() ?></div>
              <div class="desc"><?php the_field('desc'); ?></div>
              <div class="links_shop">
                <a href="#" class="shop">
                  <img src="<?php echo get_template_directory_uri() . '/media/icon/shop.svg'; ?>" alt="icon">
                  <div class="info">
                    <p>Wildberries</p>
                    <p>wildberries.ru</p>
                  </div>
                </a>
                <a href="#" class="shop">
                  <img src="<?php echo get_template_directory_uri() . '/media/icon/shop2.svg'; ?>" alt="icon">
                  <div class="info">
                    <p>Kazan Express</p>
                    <p>kazanexpress.ru</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-first">
            <div class="product_main">
              <div class="item">
                <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>" alt="image">
              </div>
            </div>
          </div>
        </div>
      </div>

              <img class="cookie cookie-1" src="<?php echo $img1; ?>" alt="image">
              <img class="cookie cookie-2" src="<?php echo $img2; ?>" alt="image">
              <img class="cookie cookie-3" src="<?php echo $img3; ?>" alt="image">
              <img class="cookie cookie-4" src="<?php echo $img4; ?>" alt="image">

    </div>
  </div>
  <div class="descr information">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
          <div class="descr_block">
            <div class="descr_block--title">Описание</div>
            <div class="characteristics">
              <div class="items">
                <div class="item">
                  <p><?php the_field('b'); ?><span>г</span></p>
                  <p>Белки</p>
                </div>
              </div>
              <div class="items">
                <div class="item">
                  <p><?php the_field('j'); ?><span>г</span></p>
                  <p>Жиры</p>
                </div>
              </div>
              <div class="items">
                <div class="item">
                  <p><?php the_field('y'); ?><span>г</span></p>
                  <p>Углеводы</p>
                </div>
              </div>
              <div class="items">
                <div class="item">
                  <p><?php the_field('cal'); ?><span>кал</span></p>
                  <p>Каллорийность</p>
                </div>
              </div>
            </div>
            <div class="descr_block--desc">
              <?php the_field('big_desc'); ?>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
          <img class="descr_image" src="<?php echo get_template_directory_uri() . '/media/image/desc.png'; ?>" alt="image">
        </div>
      </div>
    </div>
    <img class="cookie cookie-2" src="<?php echo $img2; ?>" alt="image">
  </div>

  <?php if(get_field('show') === true): ?>

  <div class="descr interesting">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-lg-first order-md-last order-last">
          <img class="descr_image" src="<?php echo $img5; ?>" alt="image">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 order-lg-last order-md-first order-first">
          <div class="descr_block">
            <div class="descr_block--title"><?php the_field('show_title'); ?></div>
            <div class="descr_block--desc">
              <?php the_field('show_desc'); ?>
            </div>
          </div>
        </div>
      </div>
      <img class="cookie cookie-3" src="<?php echo $img3; ?>" alt="image">
      <img class="cookie cookie-2" src="<?php echo $img2; ?>" alt="image">
    </div>
  </div>

  <?php endif; ?>

  <?php if(get_field('show') === false): ?>

    <div class="descr interesting" style="display: none"></div>

  <?php endif; ?>

  <div class="slider_title">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title">Рецепты</div>
        </div>
      </div>
    </div>
  </div>
  <div class="slider">
    <div class="owl-carousel owl-theme recipe" id="slider">
      <div class="item">
        <img class="slider_img" src="./media/image/recept.png" alt="icon">
        <p class="slider_desc">Трубочки из куриного филе
          с сырным кремом</p>
      </div>
      <div class="item">
        <img class="slider_img" src="./media/image/recept2.png" alt="icon">
        <p class="slider_desc">Жульен с грибами и курицей,
          в тарталетках</p>
      </div>
      <div class="item">
        <img class="slider_img" src="./media/image/recept3.png" alt="icon">
        <p class="slider_desc">Рулеты с красной рыбой, ветчиной и крабовыми палочками</p>
      </div>
      <div class="item">
        <img class="slider_img" src="./media/image/recept4.png" alt="icon">
        <p class="slider_desc">Крабовый салат «Новинка»
          с сухариками</p>
      </div>
      <div class="item">
        <img class="slider_img" src="./media/image/recept.png" alt="icon">
        <p class="slider_desc">Трубочки из куриного филе
          с сырным кремом</p>
      </div>
      <div class="item">
        <img class="slider_img" src="./media/image/recept.png" alt="icon">
        <p class="slider_desc">Трубочки из куриного филе
          с сырным кремом</p>
      </div>
    </div>
  </div>
  <div class="shop_block">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3>Найти ближайший магазин</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="shop_block--content">
            <div class="news_tab">
              <div class="news_tab--head">
                <div class="tabs">
                  <div class="tab active" id="tab-cityOne">Казань</div>
                  <div class="tab" id="tab-cityTwo">Набережные челны</div>
                  <div class="tab" id="tab-cityThree">Уфа</div>
                  <div class="tab" id="tab-cityFour">Ижевск</div>
                </div>
              </div>
              <div class="news_tab--body show" id="body-cityOne">
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Convenience Store</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">ВкусВилл</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Натуральные продукты Oltmanns</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Convenience Store</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">ВкусВилл</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Натуральные продукты Oltmanns</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Convenience Store</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">ВкусВилл</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Натуральные продукты Oltmanns</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
              </div>
              <div class="news_tab--body" id="body-cityTwo">Набережные челны</div>
              <div class="news_tab--body" id="body-cityThree">Уфа</div>
              <div class="news_tab--body" id="body-cityFour">Ижевск</div>
            </div>
            <script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU" type="text/javascript"></script>
            <div id="map" class="map"></div>

            <img class="cookie cookie-3" src="<?php echo $img3; ?>" alt="image">
            <img class="cookie cookie-1" src="<?php echo $img1; ?>" alt="image">

          </div>
          <div class="shop_block--mobile">
            <div class="mobile_head--name">Казань <img src="./media/icon/arrow_mobile.svg" alt="icon">
              <div class="city_list">
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>

              </div>
            </div>
            <div class="mobile_head--name">Набережные челны <img src="./media/icon/arrow_mobile.svg" alt="icon">
              <div class="city_list">
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>
                <div class="city_item">
                  <div class="name">Пятерочка</div>
                  <div class="address">ул. Саид-Галеева, 6</div>
                </div>

              </div>
            </div>
            <div class="mobile_head--name">Уфа <img src="./media/icon/arrow_mobile.svg" alt="icon"></div>
            <div class="mobile_head--name">Ижевск <img src="./media/icon/arrow_mobile.svg" alt="icon"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="buy_online">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="buy">
            <h3>Купить онлайн</h3>
            <p class="buy_desc">Aliquam molestie justo velit, in euismod urna iaculis sit amet. Donec efficitur fermentum fermentum.</p>
            <div class="links_shop">
              <a href="#" class="shop">
                <img src="./media/icon/shop.svg" alt="icon">
                <div class="info">
                  <p>Wildberries</p>
                  <p>wildberries.ru</p>
                </div>
              </a>
              <a href="#" class="shop">
                <img src="./media/icon/shop2.svg" alt="icon">
                <div class="info">
                  <p>Kazan Express</p>
                  <p>kazanexpress.ru</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer('product'); ?>