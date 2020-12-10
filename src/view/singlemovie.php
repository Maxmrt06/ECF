<?php include(__DIR__ . "./header.php"); ?>

<h1><?= $this->title;?></h1>

<?php
foreach($this->singleMovie as $movie) {
?>
        <div class="jumbotron">
            <h1><?= $movie['movies_name']?></h1><img src="<?= $movie['movies_poster'] ?>"
                class="img-fluid">
        </div>
        <div>
            <?= $movie['movies_dsc'] ?>
        </div>
        
        
        <a href="?page=listmovie"><button type="button" class="btn btn-secondary">Revenir à la liste</button></a>

<?php 
}
echo'</div>';

include(__DIR__ . "./footer.php"); ?>