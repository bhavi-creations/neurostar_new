<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Composer autoloader లేదా manual includes
require 'vendor/autoload.php'; // లేదా require 'PHPMailer/src/PHPMailer.php'; మొదలైనవి

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {

    // Form inputs ని sanitize చేయడం
    $name    = htmlspecialchars(trim($_POST['name']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';             // మీ SMTP Server (ఉదా: Gmail, cPanel Host)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com';       // మీ మెయిల్ ID
        $mail->Password   = 'rcaueajfwhczcrhm';          // మీ Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient Setup
        $mail->setFrom('manimalladi05@gmail.com', 'Website Contact Form');
        $mail->addAddress('manimalladi05@gmail.com', 'Admin'); // మీకు మెయిల్ రావాల్సిన ఇమెయిల్
        $mail->addReplyTo($email, $name);                       // యూజర్‌కి రిప్లై ఇవ్వడానికి

        // Mail Content Formatting (HTML)
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: " . $subject;
        
        $mail->Body = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ddd;'>
                <h3 style='color: #1c3366;'>New Inquiry Received</h3>
                <hr>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Subject:</strong> {$subject}</p>
                <p><strong>Message:</strong></p>
                <p style='background: #f9f9f9; padding: 10px; border-left: 3px solid #1c3366;'>{$message}</p>
            </div>
        ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";

    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>