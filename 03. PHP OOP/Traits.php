<?php

require_once("data/Level.php");

use \Data\Level\{Customer, Seller, Person};

$result = new Person();
$result->greeting("Olis");
$result->getStoreName("Klontong");
