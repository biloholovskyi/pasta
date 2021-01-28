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
            <input type="text" name="names" >
          </div>
          <div class="input-wrapper">
            <div class="label">Номер телефона</div>
            <input type="text" name="tel" >
          </div>
          <div class="input-wrapper textarea-wrapper">
            <div class="label textarea-label">Коментарий</div>
            <textarea name="comment" ></textarea>
          </div>
          <div class="double">
            <input type="submit" value="Отправить" class="send">
            <p>Нажимая “Отправить” вы соглашаетесь на все</p>
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
    <div>© ОАО «GoodNut» 2020 г.</div>
    <div class="border">/</div>
    <a href="#" target="_blank" class="politics">Политика конфиденциальности</a>
  </div>
  <div class="right">
    <a class="social" href="https://www.instagram.com/goodnutkzn/?hl=ru" target="_blank"><img src="<?php echo get_template_directory_uri() . '/media/icon/yt.svg'; ?>"
                                    alt="icon"></a>
<!--    <a class="social" href="#"><img src="--><?php //echo get_template_directory_uri() . '/media/icon/vk.svg'; ?><!--" alt="icon"></a>-->
<!--    <a class="social" href="#"><img src="--><?php //echo get_template_directory_uri() . '/media/icon/fb.svg'; ?><!--" alt="icon"></a>-->
<!--    <a class="social" href="#"><img src="--><?php //echo get_template_directory_uri() . '/media/icon/twitter.svg'; ?><!--" alt="icon"></a>-->
  </div>
</footer>

<?php get_footer(); ?>
