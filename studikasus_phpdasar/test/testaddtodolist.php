<?php 

require_once "../model/todolist.php";
require_once "../bisnislogic/addtodolist.php";


addtodolist("ahmad");
addtodolist("wali");
addtodolist("alchalidi");

var_dump($todolist);


?>