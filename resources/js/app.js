require('./bootstrap')
require('selectize/dist/js/standalone/selectize.min.js')

import Swal from 'sweetalert2'
import smoothscroll from 'smoothscroll-polyfill'

const ProgressBar = require('progressbar.js')
require('waypoints/lib/noframework.waypoints.min')

document.addEventListener('DOMContentLoaded', () => {
  initMenu()
  initMobileMenu()
  initProgressList()
  initSection()
  initContacts()
  //initPortfolioFilter();
  //initSlider();
  initLanguagePicker()
})

//Init functions
function initMenu () {
  //Anchors
  smoothscroll.polyfill()
  const menuElements = document.querySelectorAll('a[href^="#"]')
  Array.from(menuElements).forEach(element => {
    element.addEventListener('click', event => {
      event.preventDefault()
      let targetId = event.target.getAttribute('href').substring(1)
      let target = document.getElementById(targetId)
      let coords = getCoords(target)
      window.scroll({
        top: coords.top - 50,
        behavior: 'smooth'
      })
    })
  })

  fixedHeader()
  window.addEventListener('scroll', fixedHeader)
}

function initMobileMenu () {
  const mobileMenu = document.querySelector('.mobile-menu')

  document.querySelector('.menu__mobile-button').addEventListener('click', () => {
    mobileMenu.classList.toggle('active')
  })

  document.querySelector('.mobile-menu__close').addEventListener('click', () => {
    mobileMenu.classList.toggle('active')
  })

  //Close mobile menu after click
  Array.from(document.querySelectorAll('.mobile-menu__wrapper ul li a')).forEach(function (element) {
    element.addEventListener('click', () => mobileMenu.classList.remove('active'))
  })
}

function initProgressList () {
  //Animate progress-bar
  let element = document.querySelector('.progress-list')
  let progressBars = document.getElementsByClassName('progress-bar')
  let bars = []
  Array.from(progressBars).forEach(element => {
    bars.push({
      animation: new ProgressBar.Line(element, { color: '#6d56c1', duration: 1000, easing: 'easeInOut' }),
      maxValue: element.getAttribute('aria-valuenow') / 100,
    })
  })
  new Waypoint({
    element: element,
    handler: function () {
      bars.forEach(element => element.animation.animate(element.maxValue))
    }, offset: '70%'
  })
}

function initSection () {
  //Animate headers of .section
  const hideHeader = header => {
    if (!header) return
    header.style.textIndent = '-9999px'
  }
  const showHeader = header => {
    if (!header) return
    header.style.textIndent = '0px'
  }

  const animateHeader = (header, text) => {
    //clear header text
    header.textContent = ''
    //and animate it
    let nextAnimationStep = function () {
      if (text.length > 0) {
        header.textContent = header.textContent + text.substr(0, 1)
        text = text.substr(1)
        setTimeout(nextAnimationStep, 100)
      }
    }
    nextAnimationStep()
  }

  const animateHeaders = headers => {
    return Object.keys(headers).map(function (key, index) {
      let elementSelector = key
      let offset = headers[key]
      let header = document.querySelector(elementSelector)
      if (!header) return
      hideHeader(header)
      let waypoint = {}
      waypoint[key] = new Waypoint({
        element: header,
        handler: function () {
          showHeader(header)
          animateHeader(header, header.textContent)
          this.destroy()
        },
        offset: offset
      })[0]
      return waypoint
    }).reduce(Object.assign, {})
  }

  //All ids of titles should be written here to animation work
  const animatedHeaders = animateHeaders({
    '#hello_header': '90%',
    '#resume_header': '70%',
    '#portfolio_header': '70%',
    '#testimonials_header': '70%',
    '#blog_header': '70%',
    '#contacts_header': '70%',
    '#other_posts': '70%'
  })
}

