<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);

$errors = [];

$currentUserId = 1;
// Getting the note to update
$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

// Check for the user authorization

authorize($note['user_id'] === $currentUserId);


if (!Validator::string($_POST['body'], 1, 10)) {
    $errors['body'] = 'Body Content of no more than 500 character is Required';
}

if (count($errors)){
    return view("notes/edit.view.php",[
        'heading' => "Edit Note",
        'errors' => $errors,
        'note' => $note
    ]);
}

$db->query('update notes set body = :body where id = :id',[
    'id' => $_POST['id'],
    'body' =>$_POST['body']
]);

// dd($_POST);
// redirect

header('location: /notes');
die();