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

    foreach ($posts as $post) {
    setup_postdata($post);
      ?>
      <div id="<?php the_ID(); ?>" class="item">
        <div class="intro">
          <div class="intro_overlay" style="background-color: <?php the_field('bg') ?>">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="intro_title">
                    <div class="name"><?php the_title(); ?></div>
                    <div class="desc"><?php the_field('desc'); ?></div>
                    <a class="detail" href="<?php the_permalink(); ?>">Подробнее</a>
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
                    <div class="middle_border"></div>
                  </div>
                </div>
              </div>
            </div>

            <?php $img1 = get_field ('image1'); ?>
            <?php $img2 = get_field ('image2'); ?>
            <?php $img3 = get_field ('image3'); ?>
            <?php $img4 = get_field ('image4'); ?>

            <img class="cookie cookie-1" src="<?php echo $img1; ?>"
                 alt="image">
            <img class="cookie cookie-2" src="<?php echo $img2; ?>"
                 alt="image">
          </div>
          <img class="cookie cookie-3" src="<?php echo $img3; ?>"
               alt="image">
          <img class="cookie cookie-4" src="<?php echo $img4; ?>"
               alt="image">
        </div>
      </div>
      
      <?php
      
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
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/yt.svg'; ?>"
                                    alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/vk.svg'; ?>" alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/fb.svg'; ?>" alt="icon"></a>
    <a class="social" href="#"><img src="<?php echo get_template_directory_uri() . '/media/icon/twitter.svg'; ?>"
                                    alt="icon"></a>
  </div>
</footer>

<?php get_footer(); ?>

