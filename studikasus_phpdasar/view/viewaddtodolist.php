<?php 

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../bisnislogic/addtodolist.php";


function viewaddtodolist()
{
    echo "menambah todo" .PHP_EOL;

    $todo = input("todo (x untuk batal)");

    if($todo == "x"){
        echo "batal menambah todo" .PHP_EOL;
    }else{
        addtodolist($todo);
    }
}

?>