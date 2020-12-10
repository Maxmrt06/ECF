<?php
class SingleController
{
    private $title;
    private $model;
    private $singleMovie;

    public function __construct()
            {
                $this->title = "Détail du film";
                $this->model = new Model;
            }
    function manage() {

        $this->singleMovie = $this->model->getOneMovie();

        include(__DIR__ .  "./../view/singlemovie.php");
    }

}