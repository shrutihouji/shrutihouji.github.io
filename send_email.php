<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email address where you want to receive the messages
    $to = "your_email@example.com";

    // Email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email content
    $email_content = "<p>You have received a new message from your website contact form.</p>";
    $email_content .= "<p><strong>Name:</strong> $name</p>";
    $email_content .= "<p><strong>Email:</strong> $email</p>";
    $email_content .= "<p><strong>Subject:</strong> $subject</p>";
    $email_content .= "<p><strong>Message:</strong> $message</p>";

    // Sending the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
