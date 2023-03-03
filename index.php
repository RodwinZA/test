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


    // Lamda function

    function filter($items, $fn){
        $filteredItems = [];

        foreach ($items as $item){
            if ($fn($item)){
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    $filteredBooks = array_filter($books, function($book){
        return $book['author'] === 'Andy Weir';
    });

?>

<h1>Recommended Books</h1>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
    <li>
        <a href="<?php echo $book['purchaseUrl'] ?>">
            <?= $book['name']; ?> (<?= $book['releaseYear']; ?>)
        </a>
    </li>


    <?php endforeach; ?>
</ul>

</body>
</html>