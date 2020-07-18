<header class="header">
  <div class="container">
    <div class="header__wrap">
      <div class="logo img header__logo"><img src="@asset('images/logo.png')" alt="logo"></div>
      <div class="header__menu" id="nav">
        <a href="#about" class="header__menu-item">О нас</a>
        <a href="#advantages" class="header__menu-item">Преимущества</a>
        <a href="#menu" class="header__menu-item">Меню</a>
        <a href="#prices" class="header__menu-item">Цены</a>
        <a href="#contacts" class="header__menu-item">Контакты</a>
      </div>
      <div class="header__callback">
        <a href="tel:@php the_field('phone') @endphp" class="header__phone">@php the_field('phone') @endphp</a>
        <div class="header__modal button">Обратный звонок</div>
      </div>
      <div class="burger hidden">
        @include('icon::list', ['class' => 'burger__svg burger__list'])
        @include('icon::close', ['class' => 'burger__svg burger__close hidden'])
      </div>
    </div>
    <div class="header_mobile hidden" id="mobile">
      <a href="#about" class="header__menu-item">О нас</a>
      <a href="#advantages" class="header__menu-item">Преимущества</a>
      <a href="#menu" class="header__menu-item">Меню</a>
      <a href="#prices" class="header__menu-item">Цены</a>
      <a href="#contacts" class="header__menu-item">Контакты</a>
    </div>
  </div>
</header>
