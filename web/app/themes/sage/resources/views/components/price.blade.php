<div class="price" id="prices">
  <div class="container">
    <h2 class="price__title">Цены на выбор</h2>
    <div class="price__wrap">
      @while( have_rows('price') ) @php the_row() @endphp
      <div class="price__item">
        <div class="price__name">@php the_sub_field('price-name') @endphp</div>
        @include('icon::clock', ['class' => 'price__time-svg'])
        <div class="price__time">@php the_sub_field('price-time') @endphp</div>
        <div class="price__list-wrap">
          @include('icon::list', ['class' => 'price__list-svg'])
          <div class="price__list">@php the_sub_field('price-flavor') @endphp</div>
        </div>
        @php $action = get_sub_field('price-action') @endphp
        @if( $action != '' )
          <div class="price__action">@php echo $action @endphp</div>
        @endif
        <div class="price__amount">@php the_sub_field('price-amount') @endphp</div>
      </div>
      @endwhile
    </div>
  </div>
</div>
<div class="price-banner">
  <video autoplay preload="true" muted loop class="price-banner__video" poster="@asset('images/banner-2.jpg')">
    <source src="http://lounge136.loc/app/uploads/2020/07/menu-banner.mp4" type="video/mp4">
    <source src="http://lounge136.loc/app/uploads/2020/07/menu-banner.webm" type="video/webm">
  </video>
  <div class="container">
    <div class="price-banner__wrap">
      <h2 class="price-banner__title">Выездное мероприятие под ключ</h2>
      <p class="price-banner__text">Команда профессионалов на ваш праздник: свадьбу, корпоратив, день рождения, любое
        застолье.</p>
      <p class="price-banner__text">Цены формируются индивидуально с учетом ваших личных пожеланий.</p>
      <div class="price-banner__price">от 3500 ₽</div>
    </div>
  </div>
</div>
