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

<div id="wrapper">
<div class="container">
	<div class="col-md-12">
		<?php include('menu.php');?>
		<p><a href="users.php">User Admin Index</a></p>

		<h2>Edit User</h2>


		<?php

		//if form has been submitted process it
		if(isset($_POST['submit'])){

			//collect form data
			extract($_POST);

			//very basic validation
			if($username ==''){
				$error[] = 'Please enter the username.';
			}

			if( strlen($password) > 0){

				if($password ==''){
					$error[] = 'Please enter the password.';
				}

				if($passwordConfirm ==''){
					$error[] = 'Please confirm the password.';
				}

				if($password != $passwordConfirm){
					$error[] = 'Passwords do not match.';
				}

			}
			

			if($email ==''){
				$error[] = 'Please enter the email address.';
			}

			if(!isset($error)){

				try {

					if(isset($password)){

						$hashedpassword = $user->password_hash($password, PASSWORD_BCRYPT);

						//update into database
						$stmt = $db->prepare('UPDATE blog_members SET username = :username, password = :password, email = :email WHERE memberID = :memberID') ;
						$stmt->execute(array(
							':username' => $username,
							':password' => $hashedpassword,
							':email' => $email,
							':memberID' => $memberID
						));


					} else {

						//update database
						$stmt = $db->prepare('UPDATE blog_members SET username = :username, email = :email WHERE memberID = :memberID') ;
						$stmt->execute(array(
							':username' => $username,
							':email' => $email,
							':memberID' => $memberID
						));

					}
					

					//redirect to index page
					header('Location: users.php?action=updated');
					exit;

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}

			}

		}

		?>


		<?php
		//check for any errors
		if(isset($error)){
			foreach($error as $error){
				echo $error.'<br />';
			}
		}

			try {

				$stmt = $db->prepare('SELECT memberID, username, email FROM blog_members WHERE memberID = :memberID') ;
				$stmt->execute(array(':memberID' => $_GET['id']));
				$row = $stmt->fetch(); 

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		?>

		<form action='' method='post'>
			<input type='hidden' name='memberID' value='<?php echo $row['memberID'];?>'>

			<p><label>Username</label><br />
			<input type='text' name='username' value='<?php echo $row['username'];?>'></p>

			<p><label>Password (only to change)</label><br />
			<input type='password' name='password' value=''></p>

			<p><label>Confirm Password</label><br />
			<input type='password' name='passwordConfirm' value=''></p>

			<p><label>Email</label><br />
			<input type='text' name='email' value='<?php echo $row['email'];?>'></p>

			<p><input type='submit' name='submit' value='Update User'></p>

		</form>
		
	</div>
</div>

</div>


  </body>
</html>