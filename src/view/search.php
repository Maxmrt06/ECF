<?php include(__DIR__ . "./header.php"); ?>

    <h1><?= $this->title; ?></h1>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom du film</label>
    <input type="text" class="form-control" id="exampleInputEmail1" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Rechercher</button>
</form>

<?php include(__DIR__ . "./footer.php"); ?>