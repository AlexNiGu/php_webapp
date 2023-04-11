<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" main="screen" href="css/style.css">
	<title>Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="Sign-account" id="Sign-account">
			<form action="" id="" method="GET">
				<h1 class="Sign-in">Errors message</h1>
				<h3>Hello <?php echo $username?></h5>
				<h5>Error number: <?php echo $error?></h5>
				<h5>Error message: <?php echo $message?></h5>
			</form>
		</div>
	</div>
	<script src="js/getParameters.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

