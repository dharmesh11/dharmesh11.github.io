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
			<p>Question - Find greatest among 4 numbers?</p>
			
			<p>var a=10,b=20,c=30,d=6;</p>
			
			<p>if(a>b && a>c && a>d){</p>
				<p>alert("a is greater");</p>
			<p>}else if(b>a && b>c && b>d){</p>
				<p>alert("b is greater");	</p>
			<p>}else if(c>a && c>b && c>d){</p>
				<p>alert("c is greater");</p>
			<p>}else{</p>
				<p>alert("d is greater");</p>
			<p>}</p>
		</div>

	</div>
	<script type="text/javascript">
		var a=10,b=20,c=30,d=6;
			
			if(a>b && a>c && a>d){
				alert("a is greater");
			}else if(b>a && b>c && b>d){
				alert("b is greater");	
			}else if(c>a && c>b && c>d){
				alert("c is greater");
			}else{
				alert("d is greater");
			}
	</script>
</body>
</html>