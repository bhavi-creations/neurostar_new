<?php
require_once __DIR__ . '/mail_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_contact'])) {

    $name    = htmlspecialchars(trim($_POST['name']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    try {
        $mail = createWebsiteMailer('Website Contact Form');
        $mail->addReplyTo($email, $name);

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
        echo "<script>alert('Message sent successfully!'); window.location.href='Home.php';</script>";

    } catch (\Throwable $e) {
        error_log('Contact form email delivery failed: ' . $e->getMessage());
        echo "<script>alert('Message could not be sent. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: Home.php");
    exit();
}
?>