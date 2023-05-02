<?php
$categories = ["Cats", "Dogs", "Birds"];
$animals = [
    [
        "id" => 1,
        "title" => "Cats",
        "description" => "Cats are a type of fictional character.",
        "imageUrl" => "cat.jpg",
        "sweet" => true
    ],
    [
        "id" => 2,
        "title" => "Dogs",
        "description" => "Dogs are a type of fictional character.",
        "imageUrl" => "dog.jpg",
        "sweet" => true
    ],
    [
        "id" => 3,
        "title" => "Birds",
        "description" => "Birds are a type of lottery character.",
        "imageUrl" => "bird.jpg",
        "sweet" => false
    ]
]

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">AnimalApp</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link">Cats</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Dogs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Birds</a></li>
            </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for ($i = 0; $i < count($categories); $i++) : ?>
                        <a href="#" class="list-group-item list-group-item-action"><?= $categories[$i]; ?></a>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-9">
                <?php foreach ($animals as $animal) : ?>
                    <?php if ($animal["sweet"]) : ?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/<?= $animal['imageUrl'] ?>" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $animal["title"] ?></h5>
                                        <p><?= $animal["description"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>