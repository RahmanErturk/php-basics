<?php 

    $id = 0;

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    }

    $result_categories = mysqli_query($connect, "SELECT * FROM categories");
    $result_animals = mysqli_query($connect, "SELECT * FROM animals");

    $categories = mysqli_fetch_all($result_categories, MYSQLI_ASSOC);
    $animals = mysqli_fetch_all($result_animals, MYSQLI_ASSOC);

    $result_animal = mysqli_query($connect, "SELECT * FROM animals WHERE id=$id");
    $animal = mysqli_fetch_assoc($result_animal);

    mysqli_close($connect);

?>