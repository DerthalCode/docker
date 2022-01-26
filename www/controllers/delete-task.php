<?php
use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$id = intval(basename(Request::uri())); // get id
$conncetion = Database::connect(); // conncet to db
$task = new Task($conncetion);  // Task object instance
$task->deleteTask($id); //Execute delete from DB action

