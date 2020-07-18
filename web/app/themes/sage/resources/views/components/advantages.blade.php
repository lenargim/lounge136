<div class="advantages" id="advantages">
  <div class="container">
    <div class="advantages__wrap">
      @component("components.advantage")
        @slot('title')
          Большой ассортимент вкусов
        @endslot
        @slot('text')
          Ягоды / фрукты / цитрусы / десерты / травы и специи / чайная коллекция / барная коллекция.
        @endslot
        @slot('price')
          От 800 руб
        @endslot
        @slot('img')
          @asset("images/advanatage-1.jpg")
        @endslot
      @endcomponent
      @component("components.advantage")
        @slot('title')
          Работаем 24/7
        @endslot
        @slot('text')
          Работаем для вас не покладая рук.
          В любой момент, в любой день недели создаем для вас прекрасное настроение.
        @endslot
        @slot('price')
        @endslot
        @slot('img')
          @asset("images/advanatage-2.jpg")
        @endslot
      @endcomponent
      @component("components.advantage")
        @slot('title')
          Доставка по региону
        @endslot
        @slot('text')
          Доставляем не только по городу, но и по области.
        @endslot
        @slot('price')
        @endslot
        @slot('img')
          @asset("images/advanatage-3.jpg")
        @endslot
      @endcomponent
      @component("components.advantage")
        @slot('title')
          Доставка на торжество
        @endslot
        @slot('text')
          Мероприятие по высшему разряду. Радуга вкусов на вечер и ночь вашего праздника.
        @endslot
        @slot('price')
        @endslot
        @slot('img')
          @asset("images/advanatage-4.jpg")
        @endslot
      @endcomponent
    </div>
  </div>
</div>
