<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email address where you want to receive contact form submissions
    $to = "mibris.audio@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission from $name";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    mail($to, $subject, $email_message, $headers);

    // Redirect back to the contact page with a success message
    header("Location: index.html?message=success");
} else {
    // Handle the case where the form is not submitted properly
    header("Location: index.html?message=error");
}
?>
