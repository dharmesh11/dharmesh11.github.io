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
			<p>Question - Rewrite this if using the ternary operator '?': if (a + b < 4) { result = 'Below'; } else { result = 'Over'; }</p>
			<p>var a =2,b=3;</p>
	 		<p>var c = (a + b < 4) ? 'Below' : 'over';</p>
	 		<p>alert(c);</p>
	 		
		</div>

	</div>
	<script type="text/javascript">
		var a =2,b=3;
		var c = (a + b < 4) ? 'Below' : 'over';
		alert(c);
	</script>
</body>
</html>