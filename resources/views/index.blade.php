@extends('layouts.main')

@section('description')Ремонт компьютеров 24 часа в сутки. Ознакомиться c ценами можете на сайте www.mobibus.ru. Быстро, честно, недорого!@endsection

@section('title')Mobibus | Ремонт копьютеров@endsection

@section('content')

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

	@include('includes.main.price')

	<div class="call">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Вызовите специалиста в любой день,<br>мы работаем без выходных!</h2>
					<h3><strong style="color: crimson">Внимание: c 20:00 по 8:00 цены на услуги повышены в двое<br class="d-none d-md-block">
							 и выполняются только программные ремонты. (Переустановка, восстановление Windows)</strong></h3>
					<a class="smoothScroll fw-bold display-1 text-white" href="tel:+79517150552">+7 (951) 715 05 52</a>
				</div>
			</div>
		</div>
	</div>

@endsection