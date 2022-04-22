<header class="mb-4">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="header col-12 d-flex justify-content-between align-items-center flex-wrap">
          <div class="logo-block d-flex justify-content-between align-items-end flex-wrap">
            <a class="nav-link text-black" href="{{ route('index') }}"><h1 class="fw-bold">MOBIBUS</h1></a>
            <span>Ремонт компьютеров<br> в Рославле</span>
          </div>
          <div class="contacts d-flex justify-content-between align-items-center flex-wrap">
            <div class="tel-block d-flex justify-content-sm-between justify-content-center align-items-end">
              <img src="{{ asset('images/phone-icon.png') }}" alt="icon">
              <div>
                <a class="smoothScroll" href="tel:+79517150552">+7 (951) 715 05 52</a>
                <span>Без выходных круглосуточно 24 часа в сутки</span>
              </div>
            </div>
            {{--		    				<button data-toggle="modal" data-target="#call">Заказать звонок</button>--}}
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav>
    <div class="container">
      <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa-solid fa-bars fa-2x"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav col-12 d-md-flex justify-content-between align-items-center">

                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="{{ route('index') }}">На главную</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="{{ route('index') }}#цены">Цены</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="{{ route('plug') }}">Статус заказа</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="{{ route('sales.index') }}">Распродажа</a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        {{--					<button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"--}}
        {{--									aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--						<span class="navbar-toggler-icon"></span>--}}
        {{--					</button>--}}
        {{--					<div class="col-12 d-md-flex justify-content-between align-items-center collapse navbar-collapse" id="navbarNavAltMarkup">--}}
        {{--						<a class="smoothScroll" href="#kinds">Фактуры потолков</a>--}}
        {{--						<a class="smoothScroll" href=".texnology">Технологии потолков</a>--}}
        {{--						<a class="smoothScroll" href=".ask">Ответы на вопросы</a>--}}
        {{--						<a class="smoothScroll" href=".reviews">Отзывы</a>--}}
        {{--						<a class="smoothScroll" href="footer">Контакты</a>--}}
        {{--					</div>--}}
      </div>
    </div>
  </nav>
</header>