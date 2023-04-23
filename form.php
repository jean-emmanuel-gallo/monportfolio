<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'gallojean.emmanuel@gmail.com'; // mettez ici votre adresse email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
