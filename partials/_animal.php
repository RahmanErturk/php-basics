<div class="card mb-3">
    <a href="animal-detail.php?id=<?= $animal["id"]; ?>" class="row">
        <div class="col-md-4">
            <img src="img/<?= $animal['imageUrl'] ?>" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $animal["title"] ?></h5>
                <p><?= $animal["description"] ?></p>
            </div>
        </div>
    </a>
</div>