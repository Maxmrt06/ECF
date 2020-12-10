<?php include(__DIR__ . "./header.php"); ?>

    <h1><?= $this->title; ?></h1>

<?php

foreach($this->listMovie as $movie) {
?>


<div class="card" style="width: 18rem;">
        <img src="<?= $movie['movies_poster'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-header"><?= $movie['movies_name']?></h5>
            <p class="card-text"><?= $movie['movies_year'] ?></p>
           
            <a href="?page=singlemovie&id=<?= $movie['movies_id'] ?> " class="btn btn-primary">Voir le film</a>
        </div>
</div>



<?php
}
echo'</div>';

    include(__DIR__ . "./footer.php"); ?>