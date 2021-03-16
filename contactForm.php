<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "francisvanhoren@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "Je hebt een email van " .$name . ". \n\n" . $message;

    mail($mailTo,$subject,$txt,$headers);
    header("location:contact.php?mailsend");
}