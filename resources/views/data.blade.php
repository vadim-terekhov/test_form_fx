<!DOCTYPE html>
<html>
<head>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta lang="ru">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>тестовое задание</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>
	<div class="container">
		<h2>Что отправили с формы:</h2>
		<ul>
			<li>Сумма инвестиции = {{session('sumInv')}}</li>
			<li>Мультипликатор = {{session('mult')}}</li>
			<li>Значение прибыли = {{session('takeProfit')}}</li>
			<li>Значение убытка = {{session('stopLoss')}}</li>
			<li>Нажата клавиша = {{session('button')}}</li>
			<li></li>
		</ul>
	<a href="{{route('home')}}">Перейти на страницу с формой</a>
	</div>
	<!--      SCRIPTS     -->
	<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>