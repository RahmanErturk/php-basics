<div class="list-group">
    <?php for ($i = 0; $i < count($categories); $i++) : ?>
        <?php if($categories[$i]["category"] == "All Animals") : ?>
            <a href="animals.php" class="list-group-item list-group-item-action"><?= $categories[$i]["category"]; ?></a>
        <?php else : ?>
            <a href="index.php" class="list-group-item list-group-item-action"><?= $categories[$i]["category"]; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
</div>