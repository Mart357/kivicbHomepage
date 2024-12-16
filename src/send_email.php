<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email details
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>