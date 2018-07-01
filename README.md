# Google Calendar API

This plugin won't work without coding in your Theme. It only provides the function to call the API.

For documentation reads: https://github.com/google/google-api-php-client

## Requirement

- PHP version 5.6 or higher
- WordPress version 4.9.6

## Local Testing

You need SSL to make the API works.

If you're in Windows, you can add certificate to your WAMP or XAMPP installation by following these steps:

1. Download latest certificate from https://curl.haxx.se/docs/caextract.html

1. Put it in PHP folder like `C:\xampp\php\extras\ssl\` or `C:\wamp64\bin\php\php7.0.0\extras\ssl`

1. In php.ini file, uncomment "curl.cainfo" and put in the path to your SSL file like `curl.cainfo = "C:\xampp\php\extras\ssl\cacert-2018-06-02.pem"`.

1. Done your API should now work even without changing your Virtual Host to HTTPS.

For details, read this [StackOveflow thread](https://stackoverflow.com/questions/29822686/curl-error-60-ssl-certificate-unable-to-get-local-issuer-certificate/34883260#34883260)