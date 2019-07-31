import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal';
import Cocoen from 'cocoen';
import 'cocoen/dist/css/cocoen.min.css';
import 'flickity/dist/flickity.css';
import IMask from 'imask';

window.jQuery = window.$ = jquery;

(function () {

  /**
   * Burger-menu
   */
  $('.burger-menu').click(function () {
    var menu = $('.menu');
    $(this).toggleClass('active');
    menu.toggleClass('active');
  });

  /**
   * Fix menu
   */
  var scrollTimeout;
  $(window).on('scroll', function () {
    $('.burger-menu').removeClass('active');
    $('.menu').removeClass('active');
    if ($(this).scrollTop() > 20) {
      $('#app-header').addClass('is-fixed');
    } else {
      $('#app-header').removeClass('is-fixed');
    }
    if ($(this).scrollTop() > $('#advantages').offset().top - 150) {
      $('.advantages-item').addClass('active');
    }
    if ($(this).scrollTop() > $('#response').offset().top - 250) {
      $('#response').addClass('active');
    }
    // if ($(this).scrollTop() > $('#stages').offset().top) {
    //   if (scrollTimeout) {
    //     clearTimeout(scrollTimeout);
    //     scrollTimeout = null;
    //   }
    //   scrollTimeout = setInterval(stagesCardAddActiveInterval, 1500);
    // }
  });

  /**
   * Scroll
   */
  $(".scroll-link").on("click", function (event) {
    event.preventDefault();

    var id = $(this).attr('href');

    if (id.length > 1) {

      var top = ($(id).offset().top - $('#app-header').height());

      $('body,html').animate({
        scrollTop: top
      }, 1500);

      $('.burger-menu').removeClass('active');
      $('.menu').removeClass('active');
    }
  });

  /**
   * Footer secondary
   */
  $('.secondary-footer').css('margin-top', '-' + $('.secondary-footer').innerHeight() + 'px');

  /**
   * Form
   */
  $('.form-control').on('focus', function () {
    $(this).parents('.form-group').addClass('in-focus');
  });

  $('.form-control').on('blur', function () {
    if ($(this).val() !== "") {
      $(this).parents('.form-group').addClass('in-focus');
    } else {
      $(this).parents('.form-group').removeClass('in-focus');
    }
  });

  /**
   * Modal
   */
  $('.open-modal-car').on('click', function (e) {
    e.preventDefault();
    const car = JSON.parse(JSON.stringify($(this).data('car')));
    const $modal = $('.custom-modal--car');

    $modal.find($('.car-modal__image')).css({
      background: `url(${car.image}) 50% 50% / cover no-repeat`
    });
    $modal.find($('.car-modal__title')).text(car.title);
    $modal.find($('.car-modal__price').text(car.priceInUSA));

    $('[name="car"]').val(car.title);

    car.settings.forEach((item, i) => {
      $modal.find($(`.table tr:eq(${i}) td:eq(1)`).html('$ <strong>'+item+'</strong>'));
    });

    $modal.addClass('active');
    $('.modal-mask').addClass('active');
  });

  $('.teams-item').on('click', function (e) {
    e.preventDefault();
    var dataImage = $(this).data('image');
    var dataName = $(this).data('name');
    var dataPosition = $(this).data('position');
    var dataDescription = $(this).data('description');
    var $modalTeam = $('.custom-modal--team');

    // console.log(team);

    $modalTeam.find($('.img')).css({
      background: `url(${dataImage}) 50% 50% / cover no-repeat`
    });
    $modalTeam.find($('.name')).text(dataName);
    $modalTeam.find($('.position').text(dataPosition));
    $modalTeam.find($('.description').text(dataDescription));

    $modalTeam.addClass('active');
    $('.modal-mask').addClass('active');
  });

  $('.open-send-modal').on('click', function() {
    const car = $(this).data('title');
    $('.custom-modal--car').removeClass('active');
    $('.custom-modal--comparison').addClass('active');
  });
  $('.close-modal').on('click', function () {
    $('.custom-modal').removeClass('active');
    $('.modal-mask').removeClass('active');
  });
  $('.modal-mask').on('click', function () {
    $('.custom-modal').removeClass('active');
    $('.modal-mask').removeClass('active');
  });

    /**
     * Youtube video
     */
    $('[data-src]').on('click', function () {
        var id = $(this).data('src'),
            padding = $(window).width() > 768 ? 120 : 30,
            ratio = 608 / 1080,
            width = $(window).width() - padding,
            height = width * ratio,
            html = '<iframe style="width: ' + width + 'px; height: ' + height + 'px;" ' +
                'src="' +
                id + '" frameborder="0" gesture="media" allowfullscreen></iframe>';

        $('body').append('<div class="outer">' + html + '</div>');
    });

    $(document).mouseup(function (e) {
        var container = $('.outer iframe');

        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.outer').remove();
        }
    });

    $(document).on('keyup', function (e) {
        if (e.keyCode === 27) {
            $('.outer').remove();
        }
    })

  /**
   * Phone mask
   * @type {*|jQuery.fn.init|jQuery|HTMLElement}
   */
  const phones = $('[type="tel"]');
  Array.from(phones).forEach(phone => {
    new IMask(phone, {
      mask: '+{38} (000) 000-00-00'
    });
  });


  /**
   * Sliders
   */
  if ($('.reviews-slider')) {

    var elem1 = document.querySelector('.reviews-slider');
    if (elem1) {

      const flkty1 = new Flickity(elem1, {
        prevNextButtons: false,
        cellAlign: 'center',
        contain: false,
        initialIndex: 1,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowReviews = document.querySelector('.slider-arrow-item--prev-reviews');

      prevArrowReviews.addEventListener('click', function () {
        flkty1.previous(true, false);
      });

      var nextArrowReviews = document.querySelector('.slider-arrow-item--next-reviews');

      nextArrowReviews.addEventListener('click', function () {
        flkty1.next(true, false);
      });
    }
  }

  if ($('.saving-slider')) {

    var elem2 = document.querySelector('.saving-slider');
    if (elem2) {

      const flkty2 = new Flickity(elem2, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: false,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowSaving = document.querySelector('.slider-arrow-item--prev-saving');

      prevArrowSaving.addEventListener('click', function () {
        flkty2.previous(true, false);
      });

      var nextArrowSaving = document.querySelector('.slider-arrow-item--next-saving');

      nextArrowSaving.addEventListener('click', function () {
        flkty2.next(true, false);
      });
    }
  }

  if ($('.comparison-slider')) {
    const elem3 = $('.comparison-slider');
    const options = {
      prevNextButtons: false,
      cellAlign: 'center',
      autoPlay: 6000,
      contain: false,
      draggable: true,
      wrapAround: true,
    };
    if (elem3.length) {
      new Flickity(elem3[0], options);

      const flkty3 = new Flickity(elem3[1], options);
      var prevArrowComparison = document.querySelector('.slider-arrow-item--prev-comparison');
      prevArrowComparison.addEventListener('click', function () {
        flkty3.previous(false, false);
      });

      var nextArrowComparison = document.querySelector('.slider-arrow-item--next-comparison');
      nextArrowComparison.addEventListener('click', function () {
        flkty3.next(false, false);
      });
    }
  }


  if ($('.teams-slider')) {

    var elem4 = document.querySelector('.teams-slider');
    if (elem4) {

      const flkty4 = new Flickity(elem4, {
        prevNextButtons: false,
        cellAlign: 'left',
        contain: false,
        draggable: true,
        wrapAround: true,
      });

      var prevArrowTeams = document.querySelector('.slider-arrow-item--prev-teams');

      prevArrowTeams.addEventListener('click', function () {
        flkty4.previous(true, false);
      });

      var nextArrowTeams = document.querySelector('.slider-arrow-item--next-teams');

      nextArrowTeams.addEventListener('click', function () {
        flkty4.next(true, false);
      });
    }
  }


  /**
   * Tabs
   */

  // $('.stages-tabs-img__item').eq(0).addClass('active');
  // $('.stages-card').eq(0).addClass('active');
  //
  // // setInterval(stagesCardAddActiveInterval, 1000);
  //
  // $('.stages-card').on('click', function () {
  //   $('.stages-card').removeClass('active');
  //   $(this).addClass('active');
  //   $('.stages-tabs-img__item').removeClass('active');
  //   count = ($(this).index());
  //   $('.stages-tabs-img__item').eq($(this).index()).addClass('active');
  // });

  $('.response-header').on('click', function () {
    $(this).parents('.questions-tabs-item').toggleClass('is-active');
    $(this).siblings('.response-body').slideToggle();
  });

  var count = 0;

  // function stagesCardAddActiveInterval() {
  //   if (count < $('.stages-card').length) {
  //     count++;
  //     $('.stages-card').eq(count).click();
  //   }
  // };


  /**
   * Decor car
   */

  var car = $('#decor-car');
  var firstOffset = $('#intro').height() - car.height() - 20;

  car.css('top', firstOffset + 'px');

  $(window).on('scroll', function () {
    if ($(this).scrollTop() > (car.offset().top / 2)) {
      car.css('top', firstOffset + $('#advantages').height() + 200 + 'px');
    }
  });

  /**
   * BeforeAfter
   */
  new Cocoen(document.querySelector('.beforeAfter'))

  /**
   * Parallax
   */

  function castParallax() {

    var opThresh = 350;
    var opFactor = 750;

    window.addEventListener("scroll", function (event) {

      var top = this.pageYOffset;

      var layers = document.getElementsByClassName("parallax__item");
      var layer, speed, yPos;
      for (var i = 0; i < layers.length; i++) {
        layer = layers[i];
        speed = layer.getAttribute('data-speed');
        var yPos = -(top * speed / 100);
        layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');

      }
    });


  }

  castParallax();


  /**
   * Animate scroll
   */
  ScrollReveal().reveal('.intro-item', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.intro-order', {
    origin: 'right',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.pain-item', {
    origin: 'left',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.pain-beforeAfter', {
    origin: 'right',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.response-item', {
    origin: 'bottom',
    delay: 400,
    distance: '200px',
  });
  ScrollReveal().reveal('.sale-item', {
    origin: 'left',
    delay: 500,
    distance: '400px',
  });
  ScrollReveal().reveal('.sale-img', {
    origin: 'right',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.reviews-slider', {
    origin: 'bottom',
    delay: 500,
    distance: '200px',
  });
  ScrollReveal().reveal('.stages', {
    origin: 'left',
    delay: 500,
    distance: '200px',
  }, 50);
  // ScrollReveal().reveal('.stages-tabs-img', {
  //   origin: 'right',
  //   delay: 500,
  //   distance: '200px',
  // });
  ScrollReveal().reveal('.order-item', {
    origin: 'bottom',
    delay: 500,
    distance: '200px',
  });


  /**
   * Map
   */
  var element = document.getElementById('map');

  let lat  = $("[name='Lat']").val();
  let long  = $("[name='Long']").val();
  let lat2  = $("[name='Lat2']").val();
  let long2  = $("[name='Long2']").val();

  var map = L.map(element);

  var logoIcon = L.icon({
    iconUrl: '../wp-content/themes/empire/images/icon/logo/marker-icon.png',

    iconSize: [225, 85],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76]
  });

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  if(lat && long) {
    var target = L.latLng(lat, long);
  } else {
    var target = L.latLng('50.4183', '30.47579');
  }

  if(lat2 && long2) {
    var targetSecond = L.latLng(lat2, long2);
  } else {
    var targetSecond = L.latLng('50.4877485', '30.5098113');
  }



  map.setView(target, 14);

  L.marker(target, {
    icon: logoIcon
  }).addTo(map);

  L.marker(targetSecond, {
    icon: logoIcon
  }).addTo(map);

})(jQuery)