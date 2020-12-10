<?php

class Model
{
    private $handle;

    public function __construct()
        {
            $db = BddAcces::getInstance();
            $this->handle = $db->getHandle();
        }
    
    public function addMovie($name, $poster, $year)
    {
        try
        {
            $request = $this->handle->prepare('INSERT INTO `movies` (movies_name, movies_poster, movies_year)
                                                VALUES (?,?,?)');
            $request->execute(array(
            
                $name,
                $poster,
                $year       
            ));
        } catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL :' . $e->getMessage());
        }


    }
    public function getAllMovies()
    {
        try
        {
            $request = $this->handle->prepare('SELECT * FROM `movies`');
            $request->execute();

            $data = $request->fetchAll();
            return $data;
            
        }  catch (PDOException $e) {
            var_dump('Erreur lors de la requete SQL :' . $e->getMessage());
        }

    }

    public function getOneMovie()
    {
            try{
                $request = $this->handle->prepare('SELECT * FROM `movies` WHERE `movies_id` = ' . $_GET['id']);
                $request->execute();

                $dataOne = $request->fetchAll(); //fetchAll pour tout recuperer. Si ciblé utiliser only fetch
                
                return $dataOne;
               

            } catch (PDOException $e) {
                var_dump('Erreur lors de la requete SQL :' . $e->getMessage());
            }
          
    }
}