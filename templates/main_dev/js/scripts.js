$(function () {
  let screenWidth = screen.width;

  /*
   *  Fixed header
   */

  if (screenWidth > 1599) {
    $(window).scroll(function () {
      const header = $('.site-header');
      let fromTop = $(window).scrollTop();

      if (fromTop > 150) {
        // header.children('.site-header-fixed').addClass('show');
        header.children('.site-header-fixed').slideDown('fast');
        // $('main').css('margin-top', '156px');
      } else {
        header.children('.site-header-fixed').hide();
        // $('main').css('margin-top', '0');
      }
    });
  }

  /*
   *  Dropdown
   */

  if (screenWidth > 1599) {
    $('.js-menu-toggle').hover(
      function () {
        $(this).find('.dropdown').slideDown().siblings('a').css('background-color', '#d0fd89');
      },
      function () {
        $(this).find('.dropdown').slideUp().siblings('a').css('background-color', 'transparent');
      },
      200
    );
  } else {
    $('.js-menu-toggle > a').click(function (e) {
      e.preventDefault();
      $(this).toggleClass('open').siblings('.dropdown').slideToggle();
    });
  }

  /*
   *  Mobile menu
   */

  $('.menu-toggle').click(function () {
    $(this).toggleClass('open');
    $('.mobile-menu').slideToggle();
  });

  /*
   *  Scroll Up
   */

  $('.scrollup').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 600);
    return false;
  });

  if (screenWidth < 1600) {
    $('.scrollup').fadeOut();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 250) {
        $('.scrollup').fadeIn();
      } else {
        $('.scrollup').fadeOut();
      }
    });
  }

  /*
   *  Carousels
   */

  $('.banner-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
  });

  $('.promo-bg-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
  });

  $('.promo-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
    responsive: [
      {
        breakpoint: 1600,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $('.catalog-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
  });

  $('.product-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    // prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    // nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
    prevArrow: '<button class="prev" type="button"><span class="product-carousel-arrow product-carousel-arrow--prev"></span></button>',
    nextArrow: '<button class="next" type="button"><span class="product-carousel-arrow product-carousel-arrow--next"></span></button>',
  });

  $('.product-carousel-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.product-carousel',
    focusOnSelect: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });

  if (screenWidth < 1200) {
    $('.gallery__row:not(.slick-initialised)').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: false,
      autoplay: true,
      autoplaySpeed: 6000,
      speed: 800,
      prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-left"></svg></button>',
      nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-right"></svg></button>',
    });
  }

  $('.full-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 6000,
    speed: 800,
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-left"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-right"></svg></button>',
  });

  $('.built__carousel').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    autoplay: false,
    autoplaySpeed: 4000,
    fade: false,
    asNavFor: '.built__thumbs',
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
  });

  $('.built__thumbs').slick({
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    swipeToSlide: true,
    asNavFor: '.built__carousel',
    dots: false,
    focusOnSelect: true,
    arrows: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 414,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });

  $('.hot-promo__carousel').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 800,
    arrows: false,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $('.reviews').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 800,
    prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#left-arrow"></svg></button>',
    nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#right-arrow"></svg></button>',
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  /*
   *  Modal
   */

  $('.js-modal-show').on('click', function () {
    let currentModal = $(this).attr('href');
    $(currentModal).fadeIn(500);
    $('body').css('overflow', 'hidden');
    if ($(currentModal).find('.modal-carousel').length > 0) {
      $('.modal-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 6000,
        speed: 800,
        asNavFor: '.modal-thumbs',
        prevArrow: '<button class="prev" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-left"></svg></button>',
        nextArrow: '<button class="next" type="button"><svg><use href="/local/templates/main/img/icons/sprite.svg#arrow-right"></svg></button>',
      });
    }
    if ($(currentModal).find('.modal-thumbs').length > 0) {
      $('.modal-thumbs').slick({
        infinite: true,
        slidesToShow: 8,
        slidesToScroll: 1,
        asNavFor: '.modal-carousel',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        responsive: [
          {
            breakpoint: 1600,
            settings: {
              slidesToShow: 6,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 5,
            },
          },
        ],
      });
    }
  });

  $('.js-modal-close').on('click', function (e) {
    e.preventDefault();
    let modalWindow = $(this).parents('.js-modal');
    if ($(modalWindow).find('.modal-carousel').length > 0 && $('.modal-carousel').hasClass('slick-initialized')) {
      $('.modal-carousel').slick('unslick');
    }
    if ($(modalWindow).find('.modal-thumbs').length > 0 && $('.modal-thumbs').hasClass('slick-initialized')) {
      $('.modal-thumbs').slick('unslick');
    }
    $('.js-modal').fadeOut(100);
    $('body').css('overflow', 'visible');
  });

  $('body').on('click', '.js-modal', function (e) {
    if (e.target.classList.contains('js-modal')) {
      $('.js-modal').fadeOut(100);
      $('body').css('overflow', 'visible');
    }
    e.stopPropagation();
  });

  /*
   *   Маска телефона
   */

  $('.phone').mask('+7 (999) 999-99-99');

  /*
   *  Tabs
   */

  $('.tabs-nav a').click(function (e) {
    e.preventDefault();
    let link = $(this).attr('href');

    $(this).parent('li').addClass('active').siblings('li').removeClass('active');
    $(link).addClass('active').siblings('.tab').removeClass('active');
  });

  $('.gallery__nav a').click(function (e) {
    e.preventDefault();
    let link = $(this).attr('href');

    $(this).parent('li').addClass('active').siblings('li').removeClass('active');
    $(link).addClass('active').siblings('.tab').removeClass('active');
  });

  $('.promo__nav a').click(function (e) {
    e.preventDefault();
    let link = $(this).data('target');

    $(this).parent('li').addClass('active').siblings('li').removeClass('active');
    $(link).addClass('active').siblings('.tab').removeClass('active');
  });

  /*
   *  Select form
   */

  $('.js-select-btn').click(function () {
    let link = $(this).find('input').data('target');
    $(link).addClass('active').fadeIn().siblings('.select-form__section').hide().removeClass('active');
  });

  /*
   *  Sort price
   */

  let rotation = 0;

  jQuery.fn.rotate = function (degrees) {
    $(this).css({ transform: 'rotateX(' + degrees + 'deg)' });
  };

  $('.sort-price__toggle').click(function (e) {
    e.preventDefault();
    rotation += 180;
    $(this).rotate(rotation);
    location.href = $(this).attr('href');
  });

  /*
   *  Select
   */

  $('.select').each(function () {
    const _this = $(this),
      selectOption = _this.find('option'),
      selectOptionLength = selectOption.length,
      selectedOption = selectOption.filter(':selected'),
      duration = 450;

    _this.hide();
    _this.wrap('<div class="select"></div>');
    $('<div>', {
      class: 'new-select',
      text: _this.children('option:disabled').text(),
    }).insertAfter(_this);

    const selectHead = _this.next('.new-select');
    $('<div>', {
      class: 'new-select__list',
    }).insertAfter(selectHead);

    const selectList = selectHead.next('.new-select__list');
    for (let i = 1; i < selectOptionLength; i++) {
      $('<div>', {
        class: 'new-select__item',
        html: $('<span>', {
          text: selectOption.eq(i).text(),
        }),
      })
        .attr('data-value', selectOption.eq(i).val())
        .appendTo(selectList);
    }

    const selectItem = selectList.find('.new-select__item');
    selectList.slideUp(0);
    selectHead.on('click', function () {
      if (!$(this).hasClass('on')) {
        $(this).addClass('on');
        selectList.slideDown(duration);

        selectItem.on('click', function () {
          $(this).addClass('active').siblings('.new-select__item').removeClass('active');
          let chooseItem = $(this).data('value');

          $('select').val(chooseItem).attr('selected', 'selected');
          selectHead.text($(this).find('span').text());

          selectList.slideUp(duration);
          selectHead.removeClass('on');
        });
      } else {
        $(this).removeClass('on');
        selectList.slideUp(duration);
      }
    });
  });

  $('.select.selected').each(function () {
    const selectedOption = $(this).find('option:selected');
    const arrayOptions = $(this).find('option');
    const textOption = selectedOption.text();
    const indexItem = arrayOptions.index(selectedOption);
    const selectedItem = $($(this).siblings('.new-select__list').find('.new-select__item'))[indexItem - 1];
    $(selectedItem).addClass('active');
    $(this).next('.new-select').addClass('selected').html(textOption);
  });

  /*
   *  Switching the product list view
   */

  $('.view-list__btn--three').click(function (e) {
    e.preventDefault();
    const self = $(this);
    const row = $('.category__row');

    if (row.hasClass('category__row--half')) {
      row.css('opacity', '0');
      setTimeout(function () {
        row.removeClass('category__row--half').find('.card').removeClass('card--lg');
        row.css('opacity', '1');
        self.addClass('active').siblings('.view-list__btn--two').removeClass('active');
      }, 350);
    }
  });

  $('.view-list__btn--two').click(function (e) {
    e.preventDefault();
    const self = $(this);
    const row = $('.category__row');

    if (!row.hasClass('category__row--half')) {
      row.css('opacity', '0');
      setTimeout(function () {
        row.addClass('category__row--half').find('.card').addClass('card--lg');
        row.css('opacity', '1');
        self.addClass('active').siblings('.view-list__btn--three').removeClass('active');
      }, 350);
    }
  });

  /*
   *  Open product description
   */

  $('.desc__full-toggle').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('open').siblings('.desc__text').find('.desc__full').slideToggle();
  });

  $('.desc__toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('open').siblings('.desc__text').toggleClass('open');

    if ($(this).hasClass('open')) {
      $(this).find('span').text('Свернуть описание');
    } else {
      $(this).find('span').text('Развернуть описание');
    }
  });

  /*
   *  Select the configuration
   */

  $('.eq-table__btn').click(function (e) {
    e.preventDefault();
    const self = $(this);
    const name = self.siblings('.eq-table__name').text();
    const price = self.siblings('.eq-table__price').text();

    $('.eq-selected__name').text(name);
    $('.eq-selected__price').text(price);
  });

  /*
   *  Toggle map
   */

  $('.landmap__toggle').click(function (e) {
    e.preventDefault();
    if ($(this).hasClass('close')) {
      $(this).removeClass('close').find('span').text('Свернуть карту');
      $('.landmap__map').slideDown();
    } else {
      $(this).addClass('close').find('span').text('Развернуть карту');
      $('.landmap__map').slideUp();
    }
  });

  /*
   *  Validation form
   *  https://github.com/posabsolute/jQuery-Validation-Engine
   */

  $('#form-request').validationEngine();

  /*
   *  Загрузка файла
   */

  $('.form-file input[type=file]').change(function () {
    var formFile = $(this).parents('.form-file');
    var fileName = $(this).val().replace(/.*\\/, '');
    formFile.find('.filename').text(fileName);
  });

  /*
   *  Filter
   */

  if (screenWidth < 1200) {
    $('.filter__floors-label span').on('click', function () {
      $(this).addClass('active');
      $('.filter__size-label span').removeClass('active');
      $('.filter__size').hide();
      $('.filter__floors').fadeIn().css('display', 'flex');
    });

    $('.filter__size-label span').on('click', function () {
      $(this).addClass('active');
      $('.filter__floors-label span').removeClass('active');
      $('.filter__floors').hide();
      $('.filter__size').fadeIn().css('display', 'flex');
    });
  }

  /*
   *  Таблица комплектаций
   */

  $('.eq-table__toggle').on('click', function () {
    $(this).toggleClass('open').siblings('.eq-table__body').slideToggle();
    $(this).find('span').toggle();
  });

  /*
   * Акции, банки, кредитование
   */

  $('.p-finance__toggle').on('click', function () {
    $(this).toggleClass('open').parents('.p-finance').find('.p-finance__wrap').slideToggle();

    $('.hot-promo__carousel').slick('setPosition');
  });

  /*
   * Акции, банки, кредитование
   */
});
