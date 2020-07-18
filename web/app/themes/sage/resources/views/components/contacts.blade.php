<div class="contacts" id="contacts">
  <div class="container">
    <h2 class="contacts__title">Контакты</h2>
    <div class="contacts__wrap">
      <div class="contacts__link">
        <div class="contacts__link-item">
          @include('icon::phone', ['class' => 'contacts__link-svg'])
          @php the_field('phone'); echo " - Сергей" @endphp
        </div>
        <div class="contacts__link-item">
          @include('icon::clock-2', ['class' => 'contacts__link-svg'])
          <span>24/7 круглостуточно</span>
        </div>
        <div class="contacts__socials">
          <div class="contacts__socials-title">Свяжитесь с нами при помощи:</div>
          <div class="contacts__socials-wrap">
            <a href="tg://resolve?domain=sergey_kalian" title="Telegram" class="contacts__socials-item">
              @include('icon::socials/telegram', ['class' => 'contacts__socials-svg'])
            </a>
            <a href="https://api.whatsapp.com/send?phone=79038595985" title="WhatsApp" class="contacts__socials-item">
              @include('icon::socials/whatsapp', ['class' => 'contacts__socials-svg'])
            </a>
            <a href="viber://add?number=79270235002" title="Viber" class="contacts__socials-item">
              @include('icon::socials/viber', ['class' => 'contacts__socials-svg'])
            </a>
          </div>
        </div>
      </div>
      <div class="contacts__call">
        <div class="callback">
          <div class="callback__title">Остались вопросы?<br> Закажите звонок!</div>
          <div class="callback__desc">Введите имя и телефон и мы перезвоним вам в ближайшее время.</div>
          <div class="callback__form">
            @php echo do_shortcode('[contact-form-7 id="28" title="Form"]') @endphp
          </div>
          <div class="callback__approve">Нажимая кнопку “Заказать звонок” вы даете согласие на обработку Ваших
            персональных данных
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
