<?php

require_once 'vendor/autoload.php';

$someService = new App\Services\SomeService();

echo "<pre>";
var_dump((new DateTime())->format('Y'));
echo "</pre>";
exit();

$result = $someService->doSomething();
