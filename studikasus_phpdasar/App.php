<?php 

require_once __DIR__ . "/model/todolist.php";
require_once __DIR__ . "/bisnislogic/showtodolist.php";
require_once __DIR__ . "/bisnislogic/addtodolist.php";
require_once __DIR__ . "/bisnislogic/removetodolist.php";
require_once __DIR__ . "/view/viewshowtodolist.php";
require_once __DIR__ . "/view/viewaddtodolist.php";
require_once __DIR__ . "/view/viewremovetodolist.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi Todolist" . PHP_EOL;

viewshowtodolist();




?>