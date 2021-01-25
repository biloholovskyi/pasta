<?php
  /*
  Template Name: Home
  */
?>

<?php get_header(); ?>

<!--<div class="circle_border">-->
<!--  <div class="circle"></div>-->
<!--  <div class="circle-2"></div>-->
<!--  <div class="circle-3"></div>-->
<!--</div>-->

<div class="owl-carousel owl-theme main" id="main">
  <?php
    $args = array(
      'numberposts' => -1, // если -1 то выводит все
      'orderby' => 'date',
      'order' => 'ASC',
      'post_type' => 'product', // тип поста
      'suppress_filters' => true,
    );

    $posts = get_posts($args);
    $post_count = 0;

    foreach ($posts

    as $post) {
    setup_postdata($post);
    $post_count++;
    if ($post_count === 1) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #EADFC9">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>"
                           alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <!--                  <div class="circle_border">-->
                    <!--                    <div class="circle"></div>-->
                    <!--                    <div class="circle-2"></div>-->
                    <!--                    <div class="circle-3"></div>-->
                    <!--                  </div>-->
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookie2.svg'; ?>"
                 alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookie3.svg'; ?>."
                 alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookie4.svg'; ?>."
               alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookie5.svg'; ?>"
               alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 2) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color:#CAD7EB;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_template_directory_uri() . '/media/image/pasta2.png'; ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-4.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-5.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-7.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-8.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 3) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color:#F6DAC7;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_template_directory_uri() . '/media/image/pasta3.png'; ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-9.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-10.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-11.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-12.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 4) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #EECB85;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_template_directory_uri() . '/media/image/pasta4.png'; ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-13.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-14.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-15.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-16.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 5) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #B6EBB2;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_template_directory_uri() . '/media/image/pasta5.png'; ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-17.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-18.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-19.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-20.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 6) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #EBBED8;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_template_directory_uri() . '/media/image/pasta5.png'; ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-21.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-22.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-23.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-24.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 7) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #C4BEEB;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-25.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-26.svg'; ?>" alt="image">
          </div>
<!--          <img class="cookie cookie-3" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-27.svg'; ?><!--" alt="image">-->
<!--          <img class="cookie cookie-4" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-28.svg'; ?><!--" alt="image">-->
        </div>
      </div>

      <?php
    } elseif ($post_count === 8) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #D4C2AB;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-27.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-28.svg'; ?>" alt="image">
          </div>
          <!--          <img class="cookie cookie-3" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-27.svg'; ?><!--" alt="image">-->
          <!--          <img class="cookie cookie-4" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-28.svg'; ?><!--" alt="image">-->
        </div>
      </div>

      <?php
    } elseif ($post_count === 9) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #8CB8FA;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-29.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-30.svg'; ?>" alt="image">
          </div>
                    <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-31.svg'; ?>" alt="image">
                    <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-32.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 10) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #EDE191;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-33.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-34.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-35.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-36.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 11) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #FFD1D5;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-37.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-38.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-39.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-40.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 12) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #FFFADB;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-43.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-44.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-41.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-42.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 13) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #EBE3B2;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-45.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-46.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-47.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-48.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 14) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #FFC0B0;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-49.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-50.svg'; ?>" alt="image">
          </div>
<!--          <img class="cookie cookie-3" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-47.svg'; ?><!--" alt="image">-->
<!--          <img class="cookie cookie-4" src="--><?php //echo get_template_directory_uri() . '/media/image/cookies/cookie-48.svg'; ?><!--" alt="image">-->
        </div>
      </div>

      <?php
    } elseif ($post_count === 15) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #FFC7E1;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-51.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-52.svg'; ?>" alt="image">
          </div>
                    <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-53.svg'; ?>" alt="image">
                    <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-54.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
    } elseif ($post_count === 16) {
      ?>

      <div class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: #F7ECD5;">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="/product.html">Подробнее</a>
                  </div>
                  <div class="intro_main">
                    <div class="item">
                      <img class="pasta" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image">
                      <img class="shadow" src="<?php echo get_template_directory_uri() . '/media/image/shadow.svg'; ?>"
                           alt="image">
                    </div>
                    <img class="center" src="<?php echo get_template_directory_uri() . '/media/image/center.svg'; ?>"
                         alt="image">
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>
            <img class="cookie cookie-1" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-55.svg'; ?>" alt="image">
            <img class="cookie cookie-2" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-56.svg'; ?>" alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-57.svg'; ?>" alt="image">
          <img class="cookie cookie-4" src="<?php echo get_template_directory_uri() . '/media/image/cookies/cookie-58.svg'; ?>" alt="image">
        </div>
      </div>

      <?php
      }
    }
    wp_reset_postdata(); // сброс
  ?>

</div>

<footer class="footer main_footer">
  <div class="left">
    <div>© ОАО «GoodNut» 2020 г.</div>
    <div class="border">/</div>
    <div class="politics">Политика конфиденциальности</div>
  </div>
  <div class="right">
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/yt.svg'; ?>."
                                    alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/vk.svg'; ?>" alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/fb.svg'; ?>" alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/twitter.svg'; ?>"
                                    alt="icon"></a>
  </div>
</footer>

<?php get_footer(); ?>

