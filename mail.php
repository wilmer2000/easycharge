<?php
  
  //Email information
  $admin_email = "hola@easycharge.com.uy";
  $name = $_REQUEST['name'];
  $phone = $_REQUEST['phone'];
  $mail = $_REQUEST['mail'];
  $comment = $_REQUEST['comment'];
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
?>