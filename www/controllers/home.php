<?php
use ToDo\Task;
use ToDo\Database;

$connect = Database::connect();
$tasks = new Task($connect);

require 'view/pages/home.view.php';
//prisijungiam prie duomenu bazes, perduodam prisijungima sukurtam task obijektui.