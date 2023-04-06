<?php

use Core\App;
use Core\Database;

$config = require base_path('config.php');
$db = App::container()->resolve(Database::class);


$notes = [];

$notes = $db->query('select * from notes where user_id = 1')->get();


view("notes/index.view.php", [
    "heading" => "My Notes",
    "notes" => $notes
]);