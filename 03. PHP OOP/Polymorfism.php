<?php
require_once "data/Programmer.php";

//polymorpism kemampuan object berubah bentuk menjadi bentuk lain

$company = new Company();
$company->programmer = new Programmer("olis");
var_dump($company);
$company->programmer = new FrontEndProgrammer("olis");
var_dump($company);
$company->programmer = new BackEndProgrammer("olis");
var_dump($company);

/*
bentuk akan berubah seperti ini mulai dari company akan menjadi object lain.
object(Company)#1 (1) {     
  ["programmer"]=>
  object(Programmer)#2 (1) {
    ["name"]=>
    string(4) "olis"
  }
}
object(Company)#1 (1) {
  ["programmer"]=>
  object(FrontEndProgrammer)#3 (1) {
    ["name"]=>
    string(4) "olis"
  }
}
object(Company)#1 (1) {
  ["programmer"]=>
  object(BackEndProgrammer)#2 (1) {
    ["name"]=>
    string(4) "olis"
  }
}

*/

// bisa juga digunakan pada argument function 
// contoh :
sayHiProgrammer(new Programmer("olis"));
sayHiProgrammer(new FrontEndProgrammer("olis"));
sayHiProgrammer(new BackEndProgrammer("olis"));
