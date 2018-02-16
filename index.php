<?php include('php/getData.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>WadeMob</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<section class="container-fluid">
		<SPAN class="col-md-12 text-center"><H1>ADMIN</H1></SPAN>
		<div class="col-md-12 text-center">
			<img class="col-md-3 img-circle" id="logo" src="img/logo.jpg">
		</div>	
		<form class="col-md-12" id="form">
			<table>
				<tr>
					<td class="col-md-12">
						<input type="text" name="username" placeholder="Username">
					</td>
				</tr>
				<tr>
					<td class="col-md-12">
						<input type="password" name="password" placeholder="Password">
					</td>
				</tr>
				<tr>
					<td class="col-md-12 text-center">
						<button class="btn">LOGIN</button>
					</td>
				</tr>
			</table>
		</form>
	</section>
	<script type="text/javascript" 	src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>