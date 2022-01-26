<?php
namespace ToDo;

class Validation{
    private static $validationErrors = [];

    public static function validateTask($task) {
        if(strlen(trim($task["subject"])) < 3 || strlen(trim($task["subject"])) > 255) {
            self::$validationErrors[] = "Blogai ivestas arba neivestas uzduoties pavadinimas";
        }
        if(!array_key_exists("priority", $task)) {
            self::$validationErrors[] = "Nepasirinktas prioritetas";
        }
        if($task["dueDate"] == "") {
            self::$validationErrors[] = "Nepasirinkta atlikimo data";
        }

        return self::$validationErrors;
    }
}