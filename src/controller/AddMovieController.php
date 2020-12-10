<?php
class AddMovieController
{
    private $title;
    private $model;

    public function __construct()
        {
            $this->title = "Ajoutez un film";
            $this->model = new Model();
        }
    function manage()
    {
        if(isset($_POST['name']) && ($_POST['name'] !='') &&
            isset($_POST['poster']) && ($_POST['poster'] !='') &&
            isset($_POST['year']) && ($_POST['year']))
        {
    
            $this->model->addMovie($_POST['name'], $_POST['poster'], $_POST['year']);
        }

            include(__DIR__ . "./../view/addMovie.php");
    }
}