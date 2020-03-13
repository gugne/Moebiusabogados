<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email_from = $_POST['mail'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $mail_to = "bernagomez8@gmail.com";

  $headers = "From: ".$email_from;
  $txt = "Haz recibido un nuevo mensaje de".$name.".\n\n".$message;


  mail($mail_to,$txt,$headers);
  header("Location: index.html?mailsend");
}
 ?>
