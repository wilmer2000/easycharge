<?php
	//include config
	require_once('../config.php');

	//if not logged in redirect to login page
	if(!$user->is_logged_in()){ header('Location: login.php'); }

	//show message from add / edit page
	if(isset($_GET['delpost'])){ 

		$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
		$stmt->execute(array(':postID' => $_GET['delpost']));

		header('Location: index.php?action=deleted');
		exit;
	} 
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
		<script language="JavaScript" type="text/javascript">
			function delpost(id, title) {
				if (confirm("Are you sure you want to delete '" + title + "'")) {
					window.location.href = 'index.php?delpost=' + id;
				}
			}
		</script>
	</head>
	<body>
		<?php include('menu.php');?>

		<div id="wrapper">
			<div class="container">
				<?php 
					//show message from add / edit page
					if(isset($_GET['action'])){ 
						echo '<h3>Post '.$_GET['action'].'.</h3>'; 
					} 
				?>

				<table>
					<thead>
						<tr>
							<th>Title</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							try {

								$stmt = $db->query('SELECT postID, postTitle, postDate FROM blog_posts ORDER BY postID DESC');
								while($row = $stmt->fetch()){

								echo '<tr>';
								echo '<td>'.$row['postTitle'].'</td>';
								echo '<td>'.date('jS M Y', strtotime($row['postDate'])).'</td>';
								?>

								<td>
									<a href="edit-post.php?id=<?php echo $row['postID'];?>">Edit</a> | 
									<a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')">Delete</a>
								</td>

								<?php 
									echo '</tr>';
								}

							} catch(PDOException $e) {
								echo $e->getMessage();
							}
						?>
					</tbody>
				</table>

				<p><a href='add-post.php'>Add Post</a></p>
			</div>
		</div>
	</body>
</html>
