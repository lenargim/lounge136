export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('input[type="tel"]').mask('+7(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  },
};

$('.overlay').mouseup(function (e) { // событие клика по веб-документу
  let div = $('.modal'); // тут указываем элемент
  if (!div.is(e.target) // если клик был не по нашему блоку
    && div.has(e.target).length === 0) { // и не по его дочерним элементам
    $('.overlay').removeClass('active');
    $('.modal').removeClass('active')
  }
});

$('.modal__close').on('click', function () {
  $('.overlay').removeClass('active');
  $('.modal').removeClass('active')
});

$('.header__modal, .footer__modal').on('click', function () {
  $('.overlay').addClass('active');
  $('.callback').addClass('active')
});

$('#nav, #nav-footer, #banner, #mobile').on('click', 'a', function (event) {
  event.preventDefault();
  var id = $(this).attr('href'),
    top = $(id).offset().top;
  $('body,html').animate({scrollTop: top}, 1500);
});

var submit1 = document.querySelector('.contacts .wpcf7');
if (submit1) {
  submit1.addEventListener('wpcf7mailsent', function () {
    $('.overlay').addClass('active');
    $('.mailsend').addClass('active')
  }, false);
}

var submit2 = document.querySelector('.modal .wpcf7');
if (submit2) {
  submit2.addEventListener('wpcf7mailsent', function () {
    $('.modal').removeClass('active');
    $('.overlay').addClass('active');
    $('.mailsend').addClass('active')
  }, false);
}

$('.burger').on('click', function () {
  $('.header_mobile').slideToggle();
  $('.burger__svg').toggle()
});
