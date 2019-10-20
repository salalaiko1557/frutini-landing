<?php

return [
    'driver' => env('MAIL_DRIVER'),
    'host' => env('MAIL_HOST'),
    'port' => env('MAIL_PORT'),
    'encryption' => env('MAIL_ENCRYPTION'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'pretend' => false,
    'sendmail' => '/usr/sbin/sendmail -bs',
];