<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'bernagomez8@gmail.com';

    $email_subject = 'New form Submission';

    $email_body = "User name: $name.\n".
                    "User email: $visitor_email.\n".
                        "User phone: $phone.\n".
                            "User Message: $message.\n";

    $to = "berna_gomez8@hotmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

 ?>
