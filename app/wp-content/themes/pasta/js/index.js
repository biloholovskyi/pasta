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
    },

  })


  // $('#main').owlCarousel({
  //   margin: 10,
  //   nav: false,
  //   dots: false,
  //   items: 1,
  //   loop: true,
  //   //animateOut: 'fadeOut',
  //   //animateIn: 'fadeIn',
  //   mouseDrag: true,
  //   touchDrag: true,
  //   responsive: {
  //     0: {
  //       mouseDrag: true,
  //       touchDrag: true,
  //       //animateOut: 'fadeOut',
  //       //animateIn: 'fadeIn',
  //     },
  //     575: {
  //       mouseDrag: true,
  //       touchDrag: true,
  //     }
  //   }
  // });
  //
  // let owl = $('#main');
  // owl.on('mousewheel', '.owl-stage', function (e) {
  //   if (e.deltaY>0) {
  //     owl.trigger('next.owl', [4000]);
  //   } else {
  //     owl.trigger('prev.owl', [4000]);
  //   }
  //   e.preventDefault();
  // });


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

// // change slide on mouse scroll
// let owl = $('.main');
// let circle = document.querySelector('.circle_border');
// let cookie = document.getElementsByClassName('cookie-3');
// let cookie2 = document.getElementsByClassName('cookie-4');
// let element3 = document.getElementsByClassName('circle-4');
//
//
// // create circle with dots for animation
// const NewCircle1 = document.createElement('div');
// NewCircle1.className = 'circle';
//
// const NewCircle2 = document.createElement('div');
// NewCircle2.className = 'circle-2';
//
// const NewCircle3 = document.createElement('div');
// NewCircle3.className = 'circle-3';
//
// const NewCircle4 = document.createElement('div');
// NewCircle4.className = 'circle-5';
//
// const NewCircle5 = document.createElement('div');
// NewCircle5.className = 'circle-4';
//
// const NewCircle = document.createElement('div');
// NewCircle.className = 'circle-7';
//
// circle.append(NewCircle1, NewCircle2, NewCircle3, NewCircle4, NewCircle5);
//
//
// document.querySelector('.main').onwheel = function () {
//
//   if (event.wheelDelta > 1) {
//
//     // block with animated circle
//
//     setTimeout(()=> circle.style.transform = "translate(-50%,-50%) rotate(-19deg)", 2000);
//
//     setTimeout(()=> {
//       circle.append(NewCircle)
//       NewCircle2.style.width = '16px'
//       NewCircle2.style.height = '16px'
//       NewCircle1.style.width = '12px'
//       NewCircle1.style.height = '12px'
//       NewCircle1.style.right = '-6px'
//       NewCircle3.style.width = '6px'
//       NewCircle3.style.height = '6px'
//       NewCircle3.style.right = '12px'
//       NewCircle4.style.width = '12px'
//       NewCircle4.style.height = '12px'
//       NewCircle4.style.right = '56px'
//       NewCircle4.style.top = '78%'
//       NewCircle.style.right = '123px'
//       NewCircle.style.top = '89%'
//     },2000)
//
//
//     for (let i = 0; i < element3.length; i++) { setTimeout(()=>  element3[i].classList.add('hidden__circle'), 2000) }
//
//     // block with animated cookies (parallax)
//     for (let i = 0; i < cookie.length; i++)
//     {
//       setTimeout(() => cookie[i].className += " animate__slideInUp", 2700);
//       setTimeout(() => cookie[i].classList.remove("animate__slideInUp"), 4000);
//     }
//
//     for (let i = 0; i < cookie2.length; i++)
//     {
//       setTimeout(() => cookie2[i].className += " animate__slideInUp", 2500);
//       setTimeout(() => cookie2[i].classList.remove("animate__slideInUp"), 4000);
//     }
//
//     // change slide on MouseWheel
//     setTimeout(()=>  owl.trigger('next.owl'), 2000)
//
//
//
//
//   } else {
//
//     // block with animated circle
//     setTimeout(() => circle.classList.add('rotate'), 1000);
//     //setTimeout(() => circle.classList.remove('rotate'), 1000);
//
//     // block with animated cookies (parallax)
//     for (let i = 0; i < cookie.length; i++)
//     {
//       setTimeout(() => cookie[i].className += " animate__slideInUp", 2700);
//       setTimeout(() => cookie[i].classList.remove("animate__slideInUp"), 4000);
//     }
//
//     for (let i = 0; i < cookie2.length; i++)
//     {
//       setTimeout(() => cookie2[i].className += " animate__slideInUp", 2500);
//       setTimeout(() => cookie2[i].classList.remove("animate__slideInUp"), 4000);
//     }
//
//     // change slide on MouseWheel
//     setTimeout(() => owl.trigger('prev.owl'), 2000);
//   }
//
//   event.preventDefault();
// };






