<?php require_once("config.php"); ?>
<?php include("partials/_header.php"); ?>
<?php include("partials/_navbar.php"); ?>

<?php include("partials/_functions.php"); ?>

<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include("partials/_categories.php"); ?>
        </div>
        <div class="col-9">
            <?php include("partials/_animal.php"); ?>
        </div>
    </div>
</div>

<?php include("partials/_footer.php"); ?>