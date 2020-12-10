<?php
class ListMovieController
{
    private $title;
    private $model;
    private $listMovie;

    public function __construct()
    {
        $this->title = "Liste des films";
        $this->model = new Model();
    }
    function manage()
    {
        $this->listMovie = $this->model->getAllMovies();

        include(__DIR__ . "./../view/listMovie.php");
    }
    
}