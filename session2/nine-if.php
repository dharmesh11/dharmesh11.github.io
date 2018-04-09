<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<style type="text/css">
	*{margin: 0;padding: 0;box-sizing: border-box;font-family: arial,sans-serif;}
	.left-bar{position: absolute;width: 300px;height: 100%;background-color: #512692;padding: 50px 10px 0 20px;color: #fff;}
	h3{margin: 0 0 20px;text-transform: uppercase;font-size: 24px;}
	p{margin: 5px 0;}
	.left-bar ul li{margin: 10px 0 20px 20px;}
	.left-bar ul li a{color: #fff;text-decoration: none;}
	.right-bar{width: calc(100% - 350px);padding: 70px 0 0 20px;margin-left: 350px;}
	.right-bar .main{border: 1px solid #ccc;width: 800px;padding: 20px;}
</style>
<body>
	<div class="left-bar">
		<h3>Assignment</h3>
		<?php include('sidebar.php'); ?>
	</div>
	<div class="right-bar">
		<h3>Output</h3>
		<div class="main">
			<p>Question - Print/alert todays Day using if. Also print a message saying "It is a weekend" if Saturday or Sunday! or be creative.??</p>
			<p id="msg"></p>
		</div>

	</div>
	<script type="text/javascript">
		var day = new Date();
		var today = day.getDay();
		
		if(today == 0){
			displayMsg("Whats your plan for Sunday");
		}else if(today == 1){
			displayMsg("Today is Monday get back to Work");
		}else if(today == 2){
			displayMsg("Today is Tuesday");
		}else if(today == 3){
			displayMsg("Today is Wednesday");
		}else if(today == 4){
			displayMsg("Today is Thursday");
		}else if(today == 5){
			displayMsg("Today is Friday");
		}else{
			displayMsg("Thank God its Saturday");
		}
		function displayMsg(text){
			document.getElementById("msg").innerHTML = text;
		}
	</script>
</body>
</html>