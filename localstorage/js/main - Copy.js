(function(){

	
	var num = document.getElementById('num');
	num.onkeyup=function (event) {
		//console.log(event);
		if (event.which == 13 || event.keyCode == 13) {
			calculate();
		}
	}

	var calculate = function() {
		var operation = $('#selectval').val();
		var desc = $('#desc').val();
		var amount = $('#num').val();

		if (operation == 'plus') {
			income(desc,amt);
		}else{
			expense(desc,amt);
		}
	}

	var income = function(desc,amt){


	}

	var expense = function(desc,amt){

	}

	var ui = function(el,desc,amt){
		var list = "<li>";
			list += desc;
			list += "<span class='right'>"+amt+"</span";
			list += "</li>";

			$(el).append(list);
	}
})();

function runScript(e){

	var plus_money = [];
	var minus_money = [];
	var profit_arr = [];
	var exp_arr = [];

	
		
	var code = e.keyCode || e.which;
 		if(code == 13) {
	    	if (myval && desc && num != '') {
	        	if(myval == 'plus'){
					profit_arr.push(num);
					//console.log(profit_arr);
					total = eval(profit_arr.join("+"));
					//console.log(total);


					//var profitnum = localStorage.getItem("number");
					
					$('#profit .right').html(total);
					$('#desc').val("");
					$('#num').val("");

					plus_money.push(total);
					plusM = eval(plus_money.join());
					$('#total-money').html(plusM);

				}else if(myval == 'minus'){
					exp_arr.push(num);
					total_exp = eval(exp_arr.join("-"));
					console.log(total_exp);

					var list = "<li>";
					list += desc;
					list += "<span class='right'>"+num+"</span";
					list += "</li>";

					// minus_money.push(total_exp);
					// console.log(minus_money);
					minusM = total_exp - num;
					// minusM = minus_money.join(',')
					console.log(minusM);

					$('#total-money').html(minusM);
					$('#expense-wrap').append(list);
					$('#expense .right').html(total_exp);
					$('#desc').val("");
					$('#num').val("");

					
				}else{
					return false;
				}
			}else{
				return false;
			}	
    	}
	}

