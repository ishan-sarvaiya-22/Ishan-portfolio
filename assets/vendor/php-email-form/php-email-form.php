<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "sarvaiyaishan28@gmail.com";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "sent";
    } else {
        echo "failed";
    }
}
?>
