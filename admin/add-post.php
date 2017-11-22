<?php

	//include config
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

	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
	  tinymce.init({
	      selector: "textarea",
	      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	  });
	</script>
</head>
	<body>
		<?php include('menu.php');?>
		<div id="wrapper">
			<div class="container">
				<div class="col-md-12">
					<h2>Agregar Post</h2>

					<?php
						//if form has been submitted process it
						if(isset($_POST['submit'])){

							$_POST = array_map( 'stripslashes', $_POST );

							//collect form data
							extract($_POST);

							//very basic validation
							if($postTitle ==''){
								$error[] = 'Please enter the title.';
							}

							if($postDesc ==''){
								$error[] = 'Please enter the description.';
							}

							if($postCont ==''){
								$error[] = 'Please enter the content.';
							}

							if(!isset($error)){

								try {

									//insert into database
									$stmt = $db->prepare('INSERT INTO blog_posts (postTitle,postDesc,postCont,postDate) VALUES (:postTitle, :postDesc, :postCont, :postDate)') ;
									$stmt->execute(array(
										':postTitle' => $postTitle,
										':postDesc' => $postDesc,
										':postCont' => $postCont,
										':postDate' => date('Y-m-d H:i:s')
									));

									//redirect to index page
									header('Location: index.php?action=added');
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
						<div class="form-group">
							<label>Title</label>
							<input class='form-control' type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea class='form-control' name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea>
						</div>
						<div class="form-group">
							<label>Content</label>
							<textarea class='form-control' name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea>	
						</div>
						<button class='btn btn-success' name='submit' value='Submit'>Agregar post</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
