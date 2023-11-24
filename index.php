<!DOCTYPE html>
<html lang="en">

<head>
  <title>Demo PHP</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Helvetica, sans-serif;
      height: 100vh;
      place-items: center;
      display: flex;
      flex-direction: column;
      margin: 0;
      padding-top: 50px;
    }

    h1 {
      color: #333;
      font-size: 2rem;
      font-weight: 900;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <h1>
    <?php
    $greeting = "Hello";

    echo "$greeting world!";
    ?>
  </h1>
  <h4>
    <?php
    echo 'This is a demo of PHP. This is a variable value with one quote $greeting' . " I'm learning PHP now.";
    ?>
  </h4>
  <div>
    <?php

    $bookName = "The Hitchhiker's Guide to the Galaxy";
    $read = true;
    if ($read) {
      $message = "I have read $bookName";
    } else {
      $message = "I have not read $bookName";
    }
    ?>
    <p>
      Reading status:
      <?php
      echo $message;
      ?>
    </p>
    <br>
    <hr>

  </div>

  <div>
    <h1>Recommended Books</h1>

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
    ?>
    <ul>
      <?php foreach ($books as $book) : ?>

        <a href="<?= $book['purchase_link'] ?>">

          <li><?= $book['name'] ?> (<?= $book['release_year'] ?>)</li>
        </a>


      <?php endforeach; ?>
    </ul>

    <br>
    <p>
      <?= "My favourite book is " . $books[3]['name'] ?>
    </p>
    <hr>
    <h3>These are the books written by J. R. R. Tolkien</h3>
    <ul>
      <?php foreach (filterByAuthor($books, 'J. R. R. Tolkien') as $book) : ?>

        <a href="<?= $book['purchase_link'] ?>" target="_blank" rel="noopener noreferrer">

          <li>
            <?= $book['name'] ?> (<?= $book['release_year'] ?>)
          </li>
        </a>

      <?php endforeach; ?>
    </ul>
  </div>
  <div>

  </div>
</body>

</html>