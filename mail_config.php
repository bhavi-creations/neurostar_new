<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function createWebsiteMailer($fromName)
{
    $requiredSettings = [
        'SMTP_HOST' => getenv('SMTP_HOST'),
        'SMTP_USERNAME' => getenv('SMTP_USERNAME'),
        'SMTP_PASSWORD' => getenv('SMTP_PASSWORD'),
        'MAIL_TO' => getenv('MAIL_TO'),
    ];

    $missingSettings = [];
    foreach ($requiredSettings as $name => $value) {
        if ($value === false || $value === '') {
            $missingSettings[] = $name;
        }
    }

    if ($missingSettings) {
        throw new \RuntimeException('Missing mail settings: ' . implode(', ', $missingSettings));
    }

    $recipient = filter_var($requiredSettings['MAIL_TO'], FILTER_VALIDATE_EMAIL);
    if ($recipient === false) {
        throw new \RuntimeException('MAIL_TO must be a valid email address.');
    }

    $fromAddress = getenv('MAIL_FROM');
    if ($fromAddress === false || $fromAddress === '') {
        $fromAddress = $requiredSettings['SMTP_USERNAME'];
    }
    if (filter_var($fromAddress, FILTER_VALIDATE_EMAIL) === false) {
        throw new \RuntimeException('MAIL_FROM must be a valid email address.');
    }

    $portValue = getenv('SMTP_PORT');
    $port = filter_var(
        $portValue === false || $portValue === '' ? '587' : $portValue,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1, 'max_range' => 65535]]
    );
    if ($port === false) {
        throw new \RuntimeException('SMTP_PORT must be a valid port number.');
    }

    $encryptionValue = getenv('SMTP_ENCRYPTION');
    $encryption = strtolower($encryptionValue === false || $encryptionValue === '' ? 'tls' : $encryptionValue);
    if ($encryption !== 'tls' && $encryption !== 'ssl') {
        throw new \RuntimeException('SMTP_ENCRYPTION must be either tls or ssl.');
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $requiredSettings['SMTP_HOST'];
    $mail->SMTPAuth = true;
    $mail->Username = $requiredSettings['SMTP_USERNAME'];
    $mail->Password = $requiredSettings['SMTP_PASSWORD'];
    $mail->SMTPSecure = $encryption === 'ssl'
        ? PHPMailer::ENCRYPTION_SMTPS
        : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = $port;
    $mail->CharSet = PHPMailer::CHARSET_UTF8;
    $mail->Timeout = 15;
    $mail->setFrom($fromAddress, $fromName);
    $mail->addAddress($recipient);

    return $mail;
}