function initPortfolioFilter () {
  let previousClickedMenuLink = undefined
  $('.portfolio-menu').on('click', 'a', function (event) {
    event.preventDefault()

    if (previousClickedMenuLink) {
      previousClickedMenuLink.removeClass('portfolio-menu__link--active')
    }
    let link = $(event.target)
    link.addClass('portfolio-menu__link--active')
    previousClickedMenuLink = link

    let targetTag = $(event.target).data('portfolio-target-tag')
    let portfolioItems = $('.portfolio-cards').children()

    if (targetTag === 'all') {
      portfolioItems.fadeIn({ duration: 500 })
    } else {
      portfolioItems.hide()
    }

    portfolioItems.each(function (index, value) {
      let item = $(value)
      if (item.data('portfolio-tag') === targetTag) {
        item.fadeIn({ duration: 500 })
      }
    })
  })
}

function initSlider () {
  $('.carousel').carousel({
    pause: 'hover',
    interval: 5000
  })

  Array.from(document.getElementsByClassName('carousel-control-prev')).forEach(function (element) {
    element.addEventListener('click', () => $('.carousel').carousel('prev'))
  })

  Array.from(document.getElementsByClassName('carousel-control-next')).forEach(function (element) {
    element.addEventListener('click', () => $('.carousel').carousel('next'))
  })
}

function initContacts () {
  validateForm('.js-form .form-field')
  let form = document.querySelector('.js-form')
  form.addEventListener('submit', function (e) {
    submitForm(e, form)
  })
}

function initLanguagePicker () {
  let selectLanguage = $('.select-language')
  selectLanguage.selectize({
    onChange: function (value) {
      window.location.replace(value)
    },
    render: {
      item: function (item) {
        return '<div>' + item.text + '<img style="margin-left:8px;margin-bottom:4px; width:16px;" ' +
          'class="language-flag" src="' + item.flag + '"></div>'
      },
      option: function (item) {
        return '<div class="d-flex align-items-center p-1"><div class="mr-auto">' + item.text + '</div><img style="width:16px;" ' +
          'class="language-flag" src="' + item.flag + '"></div>'
      }
    },
  })
}

//Common functions
function validateForm (selector) {
  Array.from(document.querySelectorAll(selector)).forEach(item => {
    item.addEventListener('input', (e) => {
      if (e.target.value === '') {
        item.dataset.touched = false
      }
    })
    item.addEventListener('invalid', () => {
      item.dataset.touched = true
    })
    item.addEventListener('blur', () => {
      if (item.value !== '') item.dataset.touched = true
    })
  })
}

function submitForm (e, form) {
  e.preventDefault()
  let formData = toJSONString(form)

  const request = new XMLHttpRequest()
  request.open('POST', 'mail', true)
  request.setRequestHeader('Content-Type', 'application/json')
  request.setRequestHeader('X-CSRF-TOKEN', document.head.querySelector('[name=csrf-token]').content)
  request.send(formData)
  Swal.fire(
    'Спасибо!',
    'Ваш запрос успешно отправлен. Ожидайте обратной связи.',
    'success'
  )
}

function fixedHeader () {
  let ww = window.pageYOffset
  if (ww > 0) {
    document.querySelector('.menu').classList.add('menu--active')
    document.querySelector('.mobile-menu').classList.add('mobile-menu--active')
  } else {
    document.querySelector('.menu').classList.remove('menu--active')
    document.querySelector('.mobile-menu').classList.remove('mobile-menu--active')
  }
}

function toJSONString (form) {
  let obj = {}
  let elements = form.querySelectorAll('input, select, textarea')
  for (let i = 0; i < elements.length; ++i) {
    let element = elements[i]
    let name = element.name
    let value = element.value

    if (name) {
      obj[name] = value
    }
  }

  return JSON.stringify(obj)
}

function getCoords (elem) {
  let box = elem.getBoundingClientRect()
  return {
    top: box.top + pageYOffset,
    left: box.left + pageXOffset
  }
}
