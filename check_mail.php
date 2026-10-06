<?php
// CLI only. Checks connection and authentication without sending any email.
if (PHP_SAPI !== 'cli') {
    http_response_code(404);
    exit;
}

try {
    require_once __DIR__ . '/mail_config.php';
    $mail = createWebsiteMailer('Neurostar SMTP Check');
    if (!$mail->smtpConnect()) {
        throw new \RuntimeException('SMTP connection/authentication failed.');
    }
    $mail->smtpClose();
    echo "SMTP connection and authentication succeeded. No email was sent.\n";
} catch (\Throwable $e) {
    // Do not print credentials, protocol transcripts, or patient information.
    fwrite(STDERR, "Mail check failed: " . $e->getMessage() . "\n");
    exit(1);
}
