<?php
require_once __DIR__ . '/form_helpers.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {
        $rawName = websiteFormField('name');
        $name = websiteFormEscape($rawName);
        $phone = websiteFormEscape(websiteFormField('phone', true, 40));
        $rawEmail = websiteFormEmail();
        $email = websiteFormEscape($rawEmail);
        $subject = websiteFormEscape(websiteFormField('subject'));
        $message = websiteFormEscape(websiteFormField('message', true, 10000));
        require_once __DIR__ . '/mail_config.php';
        $mail = createWebsiteMailer('Website Contact Form');
        $mail->addReplyTo($rawEmail, $rawName);

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

    } catch (\InvalidArgumentException $e) {
        websiteFormValidationError($e);
    } catch (\Throwable $e) {
        http_response_code(503);
        error_log('Contact form email delivery failed: ' . $e->getMessage());
        echo "<script>alert('Message could not be sent. Please try again later.'); window.history.back();</script>";
    }
} else {
    header("Location: Home.php");
    exit();
}
?>
