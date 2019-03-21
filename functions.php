<?php

// Includes
include( get_template_directory() . '/inc/front/enqueue.php' );
include( get_template_directory() . '/inc/setup.php' );
include( get_template_directory() . '/inc/handlers.php' );

// Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'vh_enqueue' );
add_action( 'after_setup_theme', 'vh_setup' );
add_action( 'init', 'vh_register_post_types' );

// remove junk from head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

// custom excerpt length
function vh_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'vh_custom_excerpt_length', 999 );

function vh_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'vh_excerpt_more' );

// Register post types
function vh_register_post_types() {

  // price section
  register_post_type('price', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Все Прайсы', // основное название для типа записи
      'singular_name'      => 'Прайс', // название для одной записи этого типа
      'add_new'            => 'Добавить Прайс', // для добавления новой записи
      'add_new_item'       => 'Добавление Прайса', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Прайса', // для редактирования типа записи
      'new_item'           => 'Новый Прайс', // текст новой записи
      'view_item'          => 'Смотреть Прайс', // для просмотра записи этого типа.
      'search_items'       => 'Искать Прайс', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Услуги и Цены', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-book-alt', 
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


  // Slider in portfolio section
  register_post_type('portfolio-slider', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Все Работы', // основное название для типа записи
      'singular_name'      => 'Работа', // название для одной записи этого типа
      'add_new'            => 'Добавить Работу', // для добавления новой записи
      'add_new_item'       => 'Добавление Работы', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Работы', // для редактирования типа записи
      'new_item'           => 'Новая Работа', // текст новой записи
      'view_item'          => 'Смотреть Работу', // для просмотра записи этого типа.
      'search_items'       => 'Искать Работу', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Слайдер / Наши работы', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-format-gallery', 
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


  // Slider in team section
  register_post_type('team-slider', array(
    'label'  => null,
    'labels' => array(
      'name'               => 'Вся команда', // основное название для типа записи
      'singular_name'      => 'Сотрудник', // название для одной записи этого типа
      'add_new'            => 'Добавить Сотрудника', // для добавления новой записи
      'add_new_item'       => 'Добавление Сотрудника', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Сотрудника', // для редактирования типа записи
      'new_item'           => 'Новый Сотрудник', // текст новой записи
      'view_item'          => 'Смотреть Сотрудника', // для просмотра записи этого типа.
      'search_items'       => 'Искать Сотрудника', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Слайдер / Наша команда', // название меню
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true, // зависит от public
    'exclude_from_search' => true, // зависит от public
    'show_ui'             => true, // зависит от public
    'show_in_menu'        => true, // показывать ли в меню адмнки
    'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
    'show_in_nav_menus'   => true, // зависит от public
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 6,
    'menu_icon'           => 'dashicons-format-gallery', 
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
  
  
  // Slider in reviews section
  register_post_type('reviews-slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Все отзывы', // основное название для типа записи
			'singular_name'      => 'Отзыв', // название для одной записи этого типа
			'add_new'            => 'Добавить отзыв', // для добавления новой записи
			'add_new_item'       => 'Добавление отзыва', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
			'new_item'           => 'Новый отзыв', // текст новой записи
			'view_item'          => 'Смотреть отзыв', // для просмотра записи этого типа.
			'search_items'       => 'Искать отзыв', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдер / Отзывы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-format-gallery', 
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


  // discount section
  register_post_type('discount', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Все Акции', // основное название для типа записи
			'singular_name'      => 'Акция', // название для одной записи этого типа
			'add_new'            => 'Добавить Акцию', // для добавления новой записи
			'add_new_item'       => 'Добавление Акции', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Акции', // для редактирования типа записи
			'new_item'           => 'Новая Акция', // текст новой записи
			'view_item'          => 'Смотреть Акцию', // для просмотра записи этого типа.
			'search_items'       => 'Искать Акцию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акции', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 8,
		'menu_icon'           => 'dashicons-format-status',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ) );


  // News section
  register_post_type('news', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Все Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить Новость', // для добавления новой записи
			'add_new_item'       => 'Добавление Новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Новости', // для редактирования типа записи
			'new_item'           => 'Новая Новость', // текст новой записи
			'view_item'          => 'Смотреть Новость', // для просмотра записи этого типа.
			'search_items'       => 'Искать Новость', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 9,
		'menu_icon'           => 'dashicons-format-status',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
  ) );


  // Slider in partners section
  register_post_type('partners-slider', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Все Партнеры', // основное название для типа записи
			'singular_name'      => 'Партнер', // название для одной записи этого типа
			'add_new'            => 'Добавить Партнера', // для добавления новой записи
			'add_new_item'       => 'Добавление Партнера', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Партнера', // для редактирования типа записи
			'new_item'           => 'Новый Партнер', // текст новой записи
			'view_item'          => 'Смотреть Партнера', // для просмотра записи этого типа.
			'search_items'       => 'Искать Партнера', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Слайдер / Партнеры', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-format-gallery', 
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
}