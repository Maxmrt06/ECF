<?php include(__DIR__ . "./header.php"); ?>

    <h1><?= $this->title; ?></h1>

    <form>
  <div class="mb-3">
    <label for="category" class="form-label">Catégories</label>
    <input type="text" class="form-control" id="category" >
    
  </div>
  
  <button type="submit" class="btn btn-primary">Ajoutez</button>
</form>


<?php include(__DIR__ . "./footer.php"); ?>