<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);


$errors = [];

if (!Validator::string($_POST['body'], 1, 500)) {
    $errors['body'] = 'Body Content of no more than 500 character is Required';
}
if(! empty($errors)){
    return view("notes/create.view.php", [
        'heading' =>"Create Note",
        'errors' => $errors
    ]);
}


if (empty($errors)) {

    $db->query('insert into notes(body,user_id) values(:body, :user_id)', [
        'body' => $_POST['body'],
        'user_id' => 1
    ]);
    header('location: /notes');
    exit();
}
