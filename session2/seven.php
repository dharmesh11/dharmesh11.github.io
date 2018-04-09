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
			<p>Question - Rewrite following to switch. var a = +prompt('a?', ''); if (a == 0) { alert( 0 ); } if (a == 1) { alert( 1 ); } if (a == 2 || a == 3) { alert( '2,3' ); }</p>
	 		var a = prompt('Enter value of a', '');<br>
	 		number(a);<br>
	 		function number(a){<br>
	 			var checkNumber = /^[0-9]*$/;<br>
	 			if (checkNumber.test(a)){<br>
	 				switch(true){<br>
	 				 	case (a == ""):<br>
	 				 	alert("Please Enter a number");<br>
	 				 	break;<br>
	 				 	case (a == 0):<br>
	 				 	alert("Your Number 0");<br>
	 				 	break;<br>
	 				 	case (a == 1):<br>
	 				 	alert("Your Number 1");<br>
	 				 	break;<br>
	 				 	case (a == 2 || a == 3):<br>
	 				 	alert("Number is 2 or 3");<br>
	 				 	break;<br>
	 				 	default:<br>
	 				 	alert("Number is above 3");<br>
	 				}<br>
	 			}else{<br>
	 			    alert("Your input is Not a number");<br>
	 			}<br>
	 		}<br>
		</div>

	</div>
	<script type="text/javascript">
		var a = prompt('Enter value of a', '');
	number(a);
	function number(a){
		var checkNumber = /^[0-9]*$/;
		if (checkNumber.test(a)){
			switch(true){
			 	case (a == ""):
			 	alert("Please Enter a number");
			 	break;
			 	case (a == 0):
			 	alert("Your Number 0");
			 	break;
			 	case (a == 1):
			 	alert("Your Number 1");
			 	break;
			 	case (a == 2 || a == 3):
			 	alert("Number is 2 or 3");
			 	break;
			 	default:
			 	alert("Number is above 3");
			}
		}else{
		    alert("Your input is Not a number");
		}
	}
	</script>
</body>
</html>