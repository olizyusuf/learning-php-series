<?php

require_once "helper/MatHelper.php";

use Helper\MatHelper;

$mathel = new MatHelper();

// cara akses dengan cara ini
echo MatHelper::$name . PHP_EOL;

// bnisa dirubah dengan cara
MatHelper::$name = "Joni";
echo MatHelper::$name . PHP_EOL;

$result = MatHelper::sumAll(10, 20, 30);
echo "total: $result" . PHP_EOL;
