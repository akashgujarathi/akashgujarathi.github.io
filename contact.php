<?php

if($_POST["submit"]) {
    $recipient="agujara1@binghamton.edu";
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $mailBody, "From: $sender <$senderEmail>");
}

?>