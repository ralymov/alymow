import $ from 'jquery';

window.jQuery = window.$ = $;
import popper from 'popper.js';
import bootstrap from 'bootstrap';

require("waypoints/lib/jquery.waypoints.js");


document.addEventListener("DOMContentLoaded", function (event) {
  initMenu();
  initMobileMenu();
  initProgressList();
  initSection();
  initPortfolioFilter();
  initSlider();
  initContacts();
});


function initMenu() {
  //Anchors
  $(function () {
    $('a[href^="#"]').click(function () {
      var target = $(this).attr('href');
      $('html, body').animate({scrollTop: $(target).offset().top - 50}, 800);
      return false;
    });
  });

//Fixed-top menu
  function fixedHeader() {
    var ww = $(window).scrollTop();
    if (ww > 0) {
      $('.menu').addClass('menu--active');
      $('.mobile-menu').addClass('mobile-menu--active');
    } else {
      $('.menu').removeClass('menu--active');
      $('.mobile-menu').removeClass('mobile-menu--active');
    }
  }

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
  //Settings for carousel from bootstrap 4.0
  $('.carousel').carousel({
    pause: "hover",
    interval: 5000
  });

  $(".carousel-control-prev").click(function () {
    $(".carousel").carousel("prev");
  });

  $(".carousel-control-next").click(function () {
    $(".carousel").carousel("next");
  });
}

function initContacts() {
  //Validation forms
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
  };

  validateForm('.js-form .form-field');

  let form = document.querySelector('.js-form');
  let formName = '.js-form';

  form.addEventListener('submit', function (e) {
    submitForm(e, formName);
  });

  function submitForm(e, formName) {
    e.preventDefault();
    let name = $(formName + ' .js-field-name').val();
    let email = $(formName + ' .js-field-email').val();
    let message = $(formName + ' .js-field-message').val();

    let formData = {
      name: name,
      email: email,
      message: message
    };

    $.ajax({
      type: "POST",
      url: 'mail.php',
      data: formData,
      success: function () {
        console.log('success');
      },
      error: function () {
        console.log('error');
      }
    });
  }
}
