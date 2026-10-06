<?php
function websiteFormField($key, $required = true, $limit = 200)
{
    $value = isset($_POST[$key]) ? $_POST[$key] : '';
    if (!is_string($value) || strlen($value) > $limit || ($required && trim($value) === '')) {
        throw new \InvalidArgumentException('Please check the ' . $key . ' field.');
    }
    return trim($value);
}

function websiteFormEmail()
{
    $value = websiteFormField('email', true, 254);
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        throw new \InvalidArgumentException('Please enter a valid email address.');
    }
    return $value;
}

function websiteFormEscape($value)
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function websiteFormValidationError($exception)
{
    http_response_code(422);
    echo '<script>alert(' . json_encode($exception->getMessage(), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . '); window.history.back();</script>';
}
