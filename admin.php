<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#02B4B6">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
        <meta name="description" content="Easy Charge es un dispositivo portátil que permite cargar la batería de hasta 8 smartphones a la vez, además de contar con una pantalla LCD integrada que funciona como un vehículo de comunicación">
        <meta name="keywords" content="cargador, uruguay, publicidad, montevideo, portatil, eventos, iphone, android, pantalla, power, bank, usb, locales, negocios, pub, boliches" />
        <meta name="author" content="EasyCharge Uruguay">
        <title>Easy Charge - Mantenete conectado</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css?v=1.4">
        <link rel="stylesheet" href="css/responsive.css?v=1.4">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
	<body>

		<?php require('includes/html/header.php'); ?>



		<div id="wrapper">

			<h1>Blog</h1>
			<hr />

			<?php
				try {

					$stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
					while($row = $stmt->fetch()){
						
						echo '<div>';
							echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
							echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
							echo '<p>'.$row['postDesc'].'</p>';				
							echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';				
						echo '</div>';

					}

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
			?>

		</div>

		<?php require('includes/html/find_us.php'); ?>

		<?php require('includes/html/footer.php'); ?>
	</body>
</html>