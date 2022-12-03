<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = 'gonzalolucien@gmail.com';
    $headers= "From: ". $mailFrom. "\r\n";
    $headers.="Reply-To: ". $mailTo. "\r\n";
    $headers.= "X-Mailer: PHP/". phpversion();
    $text = "Tienes un mensaje de ". $name. "\n\n".$message. "\r\n";

    $mail = @mail($mailTo, $subject, $txt, $headers);

    if ($mail) {
        header("Location: index.html?MessageSent");
    } else {
        header("Location: index.html?MessageError");
    }
}

?>