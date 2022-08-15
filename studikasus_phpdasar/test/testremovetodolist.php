<?php 

require_once "../model/todolist.php";
require_once "../bisnislogic/removetodolist.php";
require_once "../bisnislogic/addtodolist.php";
require_once "../bisnislogic/showtodolist.php";


addtodolist("ahmad");
addtodolist("wali");
addtodolist("alchalidi");
addtodolist("marza");
addtodolist("lina");


showtodolist(); 
removetodolist(3);
showtodolist();
removetodolist(2);
showtodolist();
$success =removetodolist(4);
var_dump($success)



?>