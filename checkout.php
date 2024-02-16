<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $city = $_POST["city"];

    // Create email content
    $to = "alexandroobjunior@gmail.com";
    $subject = "New Checkout Information";
    $message = "
        <html>
        <head>
            <style>
                body {
                    font-family: Arial, sans-serif;
                }
                .info {
                    margin: 10px 0;
                }
            </style>
        </head>
        <body>
            <h2>New Checkout Information:</h2>
            <div class='info'><strong>Full Name:</strong> $name</div>
            <div class='info'><strong>Phone Number:</strong> $phone</div>
            <div class='info'><strong>Address:</strong> $address</div>
            <div class='info'><strong>Country:</strong> $country</div>
            <div class='info'><strong>City:</strong> $city</div>
        </body>
        </html>
    ";

    // Set additional headers for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
} else {
    // If someone tries to access this page directly without submitting the form, redirect them to the homepage or another appropriate location.
    header("Location: index.html");
    exit();
}
?>
