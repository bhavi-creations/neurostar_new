<?php
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function websiteMailSetting($name)
{
    static $settings = null;
    if ($settings === null) {
        $path = getenv('MAIL_CONFIG_FILE');
        $path = $path !== false && $path !== '' ? $path : __DIR__ . '/mail_config.local.php';
        $settings = [];
        if (is_file($path)) {
            $settings = require $path;
            if (!is_array($settings)) {
                throw new \RuntimeException('Mail configuration file must return an array.');
            }
        } elseif (getenv('MAIL_CONFIG_FILE')) {
            throw new \RuntimeException('MAIL_CONFIG_FILE does not point to a readable configuration file.');
        }
    }
    $value = getenv($name);
    if ($value === false || $value === '') {
        $value = isset($settings[$name]) ? $settings[$name] : false;
    }
    if ($value !== false && !is_scalar($value)) {
        throw new \RuntimeException('Invalid mail setting: ' . $name);
    }
    // Passwords may intentionally contain spaces; preserve them exactly.
    return $value === false ? false : ($name === 'SMTP_PASSWORD' ? (string) $value : trim((string) $value));
}

function createWebsiteMailer($fromName)
{
    $requiredSettings = [
        'SMTP_HOST' => websiteMailSetting('SMTP_HOST'),
        'SMTP_USERNAME' => websiteMailSetting('SMTP_USERNAME'),
        'SMTP_PASSWORD' => websiteMailSetting('SMTP_PASSWORD'),
        'MAIL_TO' => websiteMailSetting('MAIL_TO'),
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

    $fromAddress = websiteMailSetting('MAIL_FROM');
    if ($fromAddress === false || $fromAddress === '') {
        $fromAddress = $requiredSettings['SMTP_USERNAME'];
    }
    if (filter_var($fromAddress, FILTER_VALIDATE_EMAIL) === false) {
        throw new \RuntimeException('MAIL_FROM must be a valid email address.');
    }

    $encryptionValue = websiteMailSetting('SMTP_ENCRYPTION');
    $portValue = websiteMailSetting('SMTP_PORT');
    $port = filter_var(
        $portValue === false || $portValue === '' ? (strtolower((string) $encryptionValue) === 'ssl' ? '465' : '587') : $portValue,
        FILTER_VALIDATE_INT,
        ['options' => ['min_range' => 1, 'max_range' => 65535]]
    );
    if ($port === false) {
        throw new \RuntimeException('SMTP_PORT must be a valid port number.');
    }

    $encryption = strtolower($encryptionValue === false || $encryptionValue === '' ? ($port === 465 ? 'ssl' : 'tls') : $encryptionValue);
    if ($encryption !== 'tls' && $encryption !== 'ssl') {
        throw new \RuntimeException('SMTP_ENCRYPTION must be either tls or ssl.');
    }
    if (($port === 465 && $encryption !== 'ssl') || ($port === 587 && $encryption !== 'tls')) {
        throw new \RuntimeException('Use SMTP_PORT 465 with ssl, or 587 with tls.');
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
