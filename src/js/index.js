import $ from 'jquery';

window.jQuery = window.$ = $;
//import bootstrap from 'bootstrap';
import Swal from 'sweetalert2';

require("waypoints/lib/jquery.waypoints.js");


document.addEventListener("DOMContentLoaded", () => {
  initMenu();
  initMobileMenu();
  initProgressList();
  initSection();
  initPortfolioFilter();
  //initSlider();
  initContacts();
});


//Init functions
function initMenu() {
  //Anchors
  $(function () {
    $('a[href^="#"]').click(function () {
      let target = $(this).attr('href');
      $('html, body').animate({scrollTop: $(target).offset().top - 50}, 800);
      return false;
    });
  });

  fixedHeader();
  $(window).on('scroll', function () {
    fixedHeader();
  });
}

function initMobileMenu() {
  //Open mobile menu
  $('.menu__mobile-button, .mobile-menu__close').on('click', function () {
    $('.mobile-menu').toggleClass('active');
  });

  //Close mobile menu after click
  $('.mobile-menu__wrapper ul li a').on('click', function () {
    $('.mobile-menu').removeClass('active');
  });
}

function initProgressList() {
  //Animate progress-bar
  // let elements = document.getElementsByClassName('progress-bar');
  // if (elements.length <= 0) return;
  // window.addEventListener('scroll', () => {
  //   animateProgressBars();
  //   removeProgressBarEventListener();
  // });
  //
  // function removeProgressBarEventListener() {
  //   window.removeEventListener('scroll', animateProgressBars());
  // }
  //
  // function animateProgressBars() {
  //   if (isInViewport(elements[0])) {
  //     Array.from(elements).forEach(function (element) {
  //       animateProgressBar(element);
  //     });
  //   }
  // }

  $('.js-progress-list').waypoint({
    handler: function () {
      $(".progress-bar").each(function () {
        $(this).animate({
          width: $(this).attr('aria-valuenow') + '%'
        }, 200);
      });
      this.destroy();
    }, offset: '50%'
  });
}

function initSection() {
  //Animate headers of .section
  const hideHeader = function (header) {
    header.css('text-indent', '-9999px');
  };

  const showHeader = function (header) {
    header.css('text-indent', '0px');
  };

  const animateHeader = function (header, text) {
    //clear header text
    header.text("");
    //and animate it
    var nextAnimationStep = function () {
      if (text.length > 0) {
        header.text(header.text() + text.substr(0, 1));
        text = text.substr(1);
        setTimeout(nextAnimationStep, 100);
      }
    };
    nextAnimationStep();
  };

  const animateHeaders = function (headers) {
    return Object.keys(headers).map(function (key, index) {
      var elementSelector = key;
      var offset = headers[key];
      var header = $(elementSelector);
      hideHeader(header);
      var waypoint = {};
      waypoint[key] = header.waypoint({
        handler: function () {
          showHeader(header);
          animateHeader(header, header.text());
          this.destroy();
        },
        offset: offset
      })[0];
      return waypoint;
    }).reduce(Object.assign, {});
  };

//All ids of titles should be written here to animation work
  const animatedHeaders = animateHeaders({
    "#hello_header": '90%',
    "#resume_header": '70%',
    "#portfolio_header": '70%',
    "#testimonials_header": '70%',
    "#blog_header": '70%',
    "#contacts_header": '70%',
    "#other_posts": '70%'
  });
}

function initPortfolioFilter() {
  let previousClickedMenuLink = undefined;
  $('.portfolio-menu').on('click', 'a', function (event) {
    event.preventDefault();

    if (previousClickedMenuLink) {
      previousClickedMenuLink.removeClass('portfolio-menu__link--active');
    }
    let link = $(event.target);
    link.addClass('portfolio-menu__link--active');
    previousClickedMenuLink = link;

    let targetTag = $(event.target).data('portfolio-target-tag');
    let portfolioItems = $('.portfolio-cards').children();

    if (targetTag === 'all') {
      portfolioItems.fadeIn({duration: 500});
    } else {
      portfolioItems.hide();
    }

    portfolioItems.each(function (index, value) {
      let item = $(value);
      if (item.data('portfolio-tag') === targetTag) {
        item.fadeIn({duration: 500});
      }
    });
  });
}

function initSlider() {
  $('.carousel').carousel({
    pause: "hover",
    interval: 5000
  });

  Array.from(document.getElementsByClassName('carousel-control-prev')).forEach(function (element) {
    element.addEventListener('click', () => $(".carousel").carousel("prev"));
  });

  Array.from(document.getElementsByClassName('carousel-control-next')).forEach(function (element) {
    element.addEventListener('click', () => $(".carousel").carousel("next"));
  });
}

function initContacts() {
  validateForm('.js-form .form-field');
  let form = document.querySelector('.js-form');
  form.addEventListener('submit', function (e) {
    submitForm(e, form);
  });
}

//Common functions
function validateForm(selector) {
  Array.from(document.querySelectorAll(selector)).forEach(item => {
    item.addEventListener('input', (e) => {
      if (e.target.value === '') {
        item.dataset.touched = false;
      }
    });
    item.addEventListener('invalid', () => {
      item.dataset.touched = true;
    });
    item.addEventListener('blur', () => {
      if (item.value !== '') item.dataset.touched = true;
    });
  });
}

function submitForm(e, form) {
  e.preventDefault();
  let formData = toJSONString(form);

  $.ajax({
    type: "POST",
    url: 'mail.php/',
    contentType: "application/x-www-form-urlencoded",
    data: formData,
    beforeSend: function() {
      Swal.fire(
        'Спасибо!',
        'Ваш запрос успешно отправлен. Ожидайте обратной связи.',
        'success'
      );
    },
    // success: function () {
    //   Swal.fire(
    //     'Спасибо!',
    //     'Ваш запрос успешно отправлен. Ожидайте обратной связи.',
    //     'success'
    //   );
    // },
    // error: function () {
    //   Swal.fire(
    //     'Ошибка',
    //     'Что-то пошло не так.',
    //     'error'
    //   );
    // }
  });
}

function fixedHeader() {
  let ww = $(window).scrollTop();
  if (ww > 0) {
    $('.menu').addClass('menu--active');
    $('.mobile-menu').addClass('mobile-menu--active');
  } else {
    $('.menu').removeClass('menu--active');
    $('.mobile-menu').removeClass('mobile-menu--active');
  }
}

function toJSONString(form) {
  let obj = {};
  let elements = form.querySelectorAll("input, select, textarea");
  for (let i = 0; i < elements.length; ++i) {
    let element = elements[i];
    let name = element.name;
    let value = element.value;

    if (name) {
      obj[name] = value;
    }
  }

  return obj;
}

function animateProgressBar(element) {
  let width = 0;
  let id = setInterval(frame, 10);
  let valueNow = element.getAttribute('aria-valuenow');

  function frame() {
    if (width >= valueNow) {
      console.log('clear that shit!');
      clearInterval(id);
    } else {
      width++;
      element.style.width = width + '%';
    }
  }
}

function isInViewport(element) {
  let bounding = element.getBoundingClientRect();
  return (
    bounding.top >= 0 &&
    bounding.left >= 0 &&
    bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
