<?php 

    $result_categories = mysqli_query($connect, "SELECT * FROM categories");
    $result_animals = mysqli_query($connect, "SELECT * FROM animals");

    $categories = mysqli_fetch_all($result_categories, MYSQLI_ASSOC);
    $animals = mysqli_fetch_all($result_animals, MYSQLI_ASSOC);
    
    mysqli_close($connect);

?>