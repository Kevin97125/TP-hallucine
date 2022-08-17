<?php 
    $database = connect("localhost", "hallucine", "root");//function avec parametre passer pour une connexion a une base de données.
    
    $sql = "SELECT * FROM `movies`;"; //langage en sql qui retourne des enregistrements (SELECT) de la table movies (FROM) stocké dans une variable

    $results = $database->query($sql);//pour dire une requete sql
    //var_dump($results);

    while ($row = $results->fetch()) {// Boucle qui retourne les ligne de la table depuis sql stocker dans $results
        echo $row ["title"] . " " . $row["release_date"] ."<br>";
    }
    
    function connect($host, $dbname, $login){ //fonction qui permet de ce connecter a une base de données en passant les parametre
        return new PDO("mysql:host=".$host.";dbname=".$dbname, $login); // connexion a la base de données stockés dans une variable avec id et mot de passe.
        //var_dump($database); teste pour tester la connexion
    }
?>