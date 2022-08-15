<?php 

require_once "../model/todolist.php";
require_once "../view/viewremovetodolist.php";
require_once "../bisnislogic/addtodolist.php";
require_once "../bisnislogic/showtodolist.php";


addtodolist("ahmad");
addtodolist("wali");
addtodolist("alchalidi");
addtodolist("Marza");
addtodolist("Lina");
addtodolist("alchalidi");

showtodolist();

viewremovetodolist();

showtodolist();


?>