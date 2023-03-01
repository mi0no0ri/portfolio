'use strict';

// modal
$(function () {
  $('.workImg').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn(500);
      $(modal).addClass("active");

      return false;
    });
    $(".modalClose").on("click", function () {
      $(".modal").fadeOut(500);
      $(".modal").removeClass("active");
    })
  });
});

// about languague
for (let i = 1; i <= 4; i++) {
  $(function () {
    $('.pointer' + i).hover(
      function () {
        $('.popup' + i).fadeIn(200);
        $('.popup' + i).removeClass('none');
      },
      function () {
        $('.popup' + i).fadeOut(200);
        $('.popup' + i).addClass('none');
      });
  });
}

// function modal
$(function () {
  $('.functionBtn').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn(500);
      $(modal).addClass('active');
      return false;
    });
    $('.functionClose').on('click', function () {
      $('.functionModal').fadeOut(500);
      $('.functionModal').removeClass('active');
    })
    $(document).on('click', function () {
      $('.functionModal').fadeOut(500);
      $('.functionModal').removeClass('active');
    })
  });
});

// hamburger
$(function () {
  $('.hamburger').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.navi').addClass('active');
      $('.hamburgerBackGround').addClass('active');
      $('html').addClass('scrollStop');
    } else {
      $('.navi').removeClass('active');
      $('.hamburgerBackGround').removeClass('active');
      $('html').removeClass('scrollStop');
    }
  });
  $('.menuBar ul li a').on('click', function () {
    $('.hamburger').addClass('active');
    $('.navi').removeClass('active');
  });
});

// scroll top
$(function () {
  $('.toUpLink').on('click', function () {
    var position = 0;
    var speed = 1000;
    $("html,body").animate({ scrollTop: position }, speed, 'swing');
  });
});
