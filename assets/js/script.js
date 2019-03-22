
(function ($) {

  /*----------------------------------------------------*/
  /*  #READMORE INIT
  /*----------------------------------------------------*/
  $('.about_us_desc').readmore({
    collapsedHeight: 260,
    speed: 250,
    moreLink: '<a class="more-btn" href="#">Прочитать больше о нас</a>',
    lessLink: '<a class="more-btn" href="#">Свернуть</a>'
  });

  /*----------------------------------------------------*/
  /*  #TABS
  /*----------------------------------------------------*/

  $('.service_list_button').click(function (e) { 
    e.preventDefault();
    
    if ( !$(this).hasClass('is-active') ) {
      $('.service_list_button').removeClass('is-active');
      $(this).addClass('is-active');
    }

    var buttonID = $(this).attr('id');
    $('.price_table').removeClass('is-open');
    $('.price_table.'+buttonID).addClass('is-open');

  });


  /*----------------------------------------------------*/
  /*  #SHOW MENU
  /*----------------------------------------------------*/

  $('#hamburger').click(function (e) { 
    e.preventDefault();
    $('.menu-overlay, .menu-wrapper').addClass('is-active');
  });

  $('.menu-overlay, .nav-item').click(function (e) { 
    $('.menu-overlay, .menu-wrapper').removeClass('is-active');
  });


  /*----------------------------------------------------*/
  /*	#ANIMATED SCROLL TO ANCHOR
  /*----------------------------------------------------*/

  jQuery(document).ready(function($){

    "use strict";
    $.fn.scrollTo = function( options ) {

      var settings = {
        offset : -60,       //an integer allowing you to offset the position by a certain number of pixels. Can be negative or positive
        speed : 'slow',   //speed at which the scroll animates
        override : null,  //if you want to override the default way this plugin works, pass in the ID of the element you want to scroll through here
        easing : null //easing equation for the animation. Supports easing plugin as well (http://gsgd.co.uk/sandbox/jquery/easing/)
      };

      if (options) {
        if(options.override){
          //if they choose to override, make sure the hash is there
          options.override = (override('#') != -1)? options.override:'#' + options.override;
        }
        $.extend( settings, options );
      }

      return this.each(function(i, el){
        $(el).click(function(e){
          var idToLookAt;
          if ($(el).attr('href').match(/#/) !== null) {
            e.preventDefault();
            idToLookAt = (settings.override)? settings.override:$(el).attr('href');//see if the user is forcing an ID they want to use
            //if the browser supports it, we push the hash into the pushState for better linking later
            if(history.pushState){
              history.pushState(null, null, idToLookAt);
              $('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing);
            }else{
              //if the browser doesn't support pushState, we set the hash after the animation, which may cause issues if you use offset
              $('html,body').stop().animate({scrollTop: $(idToLookAt).offset().top + settings.offset}, settings.speed, settings.easing,function(e){
                //set the hash of the window for better linking
                window.location.hash = idToLookAt;
              });
            }
          }
        });
      });
    };

    $('#to_hero, #to_about, #to_services, #to_news, #to_discount, #to_contacts' ).scrollTo({ speed: 1400 });

  });


  /*----------------------------------------------------*/
  /*  #CAROUSELS - WORKS, REVIEWS, PARTNERS
  /*----------------------------------------------------*/

  $('#worksSlider').owlCarousel({
    items: 1,
    nav: true,
    dots: false,
    navContainerClass: 'works-nav slider-nav',
    navText: [`<a href="javascript:void(0)" onclick="void(0)" class="prev button--navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.7 18.44" width="59" height="18" class="svg_arrow">
    <path class="cls-1" d="M74.81,45.77V42.7a.38.38,0,0,0-.39-.39H23.89a.39.39,0,0,1-.28-.67l3.44-3.42a.4.4,0,0,0,0-.58l-2.24-2a.39.39,0,0,0-.54,0L16,44.32v1.45l8.27,8.6a.39.39,0,0,0,.53,0l2.26-2a.39.39,0,0,0,0-.57L23.6,48.44a.39.39,0,0,1,.28-.66H74.43a.39.39,0,0,0,.38-.39V45.77"
      transform="translate(-15.48 -35.1)" />
    <path class="cls-1" d="M45.62,32.32" transform="translate(-15.48 -35.1)" />
    </svg></a>`, `<a href="javascript:void(0)" onclick="void(0)" class="next button--navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.7 18.44" width="59" height="18" class="svg_arrow">
    <path class="cls-1" d="M91.84,27.43" transform="translate(-66.4 -4.76)" />
    <path class="cls-1" d="M66.9,14v3.07a.38.38,0,0,0,.39.39h50.53a.39.39,0,0,1,.28.67l-3.44,3.43a.39.39,0,0,0,0,.57l2.24,1.95a.38.38,0,0,0,.54,0l8.28-8.6V14l-8.28-8.6a.39.39,0,0,0-.53,0l-2.25,2a.39.39,0,0,0,0,.57l3.45,3.43a.39.39,0,0,1-.28.66H67.28a.39.39,0,0,0-.38.39V14"
      transform="translate(-66.4 -4.76)" />
    <path class="cls-1" d="M96.09,27.43" transform="translate(-66.4 -4.76)" />
    </svg></a>`],
    navElement: 'div',
    loop:true,
  });



  $('#reviewsSlider').owlCarousel({
    items: 1,
    nav: true,
    dots: false,
    navContainerClass: 'reviews-nav slider-nav',
    navText: [`<a href="javascript:void(0)" onclick="void(0)" class="prev button--navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.7 18.44" width="59" height="18" class="svg_arrow">
    <path class="cls-1" d="M74.81,45.77V42.7a.38.38,0,0,0-.39-.39H23.89a.39.39,0,0,1-.28-.67l3.44-3.42a.4.4,0,0,0,0-.58l-2.24-2a.39.39,0,0,0-.54,0L16,44.32v1.45l8.27,8.6a.39.39,0,0,0,.53,0l2.26-2a.39.39,0,0,0,0-.57L23.6,48.44a.39.39,0,0,1,.28-.66H74.43a.39.39,0,0,0,.38-.39V45.77"
      transform="translate(-15.48 -35.1)" />
    <path class="cls-1" d="M45.62,32.32" transform="translate(-15.48 -35.1)" />
    </svg></a>`, `<a href="javascript:void(0)" onclick="void(0)" class="next button--navigation"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.7 18.44" width="59" height="18" class="svg_arrow">
    <path class="cls-1" d="M91.84,27.43" transform="translate(-66.4 -4.76)" />
    <path class="cls-1" d="M66.9,14v3.07a.38.38,0,0,0,.39.39h50.53a.39.39,0,0,1,.28.67l-3.44,3.43a.39.39,0,0,0,0,.57l2.24,1.95a.38.38,0,0,0,.54,0l8.28-8.6V14l-8.28-8.6a.39.39,0,0,0-.53,0l-2.25,2a.39.39,0,0,0,0,.57l3.45,3.43a.39.39,0,0,1-.28.66H67.28a.39.39,0,0,0-.38.39V14"
      transform="translate(-66.4 -4.76)" />
    <path class="cls-1" d="M96.09,27.43" transform="translate(-66.4 -4.76)" />
    </svg></a>`],
    navElement: 'div',
    loop:true,
  });



  $('#partnersCarousel').owlCarousel({
    items: 3,
    margin:20,
    nav: false,
    dots: false,
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive: {
      450: {
        items: 4,
      },
      576: {
        items: 4,
        margin:40,
      },
      768: {
        items: 6,
        margin:40,
      },
      992: {
        items: 6,
        margin:80,
      },
      1280: {
        items: 6,
        margin:130,
      }
    }
  });


  /*----------------------------------------------------*/
  /*  #SHOW ALL NEWS
  /*----------------------------------------------------*/

  $('.news_button').click(function (e) { 
    e.preventDefault();
    $('.news_extra').removeClass('is_hidden');
    $('.news_button_block').addClass('is_hidden');
  });

})(jQuery);




/*----------------------------------------------------*/
/*  #HERO CAROUSEL
/*----------------------------------------------------*/

(function($) {

  var $carousel = $('.js-hero-slider').flickity({
    wrapAround: true,
    freeScroll: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: false,
    setGallerySize: false,
    autoPlay: 4000,
    pauseAutoPlayOnHover: false,
  });

  /**
   * #CUSTOM UI
   */
  // Flickity instance
  var flkty = $carousel.data('flickity');
  // elements
  var $cellButtonGroup = $('.carousel_numbers');
  var $cellButtons = $cellButtonGroup.find('.carousel_number');

  // update selected cellButtons
  $carousel.on( 'select.flickity', function() {
    $cellButtons.filter('.active')
      .removeClass('active');
    $cellButtons.eq( flkty.selectedIndex )
      .addClass('active');
  });

  // select cell on button click
  $cellButtonGroup.on( 'click', '.carousel_number', function() {
    var index = ($(this).index() - 1) / 2; // lines cause offset
    $carousel.flickity( 'select', index );
  });

})(jQuery);




/*----------------------------------------------------*/
/*  #FLICKITY PROTOTYPE SIBLING SELECTOR
/*----------------------------------------------------*/

(function() {

  Flickity.createMethods.push('_createPrevNextCells');

  Flickity.prototype._createPrevNextCells = function () {
    this.on('select', this.setPrevNextCells);
  };

  Flickity.prototype.setPrevNextCells = function () {
    // remove classes
    changeSlideClasses(this.previousSlide, 'remove', 'is-previous');
    changeSlideClasses(this.nextSlide, 'remove', 'is-next');
    changeSlideClasses(this.previousSlide2, 'remove', 'is-previous-previous');
    changeSlideClasses(this.nextSlide2, 'remove', 'is-next-next');
    // set slides
    var previousI = fizzyUIUtils.modulo(this.selectedIndex - 1, this.slides.length);
    var previousII = fizzyUIUtils.modulo(this.selectedIndex - 2, this.slides.length);
    var nextI = fizzyUIUtils.modulo(this.selectedIndex + 1, this.slides.length);
    var nextII = fizzyUIUtils.modulo(this.selectedIndex + 2, this.slides.length);
    this.previousSlide = this.slides[previousI];
    this.nextSlide = this.slides[nextI];
    this.previousSlide2 = this.slides[previousII];
    this.nextSlide2 = this.slides[nextII];
    // add classes
    changeSlideClasses(this.previousSlide, 'add', 'is-previous');
    changeSlideClasses(this.nextSlide, 'add', 'is-next');
    changeSlideClasses(this.previousSlide2, 'add', 'is-previous-previous');
    changeSlideClasses(this.nextSlide2, 'add', 'is-next-next');
  };

  function changeSlideClasses(slide, method, className) {
    if (!slide) {
      return;
    }
    slide.getCellElements().forEach(function (cellElem) {
      cellElem.classList[method](className);
    });
  }

})();




/*----------------------------------------------------*/
/*  #MASTERS CAROUSEL
/*----------------------------------------------------*/

(function($) {

  var options = {
    wrapAround: true,
    freeScroll: true,
    prevNextButtons: false,
    pageDots: false,
    draggable: false,
    setGallerySize: true,
  }

  var $carousel = $('#mastersSlider').flickity(options);

  /**
   * #CUSTOM UI
   */

  // previous
  $('.masters_nav .button-nav--previous').on( 'click', function() {
    $carousel.flickity('previous');
  });
  // next
  $('.masters_nav .button-nav--next').on( 'click', function() {
    $carousel.flickity('next');
  });

  /**
   * #COUNTER
   */

  // get instance
  var flkty = $carousel.data('flickity');

  function updateCounter() {
    var cellNumber = flkty.selectedIndex + 1;
    $('.masters_counter_current').text(cellNumber);
    $('.masters_counter_total').text(flkty.slides.length);
  }

  // Update Counter
  updateCounter();
  $carousel.on( 'select.flickity', updateCounter );

  if ( matchMedia('screen and (min-width: 992px)').matches ) {
    options.setGallerySize = false;
  }

  $(window).on('resize', function () {
    if ( matchMedia('screen and (min-width: 992px)').matches ) {
      options.setGallerySize = false;
    }
  });

})(jQuery);



/*----------------------------------------------------*/
/*  #SHOW MODAL FORMS
/*----------------------------------------------------*/

(function ($) {

  $('.js-signUp-trigger').click(function (i) {
    i.preventDefault();

    $('.modalbox--signUp').addClass('is-active');
  });

  $('.js-consult-trigger').click(function (e) {
    e.preventDefault();

    $('.modalbox--consult').addClass('is-active');
  });

  $('.js-review-trigger').click(function (e) {
    e.preventDefault();

    $('.modalbox--review').addClass('is-active');
  });

  $('.js-discount-trigger').click(function (e) {
    e.preventDefault();

    $('.modalbox--discount').addClass('is-active');
  });

  // Hide Form
  $('.btn-modal-close').click(function (i) {
    i.preventDefault();

    if ( $('.modalbox').hasClass('is-active') )
    $('.modalbox').removeClass('is-active');
  });

  $(document).on('keydown', function(e) {
    if ($('.modalbox').hasClass('is-active') && e.keyCode == 27) {
      $('.modalbox').removeClass('is-active');
    }
  });

})(jQuery);


/*----------------------------------------------------*/
/*  Show/hide form answer
/*----------------------------------------------------*/

(function() {
  // Containers
  var forms = document.querySelectorAll('.js-modal-form');
  forms = Array.prototype.slice.call(forms, 0);

  // Forms
  var wpcf7Elms = document.querySelectorAll('.wpcf7');
  wpcf7Elms = Array.prototype.slice.call(wpcf7Elms, 0);

  // Answers
  var answer = document.querySelector('.modalbox--answer');
  var answerTextEl = document.querySelector('.modalbox--answer .modal-form__title');


  function hideForm() {
    forms.forEach(function(form) {
      if (form.classList.contains('is-active')) {
        form.classList.remove('is-active');
      }
    });
  }

  function hideAnswer() {
    if (answer.classList.contains('is-active')) {
      setTimeout(function() {
        answer.classList.remove('is-active');
        answerTextEl.textContent = "";
      }, 3000);
    }
  }

  wpcf7Elms.forEach(function(item) {

    item.addEventListener('wpcf7mailsent', function() {
      hideForm();
      answer.classList.add('is-active');
      answerTextEl.textContent = "Отправлено!";
      hideAnswer();
    });

    item.addEventListener( 'wpcf7mailfailed', function() {
      hideForm();
      answer.classList.add('is-active');
      answerTextEl.textContent = "Ошибка! Попробуйте позже.";
      hideAnswer();
    });

  });
})();