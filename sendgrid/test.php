<?php
// If you are using Composer
require 'vendor/autoload.php';

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "edwarobert7@gmail.com");
$subject = "Hello World from the SendGrid PHP Library";
$to = new SendGrid\Email(null, "edwarobert7@gmail.com");
$content = new SendGrid\Content("text/plain", "some text here");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

//$apiKey = getenv('SENDGRID_API_KEY');
$apiKey = "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";
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
