<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input to prevent injection
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $email_subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = " Booking@hiraa.co.tz"; // Replace with your email address
    $subject = $email_subject;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Optional headers
    $headers = "From: $email\r\n";

    // Sending the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
