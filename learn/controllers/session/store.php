<?php

use Core\App;
use Core\Validator;
use Core\Database;

// $db = App::resolve(Database::class);
$db = App::container()->resolve(Database::class);



$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (!empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}
// Matching the given creaditials

$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {    
    if(password_verify($password, $user['password'])) {
        login([
            'email' => $email
        
        ]);
    
        header('location: /');
        exit();
    
    
    }
}

// Validating the user password

return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email adrress and password provided'
    ]
]);


