<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receiver email
    $to = "dikshyayugashakti456@gmail.com"; 
    $subject = "New Short Film Registration - Indian Film TV Hub";

    // Collect form data
    $firstName   = $_POST['firstName'] ?? '';
    $lastName    = $_POST['lastName'] ?? '';
    $email       = $_POST['email'] ?? '';
    $mobile      = $_POST['mobile'] ?? '';
    $city        = $_POST['city'] ?? '';
    $country     = $_POST['country'] ?? '';
    $filmName    = $_POST['filmName'] ?? '';
    $summary     = $_POST['summary'] ?? '';
    $videoLink   = $_POST['videoLink'] ?? '';
    $password    = $_POST['password'] ?? '';

    // Email body
    $message = "
    <h2>New Short Film Registration</h2>
    <p><strong>First Name:</strong> $firstName</p>
    <p><strong>Last Name:</strong> $lastName</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Mobile:</strong> $mobile</p>
    <p><strong>City:</strong> $city</p>
    <p><strong>Country:</strong> $country</p>
    <p><strong>Short Film Name:</strong> $filmName</p>
    <p><strong>Summary:</strong> $summary</p>
    <p><strong>Video Link:</strong> $videoLink</p>
    <p><strong>Password:</strong> $password</p>
    <p><strong>Nomination Fees:</strong> ₹ 999 ONLY</p>
    ";

    // Headers
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Indian Film TV Hub <no-reply@yourdomain.com>" . "\r\n";

    // Send mail
    if (mail($to, $subject, $message, $headers)) {
        echo "<h3 style='color:green;text-align:center;'>Thank you! Your registration has been submitted successfully.</h3>";
    } else {
        echo "<h3 style='color:red;text-align:center;'>Sorry! Something went wrong, please try again.</h3>";
    }
}
else {
    // If someone accesses directly without POST
    http_response_code(405);
    echo "Method Not Allowed";
}

