<?php
require_once "data/Programmer.php";

// kita bisa mengecek type data dengan instanceof
// contoh dan hasilnya

sayHiProgrammer(new Programmer("olis"));
sayHiProgrammer(new FrontEndProgrammer("olis"));
sayHiProgrammer(new BackEndProgrammer("olis"));

// hasilnya seperti ini
/*
Hi, Back End olis
Hi, Front End olis
Hi, Programmer olis
/*
