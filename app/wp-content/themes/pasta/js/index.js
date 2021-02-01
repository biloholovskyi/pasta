import {inputForm} from './input';
import {switchTabs, switchMaps} from "./tabs";


$(document).ready(() => {

  $('.news_tab--head .tabs .tab').on('click', (e) => {
    switchTabs(e)
  });

  $('.shop_block--content .news_tab--body .city_item').on('click', (e) => {
    switchMaps(e)
  });

  $('.form_section input').on('input', (e) => inputForm(e));

  $('.form_section textarea').on('input', (e) => inputForm(e));


  $('.recipe').owlCarousel({
    loop: false,
    margin: 24,
    nav: true,
    dots: false,
    items: 4,
    center: true,
    responsive: {
      0: {
        loop: false,
        items: 1,
        nav: false,
        center: true,
      },
      575: {
        loop: true,
        items: 2,
        nav: true,
        center: false
      },
      800: {
        loop: true,
        items: 3,
        center: false
      },
      1100: {
        loop: true,
        items: 3,
        center: false
      },
      1200: {
        // loop: false,
        items: 3
      }
    }
  })

  $('#main').owlCarousel({
    margin: 10,
    nav: false,
    dots: false,
    items: 1,
    loop: true,
    autoplayHoverPause: true,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    mouseDrag: false,
    touchDrag: false,
    singleItem: true,
    responsive: {
      0: {
        mouseDrag: true,
        touchDrag: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
      },
      575: {
        mouseDrag: false,
        touchDrag: false,
      }
    }
  });


  $('.shop_block--mobile .mobile_head--name').on('click', function () {
    $(this).children('img').toggleClass('rotate');
    $(this).toggleClass('show');
    $(this).siblings().removeClass('show');
    $(this).siblings().children('img').removeClass('rotate');
  })

  $('.form_section').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      url: '/wp-content/themes/pasta/send.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function (data) {
        $('.alert-modal').fadeIn('slow').css('display', 'flex');
        $('input[type="text"], textarea').val('');
        $('.input-wrapper--input').removeClass('input-wrapper--input');
        setTimeout(function () {
          $('.alert-modal').fadeOut('slow');
        }, 2000)
      }
    });
    return false;
  });

});

$(document).on('click', function (e) {

  let modal = $('.mobile_head--name, .city_list');

  if (!modal.is(e.target) && modal.has(e.target).length === 0) {
    modal.removeClass('show');
    $('.mobile_head--name img').removeClass('rotate');
  }

});



// change slide on mouse scroll
let owl = $('.main');
let circle = document.querySelector('.circle_border');
let anim = document.querySelector('.main');

let cookie = document.getElementsByClassName('cookie-3');
let cookie2 = document.getElementsByClassName('cookie-4');

document.querySelector('.main').onwheel = function () {

  if (event.wheelDelta > 0) {

    // block with animated circle
      //setTimeout(() => circle.classList.add('rotate'), 1000);
      //setTimeout(() => circle.classList.remove('rotate'), 2000);

    // block with animated cookies (parallax)
    for (let i = 0; i < cookie.length; i++)
    {
      setTimeout(() => cookie[i].className += " animate__slideInUp", 1100);
      setTimeout(() => cookie[i].classList.remove("animate__slideInUp"), 2500);
    }

    for (let i = 0; i < cookie2.length; i++)
    {
      setTimeout(() => cookie2[i].className += " animate__slideInUp", 1100);
      setTimeout(() => cookie2[i].classList.remove("animate__slideInUp"), 2500);
    }

    // block for change slider from Down to Up
    setTimeout(() => anim.classList.add('animate__slideInUp'), 1000);
    setTimeout(() => anim.classList.remove('animate__slideInUp'), 2000);

    // change slide on MouseWheel
    setTimeout(() => owl.trigger('next.owl'), 1000);

  } else {

    // block with animated circle
      //setTimeout(() => circle.classList.add('rotate'), 1000);
      //setTimeout(() => circle.classList.remove('rotate'), 1000);

    // block with animated cookies (parallax)
    for (let i = 0; i < cookie.length; i++)
    {
      setTimeout(() => cookie[i].className += " animate__slideInUp", 1100);
      setTimeout(() => cookie[i].classList.remove("animate__slideInUp"), 2500);
    }

    for (let i = 0; i < cookie2.length; i++)
    {
      setTimeout(() => cookie2[i].className += " animate__slideInUp", 1100);
      setTimeout(() => cookie2[i].classList.remove("animate__slideInUp"), 2500);
    }

    // block for change slider from Down to Up
    setTimeout(() =>anim.classList.add('animate__slideInUp'), 1000);
    setTimeout(() => anim.classList.remove('animate__slideInUp'), 2000);

    // change slide on MouseWheel
    setTimeout(() => owl.trigger('prev.owl'), 1000);
  }
  event.preventDefault();
};



