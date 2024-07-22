<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $identity = htmlspecialchars($_POST['identity']);
    $services = htmlspecialchars($_POST['services']);

    $to = "aggarwalmehak2016@gmail.com";
    $subject = "New Contact Form Submission";
    $message = "
    First Name: $first_name\n
    Last Name: $last_name\n
    Company: $company\n
    Email: $email\n
    Phone: $phone\n
    Identity: $identity\n
    Services: $services
    ";
    $headers = "From: ma9711594113@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
