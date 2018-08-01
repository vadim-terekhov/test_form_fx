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
		<a href="{{route('data')}}">Посмотреть что отправили на сервер</a>
		<div class="messages">
		</div>
		{{session('growth')}}
		{{session('reduction')}}
		<form method="post" id="mainform" action="/form">
			{{ csrf_field() }}
			<h2>Инвестировать сейчас</h2>
			<div class="rows row1">
				<div class="item_left">
					<label for="sumInv">Сумма инвестиции</label>	
				</div>
				<div class="item_right">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAS2SURBVHhe7Zzfi1RlGMe3H0RK5UVSXtkPojaDigwMCQoKFDIqyptCiii7EdSwhLwohKg/QKKii2AraqCoCCqExmDb2TM7M7vBVmgIhi1dpGYZlda6fV54Bg7vvnM858x5l3Px/cCXs7Lv877yeWbm/JwdEUIIIYQQQgghhBBCCCGEEPVkamrqCDkRyPs2RCwlnU7nJFnwQ0M+syFiKUG+GlInkK+G1AnkqyF1AvlqSJ1AvhpSF5rN5oXI/8NvhgsN+ZE82263t3S73Y1sb1hYWDjfSkVVTE9PX43o3eRzcirUjIy45h2gbm+SJLfalKIMSLwbmZ+Q/0zu0GHOQ2x3jI+PX2rLiHPRarWuRNy7vsyK840tJ7KgEevIrwGBlYY1XrElxSAQtQFRf/ryIuVOW1aEQNAozSi6wy6b441G4wJbWvhMTEwsoxnfBcTFSsOWFiEQtN0TNjA07ixxh7+Pcxh7/ezs7CU2zYj7mTGjnIPcz/ZVxkyQM+l6F1drJcLH3h1zvrRQGPcTJ3vrrTQX1K2gQVtdc2yO+ZmZmSvs18IHSZv6wrOCyBOIvc7KSkH97cyz1/4pQiBoX6gBfhj3vJWImCC758sPZXJy8horETFB9i++/FDgPCsRMeGjaNFRUCi8Qy6zEhETZP/lyw+Fo6uHrUTEBNmHffmh8E76nu1yKxOxQPTXvvyM7E+fCIoI0JA9AfEDw/gfyDorF1WTJMlNIfFZoSHzZMzdSbRpRJUg94uQ+Bz5l9oP2N5hU4kq6PV6a5zclOjCoTHuWtVm9xCETSuGAaG7fcklc5S59rjbwDa1KAsiXwsILhXm+ofsU2OGwF0eQeJL5GxIcpkwl7sL+SKHyxfZMqIoCHwQkVU/6MCuqrfGlhBF4XD4cpryZpXvFuIu02yyJUQZeFXfgsQGjZlPiS0d5jlNHrHpRVm63e6NCH2d/J4WXCbWlNtsajEM7loWMp9CbK4bWxk5qOtiFdNut++iOR+Rsh9nu2wqUSU05lrkvkdjCh0AMH5Oh8MRYT+zEclFD5c3WLmIgXsYAslHPekDQwNftlIRC/f8FbLzfqdkv5WJmPDKHwvIXxTGfWslIiaIfiDUAD+Mm7MSEZO8dyJpyM9WImLCfmRtqAF+aEjHSkRMkP2ELz8UGvKplYg+MS5hIPuAL39AnrMS0YdXqbtT2Cz63Y9BMNfTKeGZcVeTrUz0oSFHUpLcK/sx90Ue+3Vu7I7jNurznoNM6yFuD6SMepL6OYncMXbOW92l9yxxzWbzYsZvZnzLmyMzjNd9ER+k7AzJCuQYYyfJh/z8Fts32LobV47TqXG5Qk2LJuvvoPgg5suQsJhhzd/01GMAt59A0N++sJihGe7xoPvsvyDSODEhabHCeqfYH91jywsfBD1KCn/+lwnrdGjGzba0GASSrkLY2wjL9dW2EjlGdumZ34IgbSVNeYZ8RYZ65Id6dyuX88z2k2XOZ4QHMlcg8162L5CPySySz3lrljHvsH2IrLSpREzcAwk0aku6CV70J5eWGt4FWUdmashSo4bUDDWkZqghNUMNqRlqSM1A+mq7R7IoSZKssmFCCCGEEEIIIYQQQgghhBBCiGxGRv4HjM0y6Kwn0ZMAAAAASUVORK5CYII=" class="dollar">
					<input id="sumInv" type="text" value="10000" name="sumInv">	
				</div>
			</div>
			<div class="rows row2">
				<div class="item_left">
					<label for="mult">Мультипликатор</label>	
				</div>
				<div class="item_right">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALWSURBVHhe7d3tauJAFMZxb6Dfut3dW97rEkQiYltteze7c+Q8wQ1JM0nm9czzh0PFJCTODxTrh+wYY4wxxhhjjDHGGGup/X7/pA+brZg16Lruz+l0ej+fzz/0qea6XC4vbg2ushb6VJ4U46+Me/zaIgowHtYhD8ojxsPFXNzfZ93FfEMMTHKUMQxMKyhTGJhkKPLh5U44eSEygmL57WsOQ+ea7INeFtst+uvIRfRjFcUXQ/bTQ9LkTvqsb09jF3QfayjFYiB38mZQisdA7iLMo1SDgfQzxSRKdRjIE6WqL4/VYiBLKNVjIAsoZjCQosx9TykSxRwG8kR5KwnFLAaqCcU8BqoBpRkMVDJKcxioRJRmMZCivI286H5SoTSPgXxQ3ET9jZ4Yg3KiEGOiHCjEmEkW2y3A+2BBhhMEhRieeaJct6AQY2ExUYixshgoxNhYSBRiBCoECjECpyirFpQYkVqDQozILUEhRqJ8UXTGtmGIESpPlO+GGKHzfEsaG2LEagUKMWK3AIUYKSJIQS3AwBAlVisw7tN13Y0ogVuLgSFKwDwxZPu3+xAlQL4Ysp/PvkTZ0BIMPeR+jCz6yH79yPbD4fBTD2E+rcFARAncFgxElECFwEBE2VhIDESUlcXAQLLYHigfRNFiYiCieJYCAxFlppQYiCgT5cBAivIxcr5+ZPvxePylh9guJwYiilYCBmoepSQM1CxKiRioOZSSMZAstgfKZ/UoNWAg8yg1YSCzKDViIHMoNWMgRfkcue5+ZLub33pImVnAQNWjWMJA1aJYxEDVoVjGQLLYcyhuvrKjtICBikdpCQMVi9IiBvJBke3yPzI9JG4+N3RxYxIDCYp7jV+D1/zfuH1uyW7o4k42ecsjN6Yx0ByKrJHumqYJlCYw0BRKcgw0QGkKAwmKm/4zJRsGUpQmMZD+yHXLjoGKue1oxrgGjDHGGGOMMcYYY6ytdrt/Y8eeGz67MJsAAAAASUVORK5CYII=" class="multiply">
					<input id="mult" type="text"  name="mult">
					<span class="grey"> = $ </span><span class="grey result"></span>
				</div>
				<div class="slider-container slider-hidden">
					<div id="slider"></div>
					<span class="one">1</span>
					<span class="five">5</span>
					<span class="twenty">20</span>
					<span class="forty">40</span>
				</div>
			</div>
			<div class="rows row3">
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQGSURBVHhe7Ze9alRRFIWDgmIKEUFQwU7Uwl6LFLaKTWobxcJXEK18A9HOJ9BY5QXEIgyTn8kgxCYWCumCWCkSDY5ryZ4wHPe9d86dMzP3Z32wuMncs3/OMpKsBSGEEEIIIYQQQgghhBBCCCGEEEIIIYQQQojqsbW1dW9zc/P5YDA4Zh+JAugVPaN39lEa0PQWdIDGAzxf7+zsnLBXIgN6RK/MswN6aK8mo9frXUazfTYeCt+/63a7p+2ICKA39CjwbJ9e2pFybG9vn0OjT6ONR9RfX18/b0eFQU/oTeDVP9FLempH40CDRTTohk1HhfefscAVK2k99IKeeF4NZZ4uWsl4rKysHEfR6mijLGHAPnTDSlsLPaAXnkeOVumxlRazsbFxFc2/OY1c4ex31Ny28tbBu9MDzxtP9JYeW/l4oOA6ivfCZlnCkF943rfy1sA7291dXxzt0VsrjwOFlzDso9PUFc7+wfOxlTce3tXu7PoRil7SUysvR6fTOYtma2HzAr1ocoDk3XjH4M5FWqOX1mIy0OgUGo71S34o/DS82d3dPWktGgPvxLt5d87RKj20FmngXwVY5JUzLFM436gA6QW+ItGzqL+oYsGAZ97gLOH8B+iCldcW3oF38e6YJXpl5dMFgx5h4GG4QJZwvtYBcpzAF+iQHln5bMDQZejnyBJF+oolaxcguTN3D+6SJ3qybOWzBYOXsHBUgITuWHnl4a7c2buLJ/NiycrnQ2yAhH5DlQ+Q3NF29e7gqXzgS03JAPnEyisHd7Md3f1D8e4TB77UNCFAzj3wpaZMgITeViFAcgfuEuxWpPSBLzVlA2S/3z9jLWYOZ3MHb7cs8Y5TDXypwcK1CJCcydneTlni3ay8XmDx6ACJ5zUrnzqcZTPdfRzNPvClBpeoZIDkDM4KZudpfoEvNbhIdIDE866VJ4e9bYY7P5TtPt/Al5oyAbLX6z2w8mSwJ3sHs/JUncCXmjIBEnpq5RPDXuzpzfLEXSsX+FJTMkC+nORPTNayR9CzSNUNfKmZZYBsbOBLTZkACb2PCZA8y5qgR664U60CX2pgQHSAxC/mi1aeCc/wrNcjS9zFytsNjIgNkF/wzAyQfGdn3HpH9Q98qYEp0QESumnlR/Aze+fVeGpO4EsNjIkNkD/wPAqQ/No+c8+HslnNCnypKRMgYexDil8H7/LU3MCXmpIBUoFvmpQMkOOoPYEvNSUDZJ7aF/hSUzJA/if2aHXgSw0MjQqQo2KttREpgbFRARJS4Js2MHncAKnANytgdG6AtHcKfLMkJ0Aq8M2LMEDyawW+OcOQh3+IDqXAVxHwv2ORsm+FEEIIIYQQQgghhBBCCCGEEEIIIYQQQgghhKgfCwt/AfAryyyYNE96AAAAAElFTkSuQmCC" class="expand transform90">
				<p>Ограничить прибыль и убыток</p>
			</div>
			<div class="rows row4">
				<div class="item_left">
					<label>Ограничения в</label>
				</div>
				<div class="item_right">
					<input type="radio" name="ogr" value="%" class="procent"><span class="ml mr">%</span>
					<input type="radio" name="ogr" value="$" class="dollar" checked=""><span class="ml">$</span>
				</div>
			</div>
			<div class="rows row5">
				<div class="item_left">
					<input id="takeProfitcheck" type="checkbox" name="takeProfitcheck">
					<label for="takeProfit">Прибыль</label>
				</div>
				<div class="item_right">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAS2SURBVHhe7Zzfi1RlGMe3H0RK5UVSXtkPojaDigwMCQoKFDIqyptCiii7EdSwhLwohKg/QKKii2AraqCoCCqExmDb2TM7M7vBVmgIhi1dpGYZlda6fV54Bg7vvnM858x5l3Px/cCXs7Lv877yeWbm/JwdEUIIIYQQQgghhBBCCCGEEPVkamrqCDkRyPs2RCwlnU7nJFnwQ0M+syFiKUG+GlInkK+G1AnkqyF1AvlqSJ1AvhpSF5rN5oXI/8NvhgsN+ZE82263t3S73Y1sb1hYWDjfSkVVTE9PX43o3eRzcirUjIy45h2gbm+SJLfalKIMSLwbmZ+Q/0zu0GHOQ2x3jI+PX2rLiHPRarWuRNy7vsyK840tJ7KgEevIrwGBlYY1XrElxSAQtQFRf/ryIuVOW1aEQNAozSi6wy6b441G4wJbWvhMTEwsoxnfBcTFSsOWFiEQtN0TNjA07ixxh7+Pcxh7/ezs7CU2zYj7mTGjnIPcz/ZVxkyQM+l6F1drJcLH3h1zvrRQGPcTJ3vrrTQX1K2gQVtdc2yO+ZmZmSvs18IHSZv6wrOCyBOIvc7KSkH97cyz1/4pQiBoX6gBfhj3vJWImCC758sPZXJy8horETFB9i++/FDgPCsRMeGjaNFRUCi8Qy6zEhETZP/lyw+Fo6uHrUTEBNmHffmh8E76nu1yKxOxQPTXvvyM7E+fCIoI0JA9AfEDw/gfyDorF1WTJMlNIfFZoSHzZMzdSbRpRJUg94uQ+Bz5l9oP2N5hU4kq6PV6a5zclOjCoTHuWtVm9xCETSuGAaG7fcklc5S59rjbwDa1KAsiXwsILhXm+ofsU2OGwF0eQeJL5GxIcpkwl7sL+SKHyxfZMqIoCHwQkVU/6MCuqrfGlhBF4XD4cpryZpXvFuIu02yyJUQZeFXfgsQGjZlPiS0d5jlNHrHpRVm63e6NCH2d/J4WXCbWlNtsajEM7loWMp9CbK4bWxk5qOtiFdNut++iOR+Rsh9nu2wqUSU05lrkvkdjCh0AMH5Oh8MRYT+zEclFD5c3WLmIgXsYAslHPekDQwNftlIRC/f8FbLzfqdkv5WJmPDKHwvIXxTGfWslIiaIfiDUAD+Mm7MSEZO8dyJpyM9WImLCfmRtqAF+aEjHSkRMkP2ELz8UGvKplYg+MS5hIPuAL39AnrMS0YdXqbtT2Cz63Y9BMNfTKeGZcVeTrUz0oSFHUpLcK/sx90Ue+3Vu7I7jNurznoNM6yFuD6SMepL6OYncMXbOW92l9yxxzWbzYsZvZnzLmyMzjNd9ER+k7AzJCuQYYyfJh/z8Fts32LobV47TqXG5Qk2LJuvvoPgg5suQsJhhzd/01GMAt59A0N++sJihGe7xoPvsvyDSODEhabHCeqfYH91jywsfBD1KCn/+lwnrdGjGzba0GASSrkLY2wjL9dW2EjlGdumZ34IgbSVNeYZ8RYZ65Id6dyuX88z2k2XOZ4QHMlcg8162L5CPySySz3lrljHvsH2IrLSpREzcAwk0aku6CV70J5eWGt4FWUdmashSo4bUDDWkZqghNUMNqRlqSM1A+mq7R7IoSZKssmFCCCGEEEIIIYQQQgghhBBCiGxGRv4HjM0y6Kwn0ZMAAAAASUVORK5CYII=" class="dollar">
					<input id="takeProfit" type="text" name="takeProfit" value="5000" readonly="" class="takeProfit">
				</div>
			</div>
			<div class="rows row6">
				<div class="item_left">
					<input id="stopLosscheck" type="checkbox" name="stopLosscheck">
					<label for="stopLoss">Убыток</label>
				</div>
				<div class="item_right">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAS2SURBVHhe7Zzfi1RlGMe3H0RK5UVSXtkPojaDigwMCQoKFDIqyptCiii7EdSwhLwohKg/QKKii2AraqCoCCqExmDb2TM7M7vBVmgIhi1dpGYZlda6fV54Bg7vvnM858x5l3Px/cCXs7Lv877yeWbm/JwdEUIIIYQQQgghhBBCCCGEEPVkamrqCDkRyPs2RCwlnU7nJFnwQ0M+syFiKUG+GlInkK+G1AnkqyF1AvlqSJ1AvhpSF5rN5oXI/8NvhgsN+ZE82263t3S73Y1sb1hYWDjfSkVVTE9PX43o3eRzcirUjIy45h2gbm+SJLfalKIMSLwbmZ+Q/0zu0GHOQ2x3jI+PX2rLiHPRarWuRNy7vsyK840tJ7KgEevIrwGBlYY1XrElxSAQtQFRf/ryIuVOW1aEQNAozSi6wy6b441G4wJbWvhMTEwsoxnfBcTFSsOWFiEQtN0TNjA07ixxh7+Pcxh7/ezs7CU2zYj7mTGjnIPcz/ZVxkyQM+l6F1drJcLH3h1zvrRQGPcTJ3vrrTQX1K2gQVtdc2yO+ZmZmSvs18IHSZv6wrOCyBOIvc7KSkH97cyz1/4pQiBoX6gBfhj3vJWImCC758sPZXJy8horETFB9i++/FDgPCsRMeGjaNFRUCi8Qy6zEhETZP/lyw+Fo6uHrUTEBNmHffmh8E76nu1yKxOxQPTXvvyM7E+fCIoI0JA9AfEDw/gfyDorF1WTJMlNIfFZoSHzZMzdSbRpRJUg94uQ+Bz5l9oP2N5hU4kq6PV6a5zclOjCoTHuWtVm9xCETSuGAaG7fcklc5S59rjbwDa1KAsiXwsILhXm+ofsU2OGwF0eQeJL5GxIcpkwl7sL+SKHyxfZMqIoCHwQkVU/6MCuqrfGlhBF4XD4cpryZpXvFuIu02yyJUQZeFXfgsQGjZlPiS0d5jlNHrHpRVm63e6NCH2d/J4WXCbWlNtsajEM7loWMp9CbK4bWxk5qOtiFdNut++iOR+Rsh9nu2wqUSU05lrkvkdjCh0AMH5Oh8MRYT+zEclFD5c3WLmIgXsYAslHPekDQwNftlIRC/f8FbLzfqdkv5WJmPDKHwvIXxTGfWslIiaIfiDUAD+Mm7MSEZO8dyJpyM9WImLCfmRtqAF+aEjHSkRMkP2ELz8UGvKplYg+MS5hIPuAL39AnrMS0YdXqbtT2Cz63Y9BMNfTKeGZcVeTrUz0oSFHUpLcK/sx90Ue+3Vu7I7jNurznoNM6yFuD6SMepL6OYncMXbOW92l9yxxzWbzYsZvZnzLmyMzjNd9ER+k7AzJCuQYYyfJh/z8Fts32LobV47TqXG5Qk2LJuvvoPgg5suQsJhhzd/01GMAt59A0N++sJihGe7xoPvsvyDSODEhabHCeqfYH91jywsfBD1KCn/+lwnrdGjGzba0GASSrkLY2wjL9dW2EjlGdumZ34IgbSVNeYZ8RYZ65Id6dyuX88z2k2XOZ4QHMlcg8162L5CPySySz3lrljHvsH2IrLSpREzcAwk0aku6CV70J5eWGt4FWUdmashSo4bUDDWkZqghNUMNqRlqSM1A+mq7R7IoSZKssmFCCCGEEEIIIYQQQgghhBBCiGxGRv4HjM0y6Kwn0ZMAAAAASUVORK5CYII=" class="dollar">
					<input id="stopLoss" type="text" name="stopLoss" value="5000" readonly="" class="stopLoss">
				</div>
			</div>
			<div class="rows row7">
				<div class="item_left">
					<div class="wrapper wrapperleft">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIqSURBVHhe7dNBasJAHIVxoZteptBFD+xSvECXLroS9Sw9QpsH+UOUqJPJTPJMvg8etOkEMvzoZgldLpcvrf2V5kwQp9PpVwNl5gLjfD7/aaDM2C0GKDN2DyMGyoQ9w4iBMkGpGDFQKjYUIwZKhXIxYqAUbCxGDJQClcKIgTKi0hgxUDKqhREDZUC1MWKgJDQVRgyUB02NEQOlp6EYzdmfvufdpZyJgdIp4z9jezweP3ueX609s719fm+gNOVg7Pf7t+adj56/XU1ndLb5GZSUcjH0biqIzoKS0BgMNQREgfKgsRhqKIgCpacSGCoHRIHSqRSGygVRoDSVxFBjQNSqUUpjqLEgapUoNTBUCRC1KpRaGKoUiFoNSvPhu74L3VkyhioJojJQdu2rr9PhcHhvPvy770I3G4ShSoOoVBTdSXdrX3utElAGY6gaIOoZyktjRA9QsjBULRB1D2URGFEPSjaGqgmiblEWhRF1UEZhqNogKlAWiRHpYmMx1BQgSt+6WIySTQVCiQFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWLWckE2m3/yZ4I++rj/6QAAAABJRU5ErkJggg==" class="low_str">
						<button class="btn low" type="submit" name="reduction" value="reductionv">В снижение</button>	
					</div>
				</div>
				<div class="item_right">
					<div class="wrapper wrapperright">
					<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAIqSURBVHhe7dNBasJAHIVxoZteptBFD+xSvECXLroS9Sw9QpsH+UOUqJPJTPJMvg8etOkEMvzoZgldLpcvrf2V5kwQp9PpVwNl5gLjfD7/aaDM2C0GKDN2DyMGyoQ9w4iBMkGpGDFQKjYUIwZKhXIxYqAUbCxGDJQClcKIgTKi0hgxUDKqhREDZUC1MWKgJDQVRgyUB02NEQOlp6EYzdmfvufdpZyJgdIp4z9jezweP3ueX609s719fm+gNOVg7Pf7t+adj56/XU1ndLb5GZSUcjH0biqIzoKS0BgMNQREgfKgsRhqKIgCpacSGCoHRIHSqRSGygVRoDSVxFBjQNSqUUpjqLEgapUoNTBUCRC1KpRaGKoUiFoNSvPhu74L3VkyhioJojJQdu2rr9PhcHhvPvy770I3G4ShSoOoVBTdSXdrX3utElAGY6gaIOoZyktjRA9QsjBULRB1D2URGFEPSjaGqgmiblEWhRF1UEZhqNogKlAWiRHpYmMx1BQgSt+6WIySTQVCiQFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWIWIGYBYhYgZgFiFiBmAWLWckE2m3/yZ4I++rj/6QAAAABJRU5ErkJggg==" class="high_str">
					<button class="btn high" type="submit" name="growth" value="growthv">В рост</button>		
					</div>
				</div>
			</div>	
		</form> 
	</div>
	<!--      SCRIPTS     -->
	<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.validate.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>
</html>