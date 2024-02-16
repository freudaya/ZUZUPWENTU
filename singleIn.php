<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];

    // Email details
    $to = "alexandroobjunior@gmail.com";
    $subject = "New Signup";
    $message = "$email wants to know more about the products";

    // Send email
    mail($to, $subject, $message);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
}
?>
