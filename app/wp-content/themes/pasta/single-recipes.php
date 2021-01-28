<?php get_header('single'); ?>

<div class="receipt_modal--overlay">
  <div onclick="history.back();" class="close"><img src="<?php echo get_template_directory_uri() . '/media/image/close.svg'; ?>" alt="icon"></div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-mg-5 col-lg-5">
        <h3 class="modal_title"><?php the_title() ?></h3>
        <div class="small_title">Ингредиенты</div>
        <div class="receipt_list">

          <?php
            $acc = CFS()->get('items');
            if (!empty($acc)) {
              foreach ($acc as $one_add) {
                ?>
                <div class="receipt_item">
                  <div class="name"><?php echo $one_add['name']; ?></div>
                  <div class="quantity"><?php echo $one_add['number']; ?></div>
                </div>
                <?php
              }
            }
          ?>

        </div>
      </div>
      <div class="col-12 col-sm-12 col-mg-7 col-lg-7">
        <img class="modal__image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
      </div>
    </div>
    <div class="row">
      <div class="offset-lg-2  col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="desc"><?php the_field('desc'); ?></div>
        <div class="small_title">Способ приготовления</div>
        <div class="main_list">

          <?php
            $acc = CFS()->get('list');
            if (!empty($acc)) {
              foreach ($acc as $one_add) {
                ?>
                <div class="receipt_item">
                  <div class="number"><span><?php echo $one_add['number']; ?></span></div>
                  <div class="name"><?php echo $one_add['name']; ?></div>
                </div>
                <?php
              }
            }
          ?>

        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
