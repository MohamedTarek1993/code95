//loader
// let loader = document.getElementById('preloader');
// window.addEventListener('load', function () {
//   loader.style.display = 'none';
// });
//loader

//  scroll-up 
var btn = $('#button');
var navbar = $('#navbar')
var lang = $('.navbar  .dropdown');
$(window).scroll(function () {
  if ($(window).scrollTop() > 490) {
    btn.addClass('show');
    navbar.addClass('change');
    lang.css('display', 'none');

  } else {
    btn.removeClass('show');
    navbar.removeClass('change');
    lang.css('display', 'block');
  }
});
btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});
//    scroll-up 
// animated hamburger icon
$(document).ready($(function () {
  let navBtn = $('.navbar-toggler');
  $(navBtn).click(function () {
    $(navBtn).toggleClass('active-hamburger');
  });
}));
// animated hamburger icon

// client slider 
var swiper1 = new Swiper(".mySwiper-1", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      450: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
  //  client slider

  // testmonlies slider 
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },
  },
});
//  testmonlies slider


const videoPlayer = document.getElementById('video-player');
const videoPoster = document.getElementById('video-poster');
const playIcon = document.getElementById('play-icon');

playIcon.addEventListener('click', () => {
  videoPlayer.style.display = 'block'
  videoPlayer.play();
  videoPoster.style.display = 'none';
  playIcon.style.display = 'none';
  
});

videoPlayer.addEventListener('pause', () => {
  videoPoster.style.display = 'block';
  playIcon.style.display = 'flex';
  videoPlayer.style.display = 'none'
});

