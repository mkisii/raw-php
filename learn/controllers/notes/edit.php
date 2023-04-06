<?php 
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);

$errors =[];

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
// dd($note);

authorize($note['user_id'] === $currentUserId);


// dd($db);

view("notes/edit.view.php", [
    "heading" => "Update a new Note",
    "errors" => $errors,
    'note' => $note
]);