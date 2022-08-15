<?php 

//menambahkan todo ke list
function addtodolist(string $todo)
{
    global $todolist;

    $number = sizeof($todolist) + 1;

    $todolist[$number] = $todo;
}



?>