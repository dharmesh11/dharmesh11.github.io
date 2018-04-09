<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	*{margin: 0;padding: 0;}
	#box{display: table;position: absolute;height: 100%;width: 100%;text-align: center;}
	.innerwrap{display: table-cell;vertical-align: middle;font-family: arial;font-size: 50px;color: #fff;text-transform: uppercase;}
</style>
<body>
	<div id="wrapper"></div>
<script type="text/javascript">
	var day = new Date();
	var time = day.getHours();

	if(time >= 4 && time <= 11){
		bodyColor("Good Morning","yellow");
	}else if(time >= 12 && time <= 15){	
		bodyColor("Good Afternoon","orange");
	}else if(time >= 16 && time <= 19){
		bodyColor("Good Evening","blue");
	}else{
		bodyColor("Good Night","black");
	}

	function bodyColor(text,color){
		document.body.style.backgroundColor = color;
		var ele = document.createElement('div');
			ele.id = "box";
		var newEle = document.createElement('div');
			newEle.className = "innerwrap";
			newEle.innerHTML = text;
			ele.appendChild(newEle);
			document.getElementById('wrapper').appendChild(ele);
	}
</script>
</body>
</html>