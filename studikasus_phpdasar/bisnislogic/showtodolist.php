<?php 
//menampilkan todo di list
function showtodolist()
{
    global $todolist;

    echo "TODOLIST: " .PHP_EOL;

    foreach($todolist as $number => $value){
        echo "$number. $value" .PHP_EOL;
    }
}

?>