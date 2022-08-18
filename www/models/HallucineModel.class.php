<?php

require_once "Model.class.php";

class hallucineModel extends Model{
    private $_movies;

    public function requestMovies(){
        $_movies = array(); 
        $sql = "SELECT * FROM `movies` ORDER BY title;";//recuperation des filmes

        $request = $this->getDatabase("localhost", "hallucine", "root", "")->prepare($sql);

        $request->execute(); //execute la requetes
        $rows = $request->fetchAll(PDO::FETCH_ASSOC);
        $request->closeCursor(); //Fermeture de la requete
    }
}
?>