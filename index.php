<?php

require 'vendor/autoload.php';

use App\Models\User;
use App\Services\EmailService;

$user = new User();
$emailService = new EmailService();

echo $user->sayHello();
echo "<br>";
echo $emailService->sendEmail();