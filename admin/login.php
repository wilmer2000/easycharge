<?php
	//include config
	require_once('../config.php');

	//check if already logged in
	if( $user->is_logged_in()){ $html->redirect('admin/logged'); }

	//process login form if submitted
	if(isset($_POST['submit'])){

		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		
		if($user->login($username,$password)){ 

			//logged in return to index page
			header('Location: index.php');
			exit;
		

		} else {
			$message = '<p class="error">Wrong username or password</p>';
		}

	}//end if submit

	if(isset($message)){ echo $message; }
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin v1.0 - Easy Charge</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
	<div class="container">
		<div class="col-md-6 col-centrered">
			<form id="login" action="" method="post" >
				<h3>Admin login</h3>
			  <div class="form-group">
			    <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
			  </div>
			  <button type="submit" name="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
  </body>
</html>
