<?php

$errors =[];

// dd($db);

view("notes/create.view.php", [
    "heading" => "Create a new Note",
    "errors" => $errors
]);