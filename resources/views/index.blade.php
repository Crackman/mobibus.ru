<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Ремонт компьютеров 24 часа в сутки. Ознакомиться c ценами можете на сайте
	 www.mobibus.ru. Быстро, честно, недорого!" />
	<title>Mobibus | Ремонт копьютеров</title>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<link href="../../public/images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="success">Ваша заявка отправлена!</div>
<!-- Modal -->
<div class="modal fade" id="call" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		{{--	    	<div class="modal-content">--}}
		{{--		      	<div class="modal-header">--}}
		{{--		       		<h2 class="modal-title">Обратный звонок</h2>--}}
		{{--		        	<h4>Заполните поля и мы перезвоним<br>Вам в ближайшее время</h4>--}}
		{{--		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
		{{--		          	<span>&times;</span>--}}
		{{--		        	</button>--}}
		{{--		      	</div>--}}
		{{--	      	<div class="modal-body">--}}
		{{--	      		<form action="" method="post">--}}
		{{--	      			<input type="hidden" class="type" value="call" name="type">--}}
		{{--					<input class="name" name="name" type="text" required placeholder="Ваше имя">--}}
		{{--					<input class="tel" name="tel" type="text" required placeholder="Ваш телефон">--}}
		{{--		       		<button>Перезвоните мне</button>	      			--}}
		{{--	      		</form>--}}
		{{--	      	</div>--}}
		{{--	    </div>--}}
	</div>
</div>

{{--	<div class="modal fade" id="zamer" tabindex="-1" role="dialog">--}}
{{--	  <div class="modal-dialog" role="document">--}}
{{--	    	<div class="modal-content">--}}
{{--		      	<div class="modal-header">--}}
{{--		       		<h2 class="modal-title">ЗАКАЗАТЬ<br>БЕСПЛАТНЫЙ ЗАМЕР</h2>--}}
{{--		        	<h4>Оставьте заявку и мы перезвоним<br>Вам в ближайшее время</h4>--}}
{{--		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--		          	<span>&times;</span>--}}
{{--		        	</button>--}}
{{--		      	</div>--}}
{{--	      	<div class="modal-body">--}}
{{--	      		<form action="" method="post">--}}
{{--	      			<input type="hidden" class="type" value="zamer" name="type">--}}
{{--					<input class="name" name="name" type="text" required placeholder="Ваше имя">--}}
{{--					<input class="tel" name="tel" type="text" required placeholder="Ваш телефон">--}}
{{--		       		<button>ОСТАВИТЬ ЗАЯВКУ</button>	      			--}}
{{--	      		</form>--}}
{{--	      	</div>--}}
{{--	    </div>--}}
{{--	  </div>--}}
{{--	</div>--}}

<header class="mb-4">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="header col-12 d-flex justify-content-between align-items-center flex-wrap">
					<div class="logo-block d-flex justify-content-between align-items-end flex-wrap">
						<h1 class="fw-bold">MOBIBUS</h1>
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
									<a class="nav-link text-white" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white" aria-current="page" href="#">Цены</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white" aria-current="page" href="#">Отзывы</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white" aria-current="page" href="#">Контакты</a>
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
<main>

{{--	<div class="first-block">--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}

{{--				<div class="col-12">--}}
{{--					<div class="h1-block">--}}
{{--						<h1>Установка виндовс</h1>--}}
{{--						<h2>Со 100 летней гарантией</h2>--}}
{{--						<span class="d-flex justify-content-center align-items-center">Дарим подарки!</span>--}}
{{--						<p>скидки!!!!</p>--}}
{{--					</div>--}}
{{--					<div class="calculate">--}}
{{--						<div class="calculate-head"><h2>Калькулятор</h2></div>--}}
{{--						<hr>--}}
{{--						<div class="calculate-body">--}}
{{--							<form action="" method="post">--}}
{{--								<input type="hidden" class="type" value="calculate" name="type">--}}
{{--								<div><label for="square">Площадь потолка (м2):</label><input name="square" type="text" id="square" required value=32></div>--}}
{{--								<div><label for="price">Стоимость (Тг):</label><input type="text" name="price" id="price" required value=35200></div>--}}
{{--								<div><label for="phone">Ваш телефон:</label><input type="text" id="phone" name="tel" required class="tel" maxlength="12"></div>--}}
{{--								<p>Наш специалист свяжется с вами и договорится об удобном времени замера и консультации</p>--}}
{{--								<button>Оставить заявку</button>--}}
{{--							</form>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}

{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}


	<div class="container">
		<div class="row">

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-solid fa-laptop-code fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Ремонт ноутбуков</h3>
						<ul class="nav navbar-nav navbar-right ">
							<li>Замена экрана</li>
							<li>Замена термопасты</li>
							<li>Чистка от пыли</li>
							<li>Ремонт и замена модулей</li>
						</ul>
				</div>
			</div>

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-solid fa-computer fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Ремонт компьютеров</h3>
					<ul class="nav navbar-nav navbar-right ">
						<li>Ремонт и замена деталей</li>
						<li>Замена термопасты</li>
						<li>Профилактические работы</li>
						<li>Модернизация</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-brands fa-windows fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Компьютерная помощь</h3>
					<ul class="nav navbar-nav navbar-right ">
						<li>Установка Windows, Linux</li>
						<li>Установка программ</li>
						<li>Настройка компьютера</li>
						<li>Удаление вирусов</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-solid fa-network-wired fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Настройка интернета</h3>
					<ul class="nav navbar-nav navbar-right ">
						<li>Установка WiFi роутера</li>
						<li>Настройка WiFi сети</li>
						<li>Интернет подключение</li>
						<li>Обжим сетевого кабеля</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-solid fa-database fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Восстановление данных</h3>
					<ul class="nav navbar-nav navbar-right ">
						<li>Восстановление фото</li>
						<li>Ремонт накопителя</li>
					</ul>
				</div>
			</div>

			<div class="col-12 col-md-4 creep mb-4">
				<div class="col-md">
					<i class="fa-solid fa-headset fa-3x"></i>
				</div>
				<div class="col-md">
					<h3 class="fw-bold">Помощь онлайн</h3>
					<ul class="nav navbar-nav navbar-right ">
						<li>Установка программ</li>
						<li>Настройка компьютера</li>
						<li>Обслуживание компьютера</li>
					</ul>
				</div>
			</div>

		</div>
	</div>


	<div class="call">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Вызовите мастера в любой день,<br>мы работаем без выходных!</h2>
					<h3><strong style="color: crimson">Внимание: c 20:00 по 8:00 цены на услуги повышены в двое.<br class="d-none d-md-block"> Выполняются только
							программные ремонты. (Переустановка, восстановление Windows)</strong></h3>
					<button data-toggle="modal" data-target="#zamer">ОСТАВИТЬ ЗАЯВКУ</button>
				</div>
			</div>
		</div>
	</div>

</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="copy">MOBIBUS 2022</div>
				<div class="desc">Ремонт и обслуживание<br>компьютеров в Рославле</div>
				<div class="footer-contacts">
					<a class="link-tel smoothScroll" href="tel:+79517150552"><img src="{{ asset('images/tel.png') }}" alt="icon">+7 (951) 715 05 52</a>
					<a class="link-mail smoothScroll" href="mailto:mobibus.ru@gmail.com"><img src="{{ asset('images/mail.png') }}" alt="icon">mobibus.ru@gmail.com</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<a class="up" href="#"><img src="{{ asset('images/chevron-up.png') }}" alt="icon"></a>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>