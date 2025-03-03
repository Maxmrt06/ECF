<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="./src/public/js/script.js"></script>
    <title><?= $this->title; ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="?page=home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=listmovie">Liste des films</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=addmovie">Ajoutez un film</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=category">Catégories</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="?page=search">Rechercher un film</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">