<?php
$config = require base_path('config.php');

$db = new Database($config['database']);


$currentUserId = 5;


$note = $db->query('select * from notes where id = :id', [
    'id' =>$_GET['id']])->find();
// dd($note);

authorize($note['user_id'] === $currentUserId);

view('/notes/show.view.php', [
    "heading" => "Notes",
    "note" => $note
]);