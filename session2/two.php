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
			<p>Question - var n = 2; n *= 3 + 5; alert( n ); What will alert this and why?</p>
			<p>var n = 2;</p>
	 		<p>n *= 3 + 5; //it means 2 * 3 + 5 so output will be 16 because first it will add then multiply</p>
	 		<p>alert( "n is "+ n );</p>
	 		
		</div>

	</div>
	<script type="text/javascript">
		var n = 2;
		n *= 3 + 5; //it means 2 * 3 + 5 so output will be 16 because first it will add then multiply
		alert( "n is "+ n );
	</script>
</body>
</html>