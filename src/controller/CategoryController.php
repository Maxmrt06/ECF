<?php
class CategoryController
{
    private $title;

    public function __construct()
        {
            $this->title = "Catégories";
        }
    function manage() {

        include(__DIR__ . "./../view/category.php");
    }
}