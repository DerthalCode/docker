<?php
use ToDo\Database;
use ToDo\Task;
use ToDo\Validation;

print_r($_POST); // Paklausti kodel po refresho $_POST lieka

if(isset($_POST['save'])){
    /* echo "<pre>";print_r($_POST);echo "</pre>";
    exit; */
    $validationErrors = Validation::validateTask($_POST);  //kreipiasi i validation klase
    if(count($validationErrors) > 0)
    {
        $error = $validationErrors;
    }else{
        $connection = Database::connect();  //conncet to db
        $task = new Task($connection);    //create task object
        $task->createTask($_POST);       //pass form data to Task object
    }
    
}
unset($_POST);
require 'view/pages/add-task.view.php';