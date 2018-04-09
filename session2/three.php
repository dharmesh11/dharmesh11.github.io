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
			<p>Question - What are the final values of all variables a, b, c and d after the code below? <br/>
			var a = 1, b = 1; var c = ++a; var d = b++;</p>
			<p>var a = 1, b = 1; </p>
			<p>var c = ++a; // so a will increment by 1 so a value is 2 and c value also 2</p>
			<p>var d = b++; //	same as b will increment by 1 so b value is 2 and d value also 2</p>
			<p>alert("c = "+a);</p>
			<p>alert("d = "+b);</p>
			<p>alert("a = "+a);</p>
			<p>alert("b = "+b);</p>	 		
		</div>

	</div>
	<script type="text/javascript">
		var a = 1, b = 1; 
		var c = ++a; // so a will increment by 1 so a value is 2 and c value also 2
		var d = b++; //	same as b will increment by 1 so b value is 2 and d value also 2
		alert("c = "+a);
		alert("d = "+b);
		alert("a = "+a);
		alert("b = "+b);
	</script>
</body>
</html>