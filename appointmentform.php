<?php
require_once __DIR__ . '/mail_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_appointment'])) {

    // 1. Data Cleaning & Sanitization
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $date    = htmlspecialchars(trim($_POST['date']));
    $service = htmlspecialchars(trim($_POST['service']));
    $message = !empty($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : 'No additional message provided.';

    // Date formatting (DD-MM-YYYY)
    $formatted_date = date('d-m-Y', strtotime($date));

    try {
        $mail = createWebsiteMailer('Hospital Appointment System');

        $mail->addReplyTo($email, $name);

        $mail->isHTML(true);
        $mail->Subject = "New Appointment Request - " . $name . " [" . $service . "]";

        $mail->Body = "
        <div style='font-family: Arial, sans-serif; background-color: #f4f6f9; padding: 20px;'>
            <div style='max-width: 600px; margin: 0 auto; background: #ffffff; padding: 25px; border-radius: 8px; border-top: 5px solid #1c3366; box-shadow: 0 2px 5px rgba(0,0,0,0.1);'>
                <h2 style='color: #1c3366; margin-top: 0;'>New Appointment Booking</h2>
                <p style='color: #666;'>A new patient appointment request has been submitted through the website.</p>
                
                <table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>
                    <tr style='background: #f8f9fa;'>
                        <td style='padding: 10px; border: 1px solid #eee; font-weight: bold;'>Patient Name:</td>
                        <td style='padding: 10px; border: 1px solid #eee;'>{$name}</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: 1px solid #eee; font-weight: bold;'>Phone Number:</td>
                        <td style='padding: 10px; border: 1px solid #eee;'>{$phone}</td>
                    </tr>
                    <tr style='background: #f8f9fa;'>
                        <td style='padding: 10px; border: 1px solid #eee; font-weight: bold;'>Email:</td>
                        <td style='padding: 10px; border: 1px solid #eee;'>{$email}</td>
                    </tr>
                    <tr>
                        <td style='padding: 10px; border: 1px solid #eee; font-weight: bold;'>Preferred Date:</td>
                        <td style='padding: 10px; border: 1px solid #eee; color: #d9534f; font-weight: bold;'>{$formatted_date}</td>
                    </tr>
                    <tr style='background: #f8f9fa;'>
                        <td style='padding: 10px; border: 1px solid #eee; font-weight: bold;'>Department / Service:</td>
                        <td style='padding: 10px; border: 1px solid #eee; color: #1c3366; font-weight: bold;'>{$service}</td>
                    </tr>
                </table>

                <div style='margin-top: 20px;'>
                    <strong style='color: #333;'>Patient Message:</strong>
                    <p style='background: #f8f9fa; padding: 12px; border-radius: 5px; border: 1px solid #eee; color: #555;'>{$message}</p>
                </div>

                <div style='margin-top: 25px; text-align: center; font-size: 12px; color: #888; border-top: 1px solid #eee; padding-top: 15px;'>
                    This email was sent automatically from Neurostar Multispeciality Hospital Appointment Form.
                </div>
            </div>
        </div>
        ";

        $mail->send();
        
        // Success Alert & Redirect
        echo "<script>
                alert('Thank you! Your appointment request has been submitted successfully.');
                window.location.href='Home.php'; // మీ హోమ్ పేజీకి రీడైరెక్ట్ అవుతుంది
              </script>";

    } catch (\Throwable $e) {
        error_log('Appointment form email delivery failed: ' . $e->getMessage());
        echo "<script>
                alert('Sorry, something went wrong. Please try again.');
                window.history.back();
              </script>";
    }
} else {
    header("Location: Home.php");
    exit();
}
?>