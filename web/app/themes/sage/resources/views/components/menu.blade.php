<div class="menu" id="menu">
  <div class="container">
    <h2>Меню</h2>
    <div class="menu__text">Легкие закуски, безалкогольные напитки и чай на любой вкус</div>
    <a href="#" target="_blank" class="button menu__button">Посмотреть меню</a>
  </div>
</div>
<div class="steps">
  <div class="container">
    <h2 class="steps__title">Как все происходит?</h2>
    <div class="steps__wrap">
      @component("components.step")
        @slot('number')
          1
        @endslot
        @slot('text')
          К вам приезжает наш сотрудник
          и привозит все необходимое
        @endslot
      @endcomponent
      @component("components.step")
        @slot('number')
          2
        @endslot
        @slot('text')
          Вы определяетесь со вкусами
          и эксперт готовит необходимое количество порций
        @endslot
      @endcomponent
      @component("components.step")
        @slot('number')
          3
        @endslot
        @slot('text')
          Первую порцию эксперт пробует лично, чтобы быть уверенным в качестве
        @endslot
      @endcomponent
      @component("components.step")
        @slot('number')
          4
        @endslot
        @slot('text')
          Последующие порции специалист оставит готовыми, Вам останется только самостоятельно заменить
        @endslot
      @endcomponent
      @component("components.step")
        @slot('number')
          5
        @endslot
        @slot('text')
          Согласно оговоренному времени, мы приезжаем и забираем посуду
        @endslot
      @endcomponent
      @component("components.step")
        @slot('number')
          6
        @endslot
        @slot('text')
          Мыть ничего не нужно, мы сделаем все самостоятельно
        @endslot
      @endcomponent
    </div>
  </div>
</div>
