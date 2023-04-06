<?php
$_SESSION['name'] = 'Obed';

view('/index.view.php', [
    "heading" => "Home Page"
]);