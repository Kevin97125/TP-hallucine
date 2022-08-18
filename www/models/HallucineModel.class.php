<?php

require_once "Model.class.php";
require_once "movie.class.php";

class hallucineModel extends Model{
    private $_movies;

    public function requestMovies(){
        $_movies = array(); 
        $sql = "SELECT * FROM `movies` ORDER BY title;";//recuperation des filmes

        $request = $this->_getDatabase("localhost", "hallucine", "root", "")->prepare($sql);

        $request->execute(); //execute la requetes
        $rows = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor(); //Fermeture de la requete

        foreach ($rows as $key => $value) {
            $movie = new Movie($value["id"], $value["title"], $value["image_url"], $value["runtime"], $value["description"], $value["release_date"], $value["added_date"]);
            $this->_movies[] = $movie;
        }
    }

    public function getMovies() {return $this->_movies;}
}
?>