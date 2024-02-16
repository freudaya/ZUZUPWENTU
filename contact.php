<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["textarea"];

    // Email details
    $to = "alexandroobjunior@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Email content
    $body = "<html><body>";
    $body .= "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Phone:</strong> $phone</p>";
    $body .= "<p><strong>Message:</strong> $message</p>";
    $body .= "</body></html>";

    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
}
?>
