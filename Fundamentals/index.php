<?php
$books = [
  ['name' => 'The Hobbit', 'author' => 'J. R. R. Tolkien', 'release_year' => 1937, 'purchase_link' => 'https://www.amazon.com/Hobbit-J-R-Tolkien/dp/054792822X'],
  ['name' => 'The Silmarillion', 'author' => 'J. R. R. Tolkien', 'release_year' => 1977, 'purchase_link' => 'https://www.amazon.com/Silmarillion-J-R-Tolkien/dp/0544338014'], ['name' => 'The Two Towers', 'author' => 'J. R. R. Tolkien', 'release_year' => 1954, 'purchase_link' => 'https://www.amazon.com/Two-Towers-Book-Rings/dp/0547928203'], ['name' => 'The Return of the King', 'author' => 'J. R. R. Tolkien', 'release_year' => 1955, 'purchase_link' => 'https://www.amazon.com/Return-King-Book-Lord-Rings/dp/054792819X'], ['name' => 'The Fellowship of the Ring', 'author' => 'J. R. R. Tolkien', 'release_year' => 1954, 'purchase_link' => 'https://www.amazon.com/Fellowship-Ring-Book-Lord-Rings/dp/0547928211'],

  [
    "name" => "The Aleph",
    "author" => "Jorge Luis Borges",
    "release_year" => 1949,
    "purchase_link" => "https://www.amazon.com/Aleph-Other-Stories-Penguin-Classics/dp/0142437884",
  ],
  [
    "name" => "Norse Mythology",
    "author" => "Neil Gaiman",
    "release_year" => 2017,
    "purchase_link" => "https://www.amazon.com/Norse-Mythology-Neil-Gaiman/dp/039360909X",
  ],
  [
    "name" => "Don Quixote",
    "author" => "Miguel de Cervantes",
    "release_year" => 1615,
    "purchase_link" => "https://www.amazon.com/Quixote-Penguin-Classics-Miguel-Cervantes/dp/014243723X",
  ],
  [
    "name" => "Dune",
    "author" => "Frank Herbert",
    "release_year" => 1965,
    "purchase_link" => "https://www.amazon.com/Dune-Frank-Herbert/dp/0441013597",
  ],
  [
    "name" => "1984",
    "author" => "George Orwell",
    "release_year" => 1949,
    "purchase_link" => "https://www.amazon.com/1984-Signet-Classics-George-Orwell/dp/0451524934",
  ],
];
function filter($items, $key, $value)
{
  $filteredItems = [];
  foreach ($items as $item) {
    if ($item[$key] === $value) {
      $filteredItems[] = $item;
    }
  }
  return $filteredItems;
}

$filteredByYear = array_filter($books, function ($book) {
  return $book['release_year'] > 1900;
});


function filterByAuthor($books, $author)
{
  $filteredBooks = [];
  foreach ($books as $book) {
    if ($book['author'] === $author) {
      $filteredBooks[] = $book;
    }
  }
  return $filteredBooks;
}

require 'index.view.php';
