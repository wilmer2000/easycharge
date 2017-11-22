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

			$message = 'Contraseña o usuario incorrecto.';
		}

	}//end if submit

	
	
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
	<div class="login_content">
		<div class="form_content box_shadow rounded">
			<h2>Admin EasyCharge v1.0</h2>
			<p>Ingrese su usuario y contraseña para ingresar al administrador de contenido.</p>
			<?php 
				if(isset($message)){ 
					echo '<div class="alert alert-danger	" role="alert">';
					echo $message;
					echo '</div>';
				}
			?>
			<form id="login" action="" method="post" >
			  <div class="form-group">
			    <input type="text" class="form-control" id="username" name="username" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary btn-block">Ingresar</button>
			</form>
		</div>
	</div>
  </body>
</html>
