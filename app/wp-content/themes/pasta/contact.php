<?php
  /*
  Template Name: Contacts
  */
?>

<?php get_header('single') ?>

<header class="header header_contact">
  <div class="lang_block">
    <a class="ru active" href="#">RUS</a>
    <a class="eng" href="#">ENG</a>
  </div>
  <a href="/" class="logo_block">
    <div class="big">GoodNut</div>
    <div class="small">Ореховые пасты</div>
  </a>
  <div class="lang_block lang_mobile">
    <a class="ru active" href="#">RUS</a>
    <a class="eng" href="#">ENG</a>
  </div>
  <a class="contacts" href="/contact">Контакты</a>
</header>

<div class="contact_page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="contact_page--contact">
          <h3>Контакты</h3>
          <div class="double_block">
            <div class="contact">
              <h4>Email</h4>
              <a class="link" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
            </div>
            <div class="contact">
              <h4>Телефон</h4>
              <a class="link" href="tel:<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a>
            </div>
          </div>
          <div class="contact">
            <h4>Адрес</h4>
            <div class="addresses"><?php the_field('address'); ?></div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="form_title">Свяжитесь с нами</div>
        <form class="form_section">
          <div class="input-wrapper">
            <div class="label">Ваше имя</div>
            <input type="text" name="names" required>
          </div>
          <div class="input-wrapper">
            <div class="label">Номер телефона</div>
            <input type="text" name="tel" required>
          </div>
          <div class="input-wrapper textarea-wrapper">
            <div class="label textarea-label">Коментарий</div>
            <textarea name="comment" ></textarea>
          </div>
          <div class="double">
            <input type="submit" value="Отправить" class="send">
            <p>Нажимая “Отправить”, Вы соглашаетесь с политикой конфиденциальности сайта.</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="alert-modal">
  <div class="alert-modal__body">
    <p>Спасибо!</p>
    <p>Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время</p>
  </div>
</div>

<footer class="footer footer_contact">
  <div class="left">
    <div>ИП Ахмерова Р.С. ОГРНИП 317169000173513 </div>
    <div class="slash" style="margin: 0 8px">/</div>

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

<?php get_footer(); ?>
