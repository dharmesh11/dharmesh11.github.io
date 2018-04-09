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
			<p>Question - Print/alert todays Day using switch. Also print a message saying "It is a weekend" if Saturday or Sunday! or be creative.?</p>
			<p id="msg"></p>
			
		</div>

	</div>
	<script type="text/javascript">
		var day = new Date();

	switch(day.getDay()){
		case 0:
		day = "Sunday";
		displayMsg("Whats Plan for "+day);
		break;
		case 1:
		day = "Monday";
		displayMsg("Today is "+day+" get back to Work");
		break;
		case 2:
		day = "Tuesday";
		displayMsg("Today is "+day);
		break;
		case 3:
		day = "Wednesday";
		displayMsg("Today is "+day+ "and SEM Weekly meeting at 3:30PM" );
		break;
		case 4:
		day = "Thursday";
		displayMsg("Today is "+day);
		break;
		case 5:
		day = "Friday";
		displayMsg("Today is "+day);
		break;
		default:
		day = "Saturday";
		displayMsg("Thank God its "+day);
	}
	function displayMsg(text){
		document.getElementById("msg").innerHTML = text;
	}
	</script>
</body>
</html>