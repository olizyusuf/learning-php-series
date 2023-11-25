<?php
require_once "view/viewAddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("olis");
addTodoList("yusuf");
addTodoList("joni");
addTodoList("rodi");
addTodoList("junoyo");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
