<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php bloginfo( 'name' ) ?> - <?php bloginfo( 'description' ) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>
</head>

<body>
  <div class="menu-overlay"></div>
  <nav class="menu-wrapper">
    <div class="nav-list">
      <a href="#hero" id="to_hero" class="nav-item">Главная</a>
      <a href="#about" id="to_about" class="nav-item">О нас</a>
      <a href="#services" id="to_services" class="nav-item">Услуги и цены</a>
      <a href="#news" id="to_news" class="nav-item">Новости</a>
      <a href="#discount" id="to_discount" class="nav-item">Акции</a>
      <a href="#contacts" id="to_contacts" class="nav-item">Контакты</a>

      <hr class="menu_divider">

      <div class="menu_contacts">
        <?php
        $contact_phone = get_field('contact_phone');	
        
        if( $contact_phone ): ?>
          <a class="menu_contacts_item menu_contacts_item--phone"
            href="tel:<?php echo $contact_phone['link']; ?>">
            <?php echo $contact_phone['code']; ?> <?php echo $contact_phone['phone']; ?>
          </a>
        <?php endif; ?>
        <a class="menu_contacts_item" href="<?php the_field( 'contact_address_link' ); ?>" target="_blank">
          <?php the_field( 'contact_address' ); ?>
        </a>
        <p><?php the_field( 'contact_schedule' ); ?></p>
      </div>
    </div>
  </nav>

  <section class="main_block" id="hero">
    
    <div class="hero-slider js-hero-slider">
      <?php
      $hero_slider = get_field('hero_slider');	
      
      if( $hero_slider ): ?>
      <div class="hero-slide" style="background-image: url(<?php echo $hero_slider['image_1']; ?>;"></div>
      <div class="hero-slide" style="background-image: url(<?php echo $hero_slider['image_2']; ?>;"></div>
      <div class="hero-slide" style="background-image: url(<?php echo $hero_slider['image_3']; ?>;"></div>
      <div class="hero-slide" style="background-image: url(<?php echo $hero_slider['image_4']; ?>;"></div>
      <?php endif; ?>
    </div>
    

    <div class="main_block_wrapper container">
      <div class="header">
        <div class="header_left">
          <div class="logo_block">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
              <img alt="BARNABA - men's haircuts" title="BARNABA" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png">
            </a>
          </div>
          <nav>
            <a href="#" class="hamburger" id="hamburger">
              <svg class="menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 46.99 37.01"
                width="48" height="38">
                <title>menu_icon</title>
                <rect class="cls-4" x="0.5" y="0.5" width="45.98" height="7.01" rx="1" />
                <rect class="cls-4" x="0.5" y="15" width="45.98" height="7.01" rx="1" />
                <rect class="cls-4" x="0.5" y="29.5" width="45.98" height="7.01" rx="1" />
              </svg>
            </a>
          </nav>
        </div>
        <div class="header_contacts">
          <?php
          $contact_phone = get_field('contact_phone');	
          
          if( $contact_phone ): ?>
            <a class="header_contacts_phone" href="tel:<?php echo $contact_phone['link']; ?>">
              <b><span style="font-weight: normal"><?php echo $contact_phone['code']; ?></span> <?php echo $contact_phone['phone']; ?></b>
            </a><br>
          <?php endif; ?>
          <a href="<?php the_field( 'contact_address_link' ); ?>" class="header_contacts_address" target="_blank">
            <?php the_field( 'contact_address' ); ?>
          </a><br>
          <span class="header_contacts_time"><?php the_field( 'contact_schedule' ); ?></span>
        </div>
      </div>
      
      <div class="main_block_secondline">
        <div class="text_block">
          <span class="text_block_line_1">БЕЗУМНО ВЛЮБЛЕНЫ В ВАШУ СТРИЖКУ!<br></span>
          <span class="text_block_line_2">У нас стригут мастера девушки - настоящие профессионалы своего дела</span>
        </div>
        <div class="button_block">
          <a href="#" class="button js-signUp-trigger">ЗАПИШИСЬ ONLINE</a>
        </div>
      </div>

      <?php
      $social_media = get_field('social_media');	
      
      if( $social_media ): ?>
        <div class="social_buttons">
          <a href="https://www.instagram.com/<?php echo $social_media['instagram']; ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.png">
          </a>
          <a href="https://vk.com/<?php echo $social_media['vk']; ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/vk.png">
          </a>
          <a href="https://www.facebook.com/<?php echo $social_media['facebook']; ?>">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/fb.png">
          </a>
        </div>
      <?php endif; ?>
      
      <div class="carousel_numbers">
        <span class="carousel_line carousel_line--first"></span>
        <div class="carousel_number active">1</div>
        <span class="carousel_line"></span>
        <div class="carousel_number">2</div>
        <span class="carousel_line"></span>
        <div class="carousel_number">3</div>
        <span class="carousel_line"></span>
        <div class="carousel_number">4</div>
        <span class="carousel_line carousel_line--last"></span>
      </div>
    </div>
  </section>

  <section class="about_us" id="about">
    <div class="about_us_wrapper container">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-lg-7-12">
          <div class="about_us_left">
            <h2>О НАС</h2>
            <div class="about_us_desc">
              <?php the_field( 'about_text' ); ?>
            </div>
            
          </div>
        </div>

        <div class="pure-u-1 pure-u-lg-5-12">
          <div class="about_us_right">
            <h2>МЫ РАБОТАЕМ ДЛЯ ВАС</h2>
            <div class="pure-g work_for_block">
              <div class="pure-u-1 pure-u-sm-1-2">
                <div class="service_block">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_1.png">
                  <p>Мастера - девушки с
                    огромным опытом в сфере мужских стрижек и барберинга</p>
                </div>
              </div>

              <div class="pure-u-1 pure-u-sm-1-2">
                <div class="service_block">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_3.png">
                  <p>Качественные услуги и
                    сервис по доступной цене</p>
                </div>
              </div>

              <div class="pure-u-1 pure-u-sm-1-2">
                <div class="service_block">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_2.png">
                  <p>Комфортная зона ожидания: Бесплатный бар, Wi-fi,
                    Playstation 4</p>
                </div>
              </div>

              <div class="pure-u-1 pure-u-sm-1-2">
                <div class="service_block">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_4.png">
                  <p>Качественные услуги и
                    сервис по доступной цене</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="price_list" id="services">
    <div class="price_list_wrapper container">
      <div class="price_list_first_line">
        <h2>Наши услуги и цены</h2>
        <div class="service_list_line"></div>
        <a href="#" class="service_list_signup js-signUp-trigger">Записаться on-line</a>
      </div>
      <div class="service_list">
        <div class="service_list_button_block">
          <a href="#" class="service_list_button is-active" id="master">Мастер</a>
          <a href="#" class="service_list_button" id="junior">Младший мастер</a>
          <a href="#" class="service_list_button" id="sell-out">Акции</a>
          <a href="#" class="service_list_button" id="extra">Дополнительные услуги</a>
        </div>
        <div class="price_content">
          <div class="price_table master is-open">
            <ul>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Бритье головы</span>
                <span class="price">1200 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              <li>
                <span class="serv">Мужская стрижка</span>
                <span class="price">700 руб</span>
              </li>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>

            </ul>
          </div>

          <div class="price_table junior">
            <ul>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Бритье головы</span>
                <span class="price">1200 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              <li>
                <span class="serv">Мужская стрижка</span>
                <span class="price">700 руб</span>
              </li>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              
            </ul>
          </div>

          <div class="price_table sell-out">
            <ul>
              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Бритье головы</span>
                <span class="price">1200 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              <li>
                <span class="serv">Мужская стрижка</span>
                <span class="price">700 руб</span>
              </li>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              
            </ul>
          </div>

          <div class="price_table extra">
            <ul>
              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Бритье головы</span>
                <span class="price">1200 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              <li>
                <span class="serv">Мужская стрижка</span>
                <span class="price">700 руб</span>
              </li>

              <li>
                <span class="serv">Стрижка машинкой</span>
                <span class="price">500 руб</span>
              </li>

              <li>
                <span class="serv">Детская стрижка</span>
                <span class="price">600 руб</span>
              </li>

              <li>
                <span class="serv">Укладка</span>
                <span class="price">300 руб</span>
              </li>
              
            </ul>
          </div>
        </div>
      </div>

      <div class="pure-g works_grid">
        <div class="our_works_heading pure-u-1 pure-u-xl-1-3">
          <h2>НАШИ РАБОТЫ</h2>
        </div>

        <div class="our_works pure-u-1 pure-u-xl-2-3">
          <div class="our_works_slider owl-carousel" id="worksSlider">
            <?php
            $args = array(
            'numberposts'    => 0,
            'post_type'      => 'portfolio-slider'
            );

            $posts = get_posts( $args );

            foreach ( $posts as $post ) {
              setup_postdata( $post );
              ?>
              <div class="our_works_img">
                <img src="<?php the_field( 'portfolio_img' ); ?>">
              </div>
              <?php
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our_team" id="team">
    <div class="our_team_wrapper container">
      <h2>НАША КОМАНДА</h2>
      <p>Равным образом постоянный количественный рост и сфера нашей активности требуют от нас анализа<br> позиций,
        занимаемых участниками в отношении поставленных задач. </p>
      <div class="masters_holder">
        <div class="masters_cards" id="mastersSlider">
          <?php
          $args = array(
          'numberposts'    => 0,
          'post_type'      => 'team-slider'
          );

          $posts = get_posts( $args );

          foreach ( $posts as $post ) {
            setup_postdata( $post );
            ?>
            <div class="master_wrap">
              <div class="masters_card">
                <div class="masters_cards_text">
                  <h3 class="masters_card_title"><?php the_field( 'team_name' ); ?></h3>
                  <span class="masters_card_job"><?php the_field( 'team_job' ); ?></span>
                  <div>
                    <?php the_field( 'team_desc' ); ?>
                  </div>
                  <div class="masters_cards_button_block">
                    <a href="#" class="masters_cards_button js-signUp-trigger">Записаться к мастеру</a>
                  </div>
                </div>
                <img src="<?php the_field( 'team_photo' ); ?>">
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
          ?>
    
        </div>

        <div class="masters_nav">
          <button class="button-nav button-nav--previous">
            <svg class="svg_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.76 14.7" width="41" height="14">
              <path class="cls-2" d="M26,64.89l6.49-6.73a.38.38,0,0,1,.53,0l1.49,1.36a.38.38,0,0,1,0,.53l-1.86,2.15a.38.38,0,0,0,.29.63H66.51a.39.39,0,0,1,.39.38v1.7"
                transform="translate(-25.64 -57.54)" />
              <path class="cls-2" d="M26,64.89l6.49,6.73a.38.38,0,0,0,.53,0l1.49-1.36a.38.38,0,0,0,0-.53L32.68,67.6A.38.38,0,0,1,33,67H66.51a.39.39,0,0,0,.39-.38v-1.7"
                transform="translate(-25.64 -57.54)" />
            </svg>
          </button>

          <div class="masters_counter">
            <span class="masters_counter_current"></span>
            <span>из</span>
            <span class="masters_counter_total"></span>
          </div>

          <button class="button-nav button-nav--next">
            <svg class="svg_arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.76 14.7" width="41" height="14">
              <path class="cls-2" d="M116.13,64.89l-6.49,6.73a.38.38,0,0,1-.53,0l-1.49-1.36a.38.38,0,0,1,0-.53l1.86-2.15a.38.38,0,0,0-.29-.63H75.62a.38.38,0,0,1-.38-.38v-1.7"
                transform="translate(-74.74 -57.54)" />
              <path class="cls-2" d="M116.13,64.89l-6.49-6.73a.38.38,0,0,0-.53,0l-1.49,1.36a.38.38,0,0,0,0,.53l1.86,2.15a.38.38,0,0,1-.29.63H75.62a.38.38,0,0,0-.38.38v1.7"
                transform="translate(-74.74 -57.54)" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="first_visit_action">
    <div class="first_visit_action_wrapper container">
      <div class="first_visit_col">
        <h2><?php the_field( 'banner_title' ); ?></h2>
        <p><?php the_field( 'banner_desc' ); ?></p>
        <span>*Подробнее об акции расскажет наш специалист</span>
      </div>

      <div class="first_visit_col">
        <div class="first_visit_action_button_block">
          <a href="#" class="button js-discount-trigger">Записаться со скидкой</a>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews" id="reviews">
    <div class="reviews_wrapper container">
      <div class="reviews_first_line">
        <h2>ОТЗЫВЫ О НАС</h2>
        <div class="reviews_block pure-g">
          <div class="pure-u-1 pure-u-xl-7-12">
            <div class="reviews_slider owl-carousel" id="reviewsSlider">
              <?php
              $args = array(
              'numberposts'    => 0,
              'post_type'      => 'reviews-slider'
              );

              $posts = get_posts( $args );
              $item = 1;
              foreach ( $posts as $post ) {
                setup_postdata( $post );
                $review_text = get_field( 'review_text' );
                $text_num_chars = mb_strlen($review_text);
                ?>
                <div class="review_card">
                  <img src="<?php the_field( 'review_photo' ); ?>">
                  <div class="review_card_text">
                    <h3><?php the_field( 'review_name' ); ?></h3>

                    <?php if ($text_num_chars > 260) : ?>
                      <p><?php echo exerpt_text( $review_text ); ?></p>
      
                      <div class="review_modal" id="review_<?php echo $item; ?>">
                        <div class="review_modal_holder">
                          <h3 class="review_modal_title"><?php the_field( 'review_name' ); ?></h3>
                          <div class="review_modal_text">
                            <?php the_field( 'review_text' ); ?>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="review_more"
                        data-fancybox data-touch="false" data-src="#review_<?php echo $item; $item++; ?>">Посмотреть весь отзыв</a>
                    <?php else : ?>
                      <p><?php the_field( 'review_text' ); ?></p>
                    <?php endif; ?>
                  </div>
                </div>

                <?php
              }
              wp_reset_postdata();
              ?>
            </div>
          </div>

          <div class="pure-u-1 pure-u-xl-5-12">
            <div class="review_about">
              <h2 class="about_us_shaddow">О нас пишут,<br>
                Нас советуют!</h2>
              <p>Оставляйте свои отзывы в любой социальной сети,<br>
                а так же читайте честные отзывы о нас</p>
              <div class="reviews_button_block">
                <a href="#" class="reviews_button js-review-trigger">Оставить свой отзыв</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="reviews_second_line pure-g">
        <div class="pure-u-1 pure-u-lg-1-2">
          <div class="news_block" id="news">
            <h2>Новости</h2>

            <?php
            $args = array(
            'numberposts'    => 2,
            'post_type'      => 'news',
            );

            $posts = get_posts( $args );
            $item = 1;

            foreach ( $posts as $post ) {
              setup_postdata( $post );
              ?>

              <div class="news">
                <h3><?php the_title(); ?></h3>
                <span>/<?php the_time( 'd.m.Y' ); ?>/</span>
                <?php the_excerpt(); ?>

                <div class="news_modal" id="news_<?=$item; ?>">
                  <div class="news_modal_holder">
                    <div class="news_modal_meta">/<?php the_time( 'd.m.Y' ); ?>/</div>
                    <h3 class="news_modal_title"><?php the_title(); ?></h3>
                    <div class="news_modal_text">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>

                <a href="#" class="news_more" data-fancybox data-touch="false" data-src="#news_<?=$item; $item++; ?>">Читать далее</a>
              </div>

              <?php
            }
            wp_reset_postdata();
            ?>

            <?php
            $published_posts = wp_count_posts('news')->publish;

            if ($published_posts > 2) : ?>
              <div class="news_extra is_hidden">

                <?php
                $args = array(
                'numberposts'    => 0,
                'post_type'      => 'news',
                'offset'         => 2,
                );

                $posts = get_posts( $args );
                $item = 3;

                foreach ( $posts as $post ) {
                  setup_postdata( $post );
                  ?>

                  <div class="news">
                    <h3><?php the_title(); ?></h3>
                    <span>/<?php the_time( 'd.m.Y' ); ?>/</span>
                    <?php the_excerpt(); ?>
      
                    <div class="news_modal" id="news_<?=$item; ?>">
                      <div class="news_modal_holder">
                        <div class="news_modal_meta">/<?php the_time( 'd.m.Y' ); ?>/</div>
                        <h3 class="news_modal_title"><?php the_title(); ?></h3>
                        <div class="news_modal_text">
                          <?php the_content(); ?>
                        </div>
                      </div>
                    </div>
      
                    <a href="#" class="news_more" data-fancybox data-touch="false" data-src="#news_<?=$item; $item++; ?>">Читать далее</a>
                  </div>

                  <?php
                }
                wp_reset_postdata();
                ?>

              </div>

              <div class="news_button_block">
                <a href="#" class="news_button">ПОСМОТРЕТЬ ВСЕ НОВОСТИ</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
        
        <div class="pure-u-1 pure-u-lg-1-2">
          <div class="actions" id="discount"> 
            <h2>Акции</h2>
            <div class="action_blocks_cont">
              <?php
              $args = array(
              'numberposts'    => 0,
              'post_type'      => 'discount',
              'order'          => 'ASC'
              );

              $posts = get_posts( $args );
              $item = 1;
              foreach ( $posts as $post ) {
                setup_postdata( $post );
                ?>
                <div class="action_block">
                  <div class="action_text <?php if ($item % 2 == 0) : echo "action_text--bottom"; endif; ?>">
                    <h3><?php the_field( 'offer_title' ); ?></h3>
                    <div class="action_desc">
                      <p><?php the_field( 'offer_desc' ); ?></p>
                    </div>
                  </div>
                  <img src="<?php the_field( 'offer_img' ); ?>">
                </div>
                <?php
                $item++;
              }
              wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="call_back_form">
    <div class="call_back_form_wrapper container">
      <div class="call_back_form_col">
        <h2>Форма обратной связи</h2>
        <p>У вас есть вопросы? Нужна консультация?<br>
          оставьте заявку и мы свяжемся с вами!</p>
      </div>
      <div class="call_back_form_col">
        <div class="call_back_button_block">
          <a href="#" class="button js-consult-trigger">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>
      </div>
    </div>
  </section>

  <section class="partners">
    <h2>НАШИ ПАТНЕРЫ</h2>
    <div class="partners_carousel owl-carousel" id="partnersCarousel">
      <?php
      $args = array(
      'numberposts'    => 0,
      'post_type'      => 'partners-slider'
      );

      $posts = get_posts( $args );

      foreach ( $posts as $post ) {
        setup_postdata( $post );
        ?>
        <div class="partner_icon">
          <img src="<?php the_field( 'partner_img' ); ?>">
        </div>
        <?php
      }
      wp_reset_postdata();
      ?>
    </div>
  </section>

  <?php
  $gallery = get_field('gallery');	
  
  if( $gallery ): ?>
  <section class="s_photos">
    <a href="<?php echo $gallery['image_1']; ?>" class="s_photos_item" data-fancybox="gallery">
      <img src="<?php echo $gallery['image_1']; ?>" alt="">
    </a>
    <a href="<?php echo $gallery['image_2']; ?>" class="s_photos_item" data-fancybox="gallery">
      <img src="<?php echo $gallery['image_2']; ?>" alt="">
    </a>
    <a href="<?php echo $gallery['image_3']; ?>" class="s_photos_item" data-fancybox="gallery">
      <img src="<?php echo $gallery['image_3']; ?>" alt="">
    </a>
    <a href="<?php echo $gallery['image_4']; ?>" class="s_photos_item" data-fancybox="gallery">
      <img src="<?php echo $gallery['image_4']; ?>" alt="">
    </a>
  </section>
  <?php endif; ?>

  <section class="contacts">
    <div class="container container--contacts">
      <div class="pure-g">
        <div class="pure-u-1 pure-u-xl-5-12">
          <div class="contacts_data" id="contacts">
            <h2>КОНТАКТЫ</h2>
            <?php
            $contact_phone = get_field('contact_phone');	
            
            if( $contact_phone ): ?>
              <a href="tel:<?php echo $contact_phone['link']; ?>">
                <b style="font-size: 34px; line-height: 1.2; letter-spacing: 1px; text-align: right;">
                <span style="font-weight: normal"><?php echo $contact_phone['code']; ?></span> <?php echo $contact_phone['phone']; ?></b>
              </a><br>
            <?php endif; ?>
            <span style="font-size: 20px; line-height: 1.9; letter-spacing: 0.4px; text-align: right;">
              <?php the_field( 'contact_address' ); ?>
            </span><br>
            <span style="font-size: 18px; line-height: 2; text-align: right;">
              <?php the_field( 'contact_schedule' ); ?>
            </span>
            <div class="social_links">
              <p>Мы в социальных сетях:</p>
              <?php
              $social_media = get_field('social_media');	
              
              if( $social_media ): ?>
                <a href="https://vk.com/<?php echo $social_media['vk']; ?>">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/vk_green.png">
                </a>
                <a href="https://www.instagram.com/<?php echo $social_media['instagram']; ?>">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/inst_green.png">
                </a>
                <a href="https://www.facebook.com/<?php echo $social_media['facebook']; ?>">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/fb_green.png">
                </a>
              <?php endif; ?>
            </div>
            <div class="contacts_line"></div>
            <p>© Мужская парикмахерская Barnaba men's haircuts<br>
              2019& Все права защищены</p>
            <div class="crazy_studio_logo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/crazy-studio.png">
              <p>Сайт спроектирован
                и разработан в Crazy Studio</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="online_notation_button">
      <a href="#" class="js-signUp-trigger">online запись</a>
    </div>

    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19661.79324974106!2d36.64837802436059!3d50.59617848965195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41266a5129e7c903%3A0xef3c96c58673dac3!2z0YPQuy4g0JHQtdC70LPQvtGA0L7QtNGB0LrQvtCz0L4g0J_QvtC70LrQsCwgNjIsINCR0LXQu9Cz0L7RgNC-0LQsINCR0LXQu9Cz0L7RgNC-0LTRgdC60LDRjyDQvtCx0LsuLCAzMDgwMDE!5e0!3m2!1sru!2sru!4v1552336692924"
        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>



  <!-- MODALS -->
  <!-- Modal form sign up -->
  <div class="modalbox modalbox--signUp">
    <div class="modal-container">
      <div class="modal-body">
        <form action="" class="modal-form">
          <button type="button" class="btn-modal-close"></button>
          <p class="modal-form__title">Online запись</p>

          <div class="modal-form__controls">
            <div class="form-control__wrap">
              <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Ваше имя*">
            </div>
            <div class="form-control__wrap">
              <input type="tel" class="form-control" name="user-phone" id="user-phone" placeholder="Телефон*">
            </div>
            <div class="form-control__wrap">
              <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Email">
            </div>
            <div class="form-control__wrap form-control__wrap--textarea">
              <textarea class="form-control form-control--textarea" name="user-message" id="user-message" placeholder="Сообщение*"></textarea>
            </div>
          </div>

          <div class="button-row button-holder--modal">
            <button type="button" class="button">Оставить заявку</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- .modalbox end -->


  <!-- Modal form consult -->
  <div class="modalbox modalbox--consult">
    <div class="modal-container">
      <div class="modal-body">
        <form action="" class="modal-form">
          <button type="button" class="btn-modal-close"></button>
          <p class="modal-form__title">Требуется консультация?</p>

          <div class="modal-form__controls">
            <div class="form-control__wrap">
              <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Ваше имя*">
            </div>
            <div class="form-control__wrap">
              <input type="tel" class="form-control" name="user-phone" id="user-phone" placeholder="Телефон*">
            </div>
            <div class="form-control__wrap">
              <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Email">
            </div>
            <div class="form-control__wrap form-control__wrap--textarea">
              <textarea class="form-control form-control--textarea" name="user-message" id="user-message" placeholder="Сообщение*"></textarea>
            </div>
          </div>

          <div class="button-row button-holder--modal">
            <button type="button" class="button">Оставить заявку</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- .modalbox end -->


  <!-- Modal form review -->
  <div class="modalbox modalbox--review">
    <div class="modal-container">
      <div class="modal-body">
        <form action="" class="modal-form">
          <button type="button" class="btn-modal-close"></button>
          <p class="modal-form__title">Ваш отзыв</p>

          <div class="modal-form__controls">
            <div class="form-control__wrap">
              <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Ваше имя*">
            </div>
            <div class="form-control__wrap">
              <input type="tel" class="form-control" name="user-phone" id="user-phone" placeholder="Телефон*">
            </div>
            <div class="form-control__wrap">
              <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Email">
            </div>
            <div class="form-control__wrap form-control__wrap--textarea">
              <textarea class="form-control form-control--textarea" name="user-message" id="user-message" placeholder="Сообщение*"></textarea>
            </div>
          </div>

          <div class="button-row button-holder--modal">
            <button type="button" class="button">Отправить</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- .modalbox end -->

  <!-- Modal form discount -->
  <div class="modalbox modalbox--discount">
    <div class="modal-container">
      <div class="modal-body">
        <form action="" class="modal-form">
          <button type="button" class="btn-modal-close"></button>
          <p class="modal-form__title">Акция на первое посещение</p>

          <div class="modal-form__controls">
            <div class="form-control__wrap">
              <input type="text" class="form-control" name="user-name" id="user-name" placeholder="Ваше имя*">
            </div>
            <div class="form-control__wrap">
              <input type="tel" class="form-control" name="user-phone" id="user-phone" placeholder="Телефон*">
            </div>
            <div class="form-control__wrap">
              <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Email">
            </div>
            <div class="form-control__wrap form-control__wrap--textarea">
              <textarea class="form-control form-control--textarea" name="user-message" id="user-message" placeholder="Сообщение*"></textarea>
            </div>
          </div>

          <div class="button-row button-holder--modal">
            <button type="button" class="button">Записаться</button>
          </div>
        </form>
      </div>
    </div>
  </div><!-- .modalbox end -->


  <?php wp_footer(); ?>
</body>

</html>