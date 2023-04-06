<?php


use Core\App;
use Core\Validator;
use Core\Database;

// $db = App::resolve(Database::class);
$db = App::container()->resolve(Database::class);


// dd($db);


$email = $_POST['email'];
$password = $_POST['password'];


$errors = [];

if(!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email address";
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Password must have at least 7 characters';
}
if(! empty($errors)){
    return view("registration/create.view.php", [
        'errors' => $errors
    ]);
}


$user = $db->query('select * from users where email = :email', [
    'email' =>$email
])->find();
// dd($result);

if($user) {
    header('location: /');
}else {
    $db->query('Insert into users(email, password) values(:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT )
    ]);

    login($user);

    header('location: /');
    exit();
}


