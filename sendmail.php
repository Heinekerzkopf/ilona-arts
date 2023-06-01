<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = 'ervin.koroman12@gmail.com'; // Замените на вашу почту
  $from = $_POST['email'];
  $message = $_POST['message'];

  $subject = 'Новое сообщение с сайта';
  $headers = "From: $from\r\n" .
             "Reply-To: $from\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo 'Your email was sent successfully';
  } else {
    echo 'ERROR, TRY AGAIN';
  }
}
?>