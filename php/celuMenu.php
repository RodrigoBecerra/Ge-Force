<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>menu celular</title>
	<style>
		body {
			background-color: black;
		}
		h1{
			font-size: 400%;
			color: white;
			text-align: center;
		}
		.button {
	    background-color: #303030;
			border: none;
    	color: white;
    	padding: 32px 32px;
    	text-align: center;
    	text-decoration: none;
    	display: inline-block;
    	font-size: 32px;
    	cursor: pointer;
			width: 100%;
			transition-duration: 0.4s;
		}
		.button:hover {
			box-shadow: 0 12px 16px 0 rgba(255,255,255,0.24),0 17px 50px 0 rgba(255,255,255,0.19);
		}
	</style>
</head>
<body>
	<h1>que usar:</h1><br>
	<button class="button button" onclick="document.location.href='indexCelu.php'">version de android</button><br><br><br>
	<button class="button button" onclick="document.location.href='indexPC.php'">version de escritorio/tablet</button><br>
</body>
</html>
