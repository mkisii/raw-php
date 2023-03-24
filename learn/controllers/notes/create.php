<?php
require base_path('Core/Validator.php');


$config = require base_path('config.php');

$db = new Database($config['database']);

$errors =[];

// dd($db);

if($_SERVER['REQUEST_METHOD'] === 'POST'){



    if ( ! Validator::string($_POST['body'],1,500)) {
        $errors['body'] = 'Body Content of no more than 500 character is Required';
    } 


    if (empty($errors)) {
        
        $db->query('insert into notes(body,user_id) values(:body, :user_id)',[
            'body'=> $_POST['body'],
            'user_id' => 5
        ]);
    }

    
}

view("notes/create.view.php", [
    "heading" => "Create a new Note",
    "errors" => $errors
]);