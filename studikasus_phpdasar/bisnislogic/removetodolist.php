<?php 

//menghapus todo di list
function removetodolist(int $number): bool
{
    global $todolist;

    if($number > sizeof($todolist)){
        return false;
    }

    for($i = $number; $i < sizeof($todolist); $i++)
    {
        $todolist[$i] = $todolist[$i + 1];
    }
    unset($todolist[sizeof($todolist)]);

    return true;

}

?>