import {inputForm} from './input';
import {switchTabs} from "./tabs";

$(document).ready(() => {

  $('.news_tab--head .tabs .tab').on('click', (e) => {switchTabs(e)});

  $('.form_section input').on('input', (e) => inputForm(e));
  $('.form_section textarea').on('input', (e) => inputForm(e));

  $('.recipe').owlCarousel({
    loop:false,
    margin: 24,
    nav:true,
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
    loop:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    mouseDrag: false,
    touchDrag: false,
  });


  $('.shop_block--mobile .mobile_head--name').on('click', function (){
    $(this).children('img').toggleClass('rotate');
    $(this).toggleClass('show');
    $(this).siblings().removeClass('show');
    $(this).siblings().children('img').removeClass('rotate');
  })

});

$(document).on('click', function (e){

  let modal = $('.mobile_head--name, .city_list');

  if(!modal.is(e.target) && modal.has(e.target).length === 0) {
    modal.removeClass('show');
    $('.mobile_head--name img').removeClass('rotate');
  }

});


// change slide on mouse scroll
let owl = $('#main');
const abc = document.querySelector('.intro_overlay');
document.querySelector('#main').onwheel = function(){

  if(event.wheelDelta > 0){
    abc.classList.add('test');
    owl.trigger('next.owl', [1000]);
  } else {
    owl.trigger('prev.owl', [1000]);
  }
  event.preventDefault();
};