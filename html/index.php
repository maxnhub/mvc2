<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('creepy.creep@bk.ru')
    ->setPassword('2ead2c602c8b8480865a0d94d8718037')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['creepy.creep@bk.ru' => 'creepy.creep@bk.ru'])
    ->setTo(['dmitriy.rudenskiy@gmail.com'])
    ->setBody('Homework message from max n')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);