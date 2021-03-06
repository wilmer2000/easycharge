<?php
//include config
	require_once('../config.php');


//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); }

//show message from add / edit page
if(isset($_GET['deluser'])){ 

	//if user id is 1 ignore
	if($_GET['deluser'] !='1'){

		$stmt = $db->prepare('DELETE FROM blog_members WHERE memberID = :memberID') ;
		$stmt->execute(array(':memberID' => $_GET['deluser']));

		header('Location: users.php?action=deleted');
		exit;

	}
} 

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
    
	  <script language="JavaScript" type="text/javascript">
		  function deluser(id, title)
		  {
			  if (confirm("Are you sure you want to delete '" + title + "'"))
			  {
			  	window.location.href = 'users.php?deluser=' + id;
			  }
		  }
	  </script>
</head>
<body>
	<?php include('menu.php');?>

	<div id="wrapper">
<div class="container">
	<div class="col-md-12">
		<?php 
			//show message from add / edit page
			if(isset($_GET['action'])){ 
				echo '<h3>User '.$_GET['action'].'.</h3>'; 
			} 
		?>

		<table>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
			<?php
				try {

					$stmt = $db->query('SELECT memberID, username, email FROM blog_members ORDER BY username');
					while($row = $stmt->fetch()){
						
						echo '<tr>';
						echo '<td>'.$row['username'].'</td>';
						echo '<td>'.$row['email'].'</td>';
						?>

						<td>
							<a href="edit-user.php?id=<?php echo $row['memberID'];?>">Edit</a> 
							<?php if($row['memberID'] != 1){?>
								| <a href="javascript:deluser('<?php echo $row['memberID'];?>','<?php echo $row['username'];?>')">Delete</a>
							<?php } ?>
						</td>
						
						<?php 
						echo '</tr>';

					}

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
			?>
		</table>

		<p><a href='add-user.php'>Add User</a></p>
	</div>
</div>


</div>

  </body>
</html>

