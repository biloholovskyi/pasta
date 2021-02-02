<?php
// подключение скриптов
add_action('wp_enqueue_scripts', 'style_them');
// подключение стилей
add_action('wp_footer', 'script_them');
// подключение меню
add_action('after_setup_theme', 'menu');

// пример создание меню
function menu() {
  register_nav_menu('header', 'Главное меню в шапке');
  register_nav_menu('footer', 'Меню в подвале');
  // подключаем обложку поста
  add_theme_support( 'post-thumbnails', array('post', 'product', 'recipes', 'contact', 'politics', 'social') );
  // удаляем ... в кратком описание постов
  add_filter('excerpt_more', function($more) {
    return '';
  });
}

// подключение стилей
function style_them() {
  // подключение основного файла стилей
  wp_enqueue_style('style', get_stylesheet_uri());
  // подключение остальный файлов
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('owl_theme', get_template_directory_uri() . '/css/owl.theme.default.min.css');
}

// подключение скриптов
function script_them() {
  wp_enqueue_script('script', get_template_directory_uri() . '/buildjs/index.js');
  wp_enqueue_script('owl_script', get_template_directory_uri() . '/buildjs/owl.carousel.min.js');

  // удаление из скриптов лишних аттрибутов
  add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
  function codeless_remove_type_attr($tag, $handle) {
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
  }
}

// пример создания нового типа поста
add_action( 'init', 'register_post_types' );
function register_post_types(){
  register_post_type('product', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Товар', // основное название для типа записи
      'singular_name'      => 'Товар', // название для одной записи этого типа
      'add_new'            => 'Добавить Товар', // для добавления новой записи
      'add_new_item'       => 'Добавление Товара', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Товара', // для редактирования типа записи
      'new_item'           => 'Новый Товар', // текст новой записи
      'view_item'          => 'Смотреть Товар', // для просмотра записи этого типа.
      'search_items'       => 'Искать Товар', // для поиска по этим типам записи
      'not_found'          => 'Не найден Товар', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден Товар в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Товар', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 2,
    'menu_icon'           => 'dashicons-cart',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('recipes', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Рецепты', // основное название для типа записи
      'singular_name'      => 'Рецепт', // название для одной записи этого типа
      'add_new'            => 'Добавить Рецепт', // для добавления новой записи
      'add_new_item'       => 'Добавление Рецепта', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Рецепта', // для редактирования типа записи
      'new_item'           => 'Новый Рецепт', // текст новой записи
      'view_item'          => 'Смотреть Рецепт', // для просмотра записи этого типа.
      'search_items'       => 'Искать Рецепт', // для поиска по этим типам записи
      'not_found'          => 'Не найден Рецепт', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден Рецепт в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Рецепты', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 3,
    'menu_icon'           => 'dashicons-edit-large',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('contact', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Контакти', // основное название для типа записи
      'singular_name'      => 'Контакт', // название для одной записи этого типа
      'add_new'            => 'Добавить контакт', // для добавления новой записи
      'add_new_item'       => 'Добавление контакта', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование контакта', // для редактирования типа записи
      'new_item'           => 'Новий контакт', // текст новой записи
      'view_item'          => 'Смотреть контакт', // для просмотра записи этого типа.
      'search_items'       => 'Искать контакт', // для поиска по этим типам записи
      'not_found'          => 'Не найден контакт', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден контакт в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Контакти', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-translation',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('politics', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Политика конфиденциальности', // основное название для типа записи
      'singular_name'      => 'Политика конфиденциальности', // название для одной записи этого типа
      'add_new'            => 'Добавить документ', // для добавления новой записи
      'add_new_item'       => 'Добавление документа', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование документа', // для редактирования типа записи
      'new_item'           => 'Новий документ', // текст новой записи
      'view_item'          => 'Смотреть документ', // для просмотра записи этого типа.
      'search_items'       => 'Искать документ', // для поиска по этим типам записи
      'not_found'          => 'Не найден документ', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найден документ в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Политика конфиденциальности', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-cloud-upload',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );

  register_post_type('social', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Соц.сети', // основное название для типа записи
      'singular_name'      => 'Соц.сети', // название для одной записи этого типа
      'add_new'            => 'Добавить Соц.сеть', // для добавления новой записи
      'add_new_item'       => 'Добавление Соц.сети', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Соц.сети', // для редактирования типа записи
      'new_item'           => 'Новая Соц.сеть', // текст новой записи
      'view_item'          => 'Смотреть Соц.сеть', // для просмотра записи этого типа.
      'search_items'       => 'Искать Соц.сеть', // для поиска по этим типам записи
      'not_found'          => 'Не найдена Соц.сеть', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдена Соц.сеть в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Соц.сети', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 6,
    'menu_icon'           => 'dashicons-groups',
    //'capability_type'   => 'post',
    //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
    //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
    'taxonomies'          => array(),
    'has_archive'         => false,
    'rewrite'             => true,
    'query_var'           => true,
  ) );


}

// скрипт для добавления svg картинок в адмнке
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );


