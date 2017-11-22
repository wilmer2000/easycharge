<?php
	//include config
	require_once('../config.php');
	if(!$user->is_logged_in()){ header('Location: login.php'); }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Admin v1.0 - Easy Charge</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
		<?php include('menu.php');?>

		<div id="wrapper">
			<div class="container">
			</div>
		</div>
	</body>
</html>
