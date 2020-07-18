<div class="overlay">
  <div class="modal callback">
    <div class="modal__close">@include('icon::close')</div>
    <div class="callback__title">Остались вопросы?<br> Закажите звонок!</div>
    <div class="callback__desc">Введите имя и телефон и мы перезвоним вам в ближайшее время.</div>
    <div class="callback__form">
      @php echo do_shortcode('[contact-form-7 id="28" title="Form"]') @endphp
    </div>
    <div class="callback__approve callback__approve_centered">Нажимая кнопку “Заказать звонок” вы даете согласие на обработку Ваших
      персональных данных
    </div>
  </div>
  <div class="modal mailsend">
    <div class="modal__close">@include('icon::close')</div>
    @include('icon::approve', ['class' => 'mailsend__svg'])
    <div class="mailsend__title">Спасибо за Вашу заявку.</div>
    <div class="mailsend__desc">Пожалуйста ожидайте звонка специалиста</div>
  </div>
</div>
