
<?php

// echo "Hello, World";
// echo "Hello" . "World";
// declearing a variables
// $greeting = "Hello";

// echo $greeting . " " . "Everyone!";

// echo "$greeting Everyone!";
// echo '"$greeting Everyone!';

// condition
$name = "Dark Matter";
$read = false;

if($read){
    $message = "You have read $name";
}else{
    $message = "You have NOT read $name";

};

// Arrays
$programming = ["JavaScript", "Python", "Java", "php", "Ruby"];

// Array Associative
$books = [
    [
        "name"=> "JavaScript",
        "author" => "Morrison",
        "url" => "http://helloword.js",
        "releaseYear" => 2008
    ],
    [
        "name"=> "PHP",
        "author" => "Morrison",
        "url" => "http://helloword.js",
        "releaseYear" => 2009
    ],
    [
        "name"=> "Python",
        "author" => "Morrison",
        "url" => "http://helloword.js",
        "releaseYear" => 2010
    ],
    [
        'name' => 'notes Hail Mary',
        'author' => 'Andy Weir',
        'url' => 'http://example.com',
        'releaseYear' => 2021
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'releaseYear' => 2011,
        'url' => 'http://example.com'
    ]  
];

// filterfunction
function filterByAuthor($books, $author){
    $filteredBooks = [];

    foreach ($books as $book) {

        if($book['author'] == $author) {
            $filteredBooks[] = $book;
        }
        
    }
    return $filteredBooks;

}

function filter($items, $key, $value){
    $filteredItems = [];
    foreach ($items as $item) {
        if($item[$key] == $value){
            $filteredItems[] = $item;
        }

    }
    return $filteredItems;
}

include 'index.view.php';

