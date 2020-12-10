<?php include(__DIR__ . "./header.php"); ?>


<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"><?= $this->title; ?>!</h1>
        <p class="lead">Bibliothèque de Blue Ray</p>
        <hr class="my-4">
        <p>Retrouvez toute ma vidéoothèque !</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="?page=listmovie" role="button">Voir les films</a>
        </p>
    </div>
</div>


<?php include(__DIR__ . "./footer.php"); ?>