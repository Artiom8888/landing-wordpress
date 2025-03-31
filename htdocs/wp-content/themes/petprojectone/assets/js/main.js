$(document).ready(function(){
  //Smooth scrolling menu
  $('header a[href^="#"]').click(function() {
    let target = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(target).offset().top
    },500)
    $('header a[href^="#"]').parent().removeClass('active');
    $(this).parent().addClass('active');
    $('.menu__mobile .menu').toggle(500);
    $('.menu__burger').toggleClass('close');
    return false;
  });
  //Mobile menu
  $('.menu__burger').click(function(){
    $('.menu__mobile .menu').toggle(500);
    $(this).toggleClass('close');
  });

  //Slider
  var swiper = new Swiper(".swiper-container", {
    slidesPerView:3,
    slidesPerGroup:3,
    loop:true,
    spaceBetween: 30,
    navigation: {
      prevEl: ".swiper-button-prev",
      nextEl: ".swiper-button-next",
    },
  });
});