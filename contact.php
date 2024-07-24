<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "admin@adnergroup.co.nz";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>
