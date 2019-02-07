<?php

$dotenv = new Dotenv\Dotenv(__DIR__ . '/../../');
$dotenv->load();

// Configuration for PayU
define("API_KEY", getenv('PAYU_API_KEY'));
define("API_LOGIN", getenv('PAYU_API_LOGIN'));
define("MERCHANT_ID", getenv('PAYU_MERCHANT_ID'));
define("ACCOUNT_ID", getenv('PAYU_ACCOUNT_ID'));

?>
