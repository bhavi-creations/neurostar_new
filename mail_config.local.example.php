<?php
// Copy to mail_config.local.php on your server and fill in provider settings.
// Environment variables override these values. Never commit the real password.
return [
    'SMTP_HOST' => '',
    'SMTP_USERNAME' => '', // Usually your full mailbox address.
    'SMTP_PASSWORD' => '', // Mailbox SMTP password / provider app password.
    'SMTP_PORT' => 465,
    'SMTP_ENCRYPTION' => 'ssl',
    'MAIL_FROM' => '', // Empty uses SMTP_USERNAME; must be an authorized sender.
    'MAIL_TO' => '', // Hospital inbox receiving both forms.
];
