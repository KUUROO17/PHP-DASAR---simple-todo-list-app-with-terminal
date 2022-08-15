<?php 

require_once "../helper/input.php";

$name = input("name");
echo "hello $name" .PHP_EOL;

$channel = input("channel");
echo "hello $channel" .PHP_EOL;
?>