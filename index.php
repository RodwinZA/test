<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Demo</title>

    <style>
        body {
            display: grid;
            place-items: center;
            margin: 0;
            /*height: 100vh;*/
            font-family: sans-serif;
        }
    </style>
</head>
<body>

<?php
    $books = [
         [
                 "name" => "Do Androids Dream Of Electric Sheep",
             "author" => "Philip K. Dick",
             "releaseYear" => 1868,
             "purchaseUrl" => "https://example.com"
         ],
        [
           "name" => "Project Hail Mary",
            "author" => "Andy Weir",
            "releaseYear" => 2021,
            "purchaseUrl" => "https:example.com"
        ],
        [
                "name" => "The Martian",
            "author" => "Andy Weir",
            "releaseYear" => 2011,
            "purchaseUrl" => "https://example.com"
        ]
    ];

    function filterByAuthor($books, $author){
        $filteredBooks = [];

        foreach ($books as $book){
            if ($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

?>

<h1>Recommended Books</h1>

<ul>
    <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) : ?>
            <a href="<?php echo $book['purchaseUrl'] ?>">
                <li>
                    <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
                </li>
            </a>

    <?php endforeach; ?>
</ul>

</body>
</html>