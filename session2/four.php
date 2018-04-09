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
			<p>Question - What are the values of a and x after the code below?</p>
			<p>var a = 2; var x = 1 + (a *= 2); ???</p>
			<p>var a = 2;</p>
	 		<p>var x = 1 + (a *= 2); // this line means x = 1 + (2 * 2) so it gives 5</p>
	 		<p>alert("x is "+  x); //x will be 5 and a is 2</p>
	 		
		</div>

	</div>
	<script type="text/javascript">
		var a = 2;
		var x = 1 + (a *= 2); // this line means x = 1 + (2 * 2) so it gives 5		
		alert("x is "+  x); //x will be 5 and a is 2
	</script>
</body>
</html>