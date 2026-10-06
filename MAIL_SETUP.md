# Mail setup

## Deploy on shared hosting

Upload `appointmentform.php`, `send_mail.php`, `form_helpers.php`,
`mail_config.php`, and the complete `vendor/` folder together. File names are
case-sensitive on Linux; the existing success redirect expects `Home.php`.

Copy `mail_config.local.example.php` to `mail_config.local.php` alongside
`mail_config.php` on the live server. Fill in the SMTP host, full username,
password, and hospital recipient inbox using the email provider's settings.
The real local settings file is ignored by Git; upload it separately. Do not
put real credentials in the example file. PHP must be enabled on the server.
For stronger separation, store the settings PHP file outside the public web
root and set `MAIL_CONFIG_FILE` to its absolute path instead.

Use `465` with `ssl`, or `587` with `tls`, according to your provider.
Do not use the website visitor's email as `MAIL_FROM`; it is used as Reply-To.
Nonempty environment variables override file settings, so remove or correct
stale hosting environment values when changing credentials.

If terminal access is available, upload `check_mail.php` and run:

```sh
php check_mail.php
```

This checks SMTP connection and authentication without sending email. It is
blocked from browser access. The CLI may have a different environment from
web PHP: after the check succeeds, submit both live forms and confirm delivery
in the hospital inbox (including spam). Success means SMTP accepted the mail,
not a guarantee of inbox delivery.

## Authentication failure on live hosting

`Could not authenticate` means SMTP login failed; code changes cannot replace
valid provider credentials or remove provider/hosting restrictions. Verify the
mailbox username, SMTP password, host and SMTP permissions with your provider.
For Gmail use a provider-issued app password where supported, not the normal
Google account password. A later QUIT error can be a secondary connection
shutdown error; diagnose the first failure first.

If the browser still displays `Mailer Error: ...`, check that the new
`send_mail.php` was uploaded to the active document root and that the host has
refreshed PHP OPcache. These handlers log delivery errors to the PHP error log
and show visitors a generic failure message. Missing configuration and invalid
port/encryption pairs are reported in that log. Never disable TLS certificate
verification to work around authentication failures.

Reference: https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting

## Environment configuration (alternative)

The contact and appointment forms use the same SMTP configuration. Set these
environment variables in the web server's PHP environment (do not add the
password to source control):

| Variable | Required | Example / meaning |
| --- | --- | --- |
| `SMTP_HOST` | Yes | SMTP host provided by the email provider |
| `SMTP_USERNAME` | Yes | Full SMTP account username |
| `SMTP_PASSWORD` | Yes | SMTP password or provider-issued app password |
| `MAIL_TO` | Yes | Address that receives contact and appointment requests |
| `MAIL_FROM` | No | Sender address allowed by the SMTP provider; defaults to `SMTP_USERNAME` |
| `SMTP_PORT` | No | `587` for TLS (default), or the provider's configured port |
| `SMTP_ENCRYPTION` | No | `tls` (default, typically port 587) or `ssl` (typically port 465) |

Use the hosting provider's SMTP host, port, and encryption settings on the live
server. For Gmail, use an app password and ensure SMTP access is enabled for
the account. If delivery fails, check the PHP/server error log for the
diagnostic; form responses do not expose SMTP details.
