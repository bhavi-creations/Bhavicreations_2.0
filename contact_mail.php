<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    $subject = $_POST['subject'] ?? '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = 'bhaviwebdevelopment@gmail.com';
        $mail->Password = 'ipotpfyrqocuxjld';


        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Sender


        $mail->setFrom('bhaviwebdevelopment@gmail.com', 'Bhavi Website');

        // Recipient

        $mail->addAddress('Admin@bhavicreations.com', 'Bhavi');



        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from Contact Form Bhavi Website';
        $mail->Body = "
            <h1>New Message</h1>
            <p><strong>Name:</strong> $first_name</p>
            <p><strong>Last Name:</strong> $last_name</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>   
            <p><strong>Message:</strong><br>$message</p>
        ";

        // Send email
        $mail->send();

        // Redirect to contact_us.html with a success flag
        header('Location: contact_us.html?success=1');
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
