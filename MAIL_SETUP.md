# Mail setup

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
