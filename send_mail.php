<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email details
    $to = 'madeleine.snyder.48@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Email content
    $email_content = "<h2>New Contact Form Submission</h2>";
    $email_content .= "<p><strong>Name:</strong> {$name}</p>";
    $email_content .= "<p><strong>Email:</strong> {$email}</p>";
    $email_content .= "<p><strong>Message:</strong><br>{$message}</p>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo 'Thank you for your message. It has been sent.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request method';
}
?>
