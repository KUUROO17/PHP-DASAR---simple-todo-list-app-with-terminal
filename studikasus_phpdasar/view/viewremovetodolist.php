<?php 

require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../bisnislogic/removetodolist.php";

function viewremovetodolist()
{
    echo "MENGHAPUS TODO" .PHP_EOL;

    $pilihan = input("nomor (x untuk batalkan)");

    if($pilihan == "x"){
        echo "gagal menghapus todo" .PHP_EOL;
    }else{
        $succes = removetodolist($pilihan);

        if($succes){
            echo "sukses menghapus todo nomor $pilihan" .PHP_EOL;
        }else{
            echo "gagal menghapus todo nomor $pilihan" .PHP_EOL;
    
        }
    }

}

?>