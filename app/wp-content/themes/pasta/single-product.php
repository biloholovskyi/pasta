<?php
  /*
  Template Name: Product
  */
?>

<?php get_header('single'); ?>
<?php $product_ID = get_the_ID(); ?>

<?php $img1 = get_field('image1'); ?>
<?php $img2 = get_field('image2'); ?>
<?php $img3 = get_field('image3'); ?>
<?php $img4 = get_field('image4'); ?>
<?php $img5 = get_field('show_img'); ?>

  <body>

<div style="overflow: hidden; background-color: <?php the_field('bg') ?>">
  <div class="product">
    <a href="/" class="back animate__animated animate__slideInDown ">
      <div class="arrow">
        <img src="<?php echo get_template_directory_uri() . '/media/icon/arrow.svg'; ?>" alt="icon">
      </div>
      <p>Вернуться в каталог</p>
    </a>
    <div class="product_overlay">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-last order-lg-first order-md-first">
            <div class="product_title animate__animated animate__slideInLeft">
              <div class="name"><?php the_title() ?></div>
              <div class="desc"><?php the_field('desc'); ?></div>
              <div class="links_shop" style="margin-bottom: 24px">
                <a target="_blank" href="<?php the_field('wildberries'); ?>" class="shop">
                  <img src="<?php echo get_template_directory_uri() . '/media/icon/shop.svg'; ?>" alt="icon">
                  <div class="info">
                    <p>Wildberries</p>
                    <p>wildberries.ru</p>
                  </div>
                </a>
                <a target="_blank" href="<?php the_field('kazan'); ?>" class="shop">
                  <img src="<?php echo get_template_directory_uri() . '/media/icon/shop2.svg'; ?>" alt="icon">
                  <div class="info">
                    <p>Kazan Express</p>
                    <p>kazanexpress.ru</p>
                  </div>
                </a>
              </div>
              <div class="links_shop">
                <a target="_blank" href="<?php the_field('ozon'); ?>" class="shop">
                  <img src="<?php echo get_template_directory_uri() . '/media/icon/ozon.svg'; ?>" alt="icon"> 
                  <div class="info">
                    <p>Ozon</p>
                    <p>ozon.ru</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-6 col-lg-6 order-first">
            <div class="product_main animate__animated animate__slideInLeft">
              <div class="item">
                <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                     alt="image">
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
          <img class="descr_image" src="<?php echo get_template_directory_uri() . '/media/image/desc.png'; ?>"
               alt="image">
        </div>
      </div>
    </div>
    <img class="cookie cookie-2" src="<?php echo $img2; ?>" alt="image">
  </div>

  <?php if (get_field('show') === true): ?>

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

  <?php if (get_field('show') === false): ?>

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

      <?php
        $args = array(
          'numberposts' => -1, // если -1 то выводит все
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'recipes', // тип поста
          'suppress_filters' => true,
        );

        $posts = get_posts($args);

        foreach ($posts as $post) {
          setup_postdata($post);
          ?>
          <a href="<?php the_permalink(); ?>" class="item">
            <img class="slider_img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="icon">
            <p class="slider_desc"><?php the_title() ?></p>
          </a>

          <?php
        }
        wp_reset_postdata(); // сброс
      ?>

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

                  <?php
                    $args = array(
                      'numberposts' => -1, // если -1 то выводит все
                      'orderby' => 'date',
                      'order' => 'DESC',
                      'post_type' => 'contact', // тип поста
                      'suppress_filters' => true,
                    );

                    $posts = get_posts($args);
                    $contact_count = 0;
                    foreach ($posts as $post) {
                      setup_postdata($post);
                      ?>

                      <?php
                      $acc = CFS()->get('city_name');
                      $item = get_the_ID();
                      $contact_count++;
                      ?>
                      <div class="tab <?php if ($contact_count == 1) { echo 'active'; } ?>" id="tab-<?php echo $item; ?>"><?php echo $acc; ?></div>
                      <?php

                      ?>
                      <?php
                    }
                    wp_reset_postdata(); // сброс
                  ?>

                </div>
              </div>


              <?php
                $args = array(
                  'numberposts' => -1, // если -1 то выводит все
                  'orderby' => 'date',
                  'order' => 'DESC',
                  'post_type' => 'contact', // тип поста
                  'suppress_filters' => true,
                );

                $posts = get_posts($args);
                $contact_count = 0;
                foreach ($posts as $post) {
                  setup_postdata($post);
                  ?>

                  <?php
                  $acc = CFS()->get('city_name');
                  $item = get_the_ID();
                  $contact_count++;
                  ?>
                  <div class="news_tab--body <?php if ($contact_count == 1) { echo 'show'; } ?>" id="body-<?php echo $item; ?>">
                    <?php

                    ?>

                    <?php
                      $acc = CFS()->get('address_loop');
                      $i = get_the_ID();
                      $id = 0;
                      if (!empty($acc)) {
                        foreach ($acc as $one_acc) {
                          $id++;
                          ?>
                            <div class="city_item" id="city-<?php echo $i + $id; ?>">
                              <div class="name"><?php echo $one_acc['street']; ?></div>
                              <div class="address"><?php echo $one_acc['add']; ?></div>
                            </div>
                          <?php
                        }
                      }
                    ?>


                  </div>
                  <?php
                }
                wp_reset_postdata(); // сброс
              ?>


            </div>

            <script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU" type="text/javascript"></script>


            <?php
              $args = array(
                'numberposts' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'contact',
                'suppress_filters' => true,
              );

              $posts = get_posts($args);
              $contact_count_map = 0;
              $item = get_the_ID();
              foreach ($posts as $post) {
                setup_postdata($post);

                ?>

                <?php
                $acc = CFS()->get('address_loop');
                $i = get_the_ID();
                $id = 0;
                $contact_count_map = 0;
                if (!empty($acc)) {
                  foreach ($acc as $one_acc) {
                    $id++;
                    $contact_count_map++;
                    ?>
                    <div id="map-<?php echo $i + $id; ?>" class="map "></div>
                    <?php
                  }
                }
                ?>


                <?php
              }
              wp_reset_postdata(); // сброс
            ?>
            <img class="cookie cookie-3" src="<?php echo $img3; ?>" alt="image">
            <img class="cookie cookie-1" src="<?php echo $img1; ?>" alt="image">

          </div>

          <div class="shop_block--mobile">
            <?php
              $args = array(
                'numberposts' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_type' => 'contact',
                'suppress_filters' => true,
              );

              $posts = get_posts($args);
              $contact_count = 0;
              foreach ($posts as $post) {
                setup_postdata($post);
                $contact_count++;
                ?>
                <div class="mobile_head--name"><?php the_title(); ?> <img
                    src="<?php echo get_template_directory_uri() . '/media/icon/arrow_mobile.svg'; ?>" alt="icon">
                  <div class="city_list">
                    <?php
                      $acc = CFS()->get('address_loop');
                      if (!empty($acc)) {
                        foreach ($acc as $one_acc) {
                          ?>
                          <div class="city_item">
                            <div class="name"><?php echo $one_acc['street']; ?></div>
                            <div class="address"><?php echo $one_acc['add']; ?></div>
                          </div>
                          <?php
                        }
                      }
                    ?>
                  </div>
                </div>
                <?php
              }
              wp_reset_postdata(); // сброс
            ?>

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
            <div class="links_shop">
              <a target="_blank" href="<?php the_field('wildberries'); ?>" class="shop">
                <img src="<?php echo get_template_directory_uri() . '/media/icon/shop.svg'; ?>" alt="icon">
                <div class="info">
                  <p>Wildberries</p>
                  <p>wildberries.ru</p>
                </div>
              </a>
              <a style="margin-right: 24px" target="_blank" href="<?php the_field('kazan'); ?>" class="shop">
                <img src="<?php echo get_template_directory_uri() . '/media/icon/shop2.svg'; ?>" alt="icon">
                <div class="info">
                  <p>Kazan Express</p>
                  <p>kazanexpress.ru</p>
                </div>
              </a>
              <a target="_blank" href="<?php the_field('ozon'); ?>" class="shop">
                <img src="<?php echo get_template_directory_uri() . '/media/icon/ozon.svg'; ?>" alt="icon">
                <div class="info">
                  <p>Ozon</p>
                  <p>ozon.ru</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="circle_border" style="display: none"></div>
<?php get_footer('product'); ?>