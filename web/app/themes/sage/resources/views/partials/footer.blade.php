<footer class="footer">
  <div class="container">
    <div class="footer__wrap">
      <div class="logo header__logo"><img src="@asset('images/logo.png')" alt="logo"></div>
      <div class="footer__menu" id="nav-footer">
        <a href="#about" class="footer__menu-item">О нас</a>
        <a href="#advantages" class="footer__menu-item">Преимущества</a>
        <a href="#menu" class="footer__menu-item">Меню</a>
        <a href="#prices" class="footer__menu-item">Цены</a>
        <a href="#contacts" class="footer__menu-item">Контакты</a>
      </div>
      <div class="footer__callback">
        <a href="tel:@php the_field('phone') @endphp" class="footer__phone">@php the_field('phone') @endphp</a>
        <div class="footer__modal button">Обратный звонок</div>
      </div>
    </div>
  </div>
</footer>
