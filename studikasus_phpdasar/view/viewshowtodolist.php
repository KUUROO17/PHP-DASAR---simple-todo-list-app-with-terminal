<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../bisnislogic/showtodolist.php";
require_once __DIR__ . "/../view/viewaddtodolist.php";
require_once __DIR__ . "/../view/viewremovetodolist.php";
require_once __DIR__ . "/../helper/input.php";

function viewshowtodolist()
{
    while (true) {
        showtodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");

        if ($pilihan == "1") {
            viewaddtodolist();
        } else if ($pilihan == "2") {
            viewremovetodolist();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}