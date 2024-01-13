<?php

$names = ["Nurkholis", "Yusuf"];

// forlop lebih komplek
for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

// menggunakan foreach lebih sederhana
foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

foreach ($names as $key => $value) {
    echo "Data $key : $value" . PHP_EOL;
}

// bisa menggunakan $key dan $value

$data = [
    "first_name" => "Nurkholis",
    "last_name" => "Yusuf",
    "full_name" => "Nurkholis Yusuf",
];

foreach ($data as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
