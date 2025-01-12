<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $recruiter_name = htmlspecialchars($_POST['recruiter_name']);
    $recruiter_email = htmlspecialchars($_POST['recruiter_email']);
    $message = htmlspecialchars($_POST['message']);
    
    // PHP mail function to send email (for example)
    $to = "your-email@example.com"; // Recipient's email
    $subject = "Message from $recruiter_name";
    $body = "Name: $recruiter_name\nEmail: $recruiter_email\nMessage: $message";
    $headers = "From: $recruiter_email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
