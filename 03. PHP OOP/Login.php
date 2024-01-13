<?php
require_once "ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidateLoginRequest.php";

$loginReq = new LoginRequest();
$loginReq->username = " ";
$loginReq->password = "joni";

try {
    ValidateLoginRequest($loginReq);
    echo "VALID" . PHP_EOL;
} catch (ValidationException $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo $exception;
}

// multi exception
try {
    ValidateLoginRequest($loginReq);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;
}

// finnaly
try {
    ValidateLoginRequest($loginReq);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error: {$exception->getMessage()}" . PHP_EOL;

    // fungsi get trace untuk debuging exception
    var_dump($exception->getTrace());
} finally {
    echo "Eksekusi, tidak peduli error atau gagal" . PHP_EOL;
}
