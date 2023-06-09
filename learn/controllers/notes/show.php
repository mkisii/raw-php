<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::container()->resolve(Database::class);


$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();
// dd($note);

authorize($note['user_id'] === $currentUserId);

view('/notes/show.view.php', [
    "heading" => "Notes",
    "note" => $note
]);
