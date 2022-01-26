<?php

use ToDo\Request;
use ToDo\Database;
use ToDo\Task;

$task = new Task(Database::connect());
$task->setComplete(intval(basename(Request::uri())));

//CRUD
//C -create
//R -read
//U -update
//D -delte