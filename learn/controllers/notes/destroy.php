<?php

use Core\App;
use Core\Validator;
use Core\Database;
// use Core\Database;
// $config = require base_path('config.php');

// $db = new Database($config['database']);

$db = App::container()->resolve(Database::class);

// dd($db);

$currentUserId = 1;


$note = $db->query('select * from notes where id = :id', [
    'id' =>$_POST['id']
    ])->findOrFail();

authorize($note['user_id'] === $currentUserId);


$db ->query('delete from notes where id =:id',[
    'id' => $_POST['id']
    
]);



header('location: /notes');

die();





