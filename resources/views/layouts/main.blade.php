<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')" />
    <title>@yield('title')</title>
    <meta name="google" value="notranslate">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

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

@include('includes.main.header')

<main>
    @yield('content')
</main>

@include('includes.main.footer')

<a class="up" href="#"><img src="{{ asset('images/chevron-up.png') }}" alt="icon"></a>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>