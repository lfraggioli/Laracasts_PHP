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

        h2 {
            color: #333;
            font-size: 1.5rem;
            font-weight: 900;
            margin-top: 1em;
            padding-bottom: .5em;
        }

        .Filter_by_Year {
            padding-bottom: 2em;
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
    <div class="Filter_by_Year">
        <?php



        ?>
        <br>
        <h2>
            Books released after 1900
        </h2>
        <ul>
            <?php foreach ($filteredByYear as $book) : ?>
                <li>
                    <a href="<?= $book['purchase_link'] ?>">
                        <?= $book['name']; ?> (<?= $book['release_year']; ?>) - By <?= $book['author']; ?>

                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>