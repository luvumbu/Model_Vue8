 

<?php
     $to      = 'luvumbu.n@gmail.com';
     $subject = 'creation dun membre';
     $message = 'Bonjour !';
     $headers = 'From: contact@luvumbu.com' . "\r\n" .
     'Reply-To: contact@luvumbu.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>

