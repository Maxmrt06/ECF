<?php include(__DIR__ . "./header.php"); ?>

    <h1><?= $this->title; ?></h1>

    <form action="?page=addmovie" method="post">
    <div class="form-group">
        <label for="title">Titre du film</label>
        <input type="text" name="name" class=" form-control" id="name" placeholder="Entrez votre titre" required> 
    </div>

    <div class="form-group">
        <label for="desc">Affiche du film</label>
        <textarea class="form-control" name="poster" id="poster" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="img">Année du film</label>
        <input type="text" name="year" class=" form-control" id="year"> 
    </div>

    <button type="submit" class="btn btn-primary">Ajoutez le film</button>

    <?php if (isset($_POST["movies_name"]) && isset($_POST["movies_poster"]) && isset($_POST["movies_year"]))
      {
        echo "votre film a bien été enregistré";
      } ?>

    
</form> 

<?php include(__DIR__ . "./footer.php"); ?>