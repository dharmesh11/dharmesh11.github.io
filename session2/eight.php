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
			<p>Question - Write a condition to check if the given age is of a teenager or no. ?</p>
			<p>Enter Your age to check you are teenager or Not</p>
			<form action="#">
				<input type="number" id="age">
				<button type="button" onclick="checkAge()">Submit</button>
				<div id="errmsg"></div>
			</form>
		</div>

	</div>
	<script type="text/javascript">
		function checkAge(){
		var age = document.getElementById('age').value;
		if(age == ""){
			document.getElementById('age').style.borderColor = 'red';
			errorMsg("Please Enter your Age");
		}else if(age >= 18){
			errorMsg("Your are Not Teenager");
			document.getElementById("errmsg").style.color = 'green';
		}else{
			errorMsg("Your are Teenager");
		}
		document.getElementById('age').value = "";
	}
	function errorMsg(text){
		document.getElementById("errmsg").innerHTML = text;
		document.getElementById("errmsg").style.color = 'red';
	}
	</script>
</body>
</html>