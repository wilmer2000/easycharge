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

  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
          tinymce.init({
              selector: "textarea",
              plugins: [
                  "advlist autolink lists link image charmap print preview anchor",
                  "searchreplace visualblocks code fullscreen",
                  "insertdatetime media table contextmenu paste"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
          });
  </script>
</head>
<body>

<div id="wrapper">

<div class="container">
	<div class="col-md-12">
		<?php include('menu.php');?>
		<p><a href="./">Blog Admin Index</a></p>

		<h2>Edit Post</h2>


		<?php

		//if form has been submitted process it
		if(isset($_POST['submit'])){

			$_POST = array_map( 'stripslashes', $_POST );

			//collect form data
			extract($_POST);

			//very basic validation
			if($postID ==''){
				$error[] = 'This post is missing a valid id!.';
			}

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
					$stmt = $db->prepare('UPDATE blog_posts SET postTitle = :postTitle, postDesc = :postDesc, postCont = :postCont WHERE postID = :postID') ;
					$stmt->execute(array(
						':postTitle' => $postTitle,
						':postDesc' => $postDesc,
						':postCont' => $postCont,
						':postID' => $postID
					));

					//redirect to index page
					header('Location: index.php?action=updated');
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

				$stmt = $db->prepare('SELECT postID, postTitle, postDesc, postCont FROM blog_posts WHERE postID = :postID') ;
				$stmt->execute(array(':postID' => $_GET['id']));
				$row = $stmt->fetch(); 

			} catch(PDOException $e) {
			    echo $e->getMessage();
			}

		?>

		<form action='' method='post'>
			<input type='hidden' name='postID' value='<?php echo $row['postID'];?>'>

			<p><label>Title</label><br />
			<input type='text' name='postTitle' value='<?php echo $row['postTitle'];?>'></p>

			<p><label>Description</label><br />
			<textarea name='postDesc' cols='60' rows='10'><?php echo $row['postDesc'];?></textarea></p>

			<p><label>Content</label><br />
			<textarea name='postCont' cols='60' rows='10'><?php echo $row['postCont'];?></textarea></p>

			<p><input type='submit' name='submit' value='Update'></p>

		</form>
		
	</div>
</div>


</div>

  </body>
</html>