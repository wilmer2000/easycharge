<?php //include config
	require_once('../config.php');


//if not logged in redirect to login page
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
			<div class="col-md-12">
				<p><a href="users.php">User Admin Index</a></p>
				<h2>Add User</h2>
				<?php

				//if form has been submitted process it
				if(isset($_POST['submit'])){

					//collect form data
					extract($_POST);

					//very basic validation
					if($username ==''){
						$error[] = 'Please enter the username.';
					}

					if($password ==''){
						$error[] = 'Please enter the password.';
					}

					if($passwordConfirm ==''){
						$error[] = 'Please confirm the password.';
					}

					if($password != $passwordConfirm){
						$error[] = 'Passwords do not match.';
					}

					if($email ==''){
						$error[] = 'Please enter the email address.';
					}

					if(!isset($error)){

						$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

						try {

							//insert into database
							$stmt = $db->prepare('INSERT INTO blog_members (username,password,email) VALUES (:username, :password, :email)') ;
							$stmt->execute(array(
								':username' => $username,
								':password' => $hashedpassword,
								':email' => $email
							));

							//redirect to index page
							header('Location: users.php?action=added');
							exit;

						} catch(PDOException $e) {
						    echo $e->getMessage();
						}

					}

				}

				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="error">'.$error.'</p>';
					}
				}
				?>

				<form action='' method='post'>

					<p><label>Username</label><br />
					<input type='text' name='username' value='<?php if(isset($error)){ echo $_POST['username'];}?>'></p>

					<p><label>Password</label><br />
					<input type='password' name='password' value='<?php if(isset($error)){ echo $_POST['password'];}?>'></p>

					<p><label>Confirm Password</label><br />
					<input type='password' name='passwordConfirm' value='<?php if(isset($error)){ echo $_POST['passwordConfirm'];}?>'></p>

					<p><label>Email</label><br />
					<input type='text' name='email' value='<?php if(isset($error)){ echo $_POST['email'];}?>'></p>
					
					<p><input type='submit' name='submit' value='Add User'></p>

				</form>
			</div>
		</div>
	</div>

  </body>
</html>