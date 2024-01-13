<?php

require_once "data/SocialMedia.php";


use data\FakeFacebook;

$facecbook = new FakeFacebook;

// akan error
// Fatal error: Class data\FakeFacebook may not inherit from final class 
// (data\Facebook) in C:\dev\dev\php\Learning PHP\03. PHP OOP\data\SocialMedia.php on line 18