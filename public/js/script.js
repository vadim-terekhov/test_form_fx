$(document).ready(function(){
	$.validator.addClassRules({
			takeProfit:{
				min: 1000,
			},
			stopLoss:{
				min: 1000,
			},
		});
	$.validator.messages.min = "Не может быть меньше $ 1000";

	$("#mainform").validate({
		rules:{
			sumInv:{
				required: true,
				digits: true,
				min: 100,
				range: [0,200000],
			},
			mult:{
				required: true,
				digits: true,
				range: [1,40],
			},
		},

		messages:{
			sumInv:{
				required: "Обязательно для заполнения",
				digits: "Только цифры",
				min: "Минимальная сумма инвестиции $100",
				range: "Диапазон от 0 до 200 000",
			},
			mult:{
				required: "Обязательно для заполнения",
				digits: "Только цифры",
				range: "Неверное значение мультипликатора",
			},
		},
	});
	/*-------------*/
	$("#slider").slider({
		min: 1,
		max: 40,
		value: 40,
		step: 1,
		range: "min",
		slide: function(event,ui){
			$("#mult").val(ui.value);
		}
	});
	$("#mult").val($("#slider").slider("value"));
	
	startspinner(1000);// по умолчанию установлены $ поле не меньше 1000
	/*----------*/
	$("#mult").focusin(function(){
		$(".slider-container").removeClass("slider-hidden");
	});
	$("#slider span").mouseup(function(){
		$(".slider-container").stop().addClass("slider-hidden");
		$(".result").html(result());
	});
	/*----------*/
	var flag = 1;
	$(".row3 img, .row3 p").click(function(){
		if (flag == 0){
			$(".row4,.row5,.row6").css({
				"display":"block",
				"opacity":0
			});
			flag = 1;
			$(".row3 img").addClass("transform90");
		}else{
			$(".row4,.row5,.row6").css({
				"display":"block",
				"opacity":1
			});
			flag = 0;
			$(".row3 img").removeClass("transform90");
		}
	});
	/*--------*/
	$("#sumInv").focusout(function(){
		$(".result").html(result());
		$("#takeProfit").val(takeProfit());
		$("#stopLoss").val(stopLoss());
	});
	/*--------*/
	$(".result").html(result());
	$("#takeProfit").val(takeProfit());
	$("#stopLoss").val(stopLoss());

	var takeProfitFlag = 1;
	$("#takeProfitcheck").click(function(){
		if (takeProfitFlag == 1){
			$("#takeProfit").removeAttr("readonly");
			$(".row5 span.ui-spinner.ui-corner-all.ui-widget.ui-widget-content a").css("display","inline-block");
			$("#takeProfit").addClass("shift-right");
			takeProfitFlag = 0;
		}else{
			$("#takeProfit").prop("readonly",true);
			$(".row5 span.ui-spinner.ui-corner-all.ui-widget.ui-widget-content a").css("display","none");
			$("#takeProfit").removeClass("shift-right");
			takeProfitFlag = 1;
		}
	});
	var stopLossFlag = 1;
	$("#stopLosscheck").click(function(){
		if (stopLossFlag == 1){
			$("#stopLoss").removeAttr("readonly");
			$(".row6 span.ui-spinner.ui-corner-all.ui-widget.ui-widget-content a").css("display","inline-block");
			$("#stopLoss").addClass("shift-right");
			stopLossFlag = 0;
		}else{
			$("#stopLoss").prop("readonly",true);
			$(".row6 span.ui-spinner.ui-corner-all.ui-widget.ui-widget-content a").css("display","none");
			$("#stopLoss").removeClass("shift-right");
			stopLossFlag = 1;
		}
	});
	/*--------*/
	$("input.procent").click(function(){
		$("#takeProfit").val(30);
		$("#stopLoss").val(30);
		startspinner(10);
		$.validator.addClassRules({
			takeProfit:{
				min: 10,
			},
			stopLoss:{
				min: 10,
				max: 100,
			},
		});
		$.validator.messages.min = "Не может быть меньше 10%";
		$.validator.messages.max = "Не может быть больше 100%";
	});

	$("input.dollar").click(function(){
		$("#takeProfit").val(takeProfit());
		$("#stopLoss").val(stopLoss());
		startspinner(1000);
		$.validator.addClassRules({
			takeProfit:{
				min: 1000,
			},
			stopLoss:{
				min: 1000,
				max: 10000,
			},
		});
		$.validator.messages.min = "Не может быть меньше $ 1000";
		$.validator.messages.max = "Не может быть больше $ 10000";
	});
	/*--------*/
	/*$("#mainform").submit(function(){
        $.ajax({
            url:'/form',
            type:'POST',
            data: $(this).serialize()
        }).done(function() {
           $(".messages").html("Данные отправлены");
           $('.messages').css({"display":"block"});
           //$("#mainform").trigger("reset");
           setTimeout(
                function(){
                 $('.messages').css({"display":"none"});
                },
                3000
           );
        });
        return false;
    });
	/*--------*/
	function result(){
		var sumInv = $("#sumInv").val();
		var mult = $("#mult").val();
		var result = sumInv * mult;
		return result.toLocaleString();
	}
	function takeProfit(){
		var sumInv = $("#sumInv").val();
		var result = (sumInv * 30) / 100;
		return result;
	}
	function stopLoss(){
		var sumInv = $("#sumInv").val();
		var result = (sumInv * 30) / 100;
		return result;
	}
	function startspinner(min){
		$("#takeProfit,#stopLoss").spinner({
			step: 1,
			min: min,
		});
	}
});

