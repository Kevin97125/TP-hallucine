<?php 
    try {//https://www.php.net/manual/fr/language.exceptions.php
        $database = connect("localhost", "hallucine", "root", "");//function avec parametre passer pour une connexion a une base de données.   
    } catch ( Exception $error) {
        echo "Erreur de connexion à la BDD (Base de données) <br>";
        die("ERRORE:".$error->getMessage());
    }
    
    $sql = "SELECT * FROM `movies`;"; //langage en sql qui retourne des enregistrements (SELECT) de la table movies (FROM) stocké dans une variable

    $results = $database->query($sql);//pour dire une requete sql
    //var_dump($results);

    // while ($row = $results->fetch(PDO::FETCH_ASSOC)) {// Boucle qui retourne les ligne de la table depuis sql stocker dans $results
    //     echo $row ["1"] . " " . $row["5<"] ."<br>";
    // }

    $rows = $results->fetchall(PDO::FETCH_ASSOC);

    foreach ($rows as $key => $value) {
        echo $value["title"]."" . $value["release_date"] ."<br>";
    }

    $sqlInsert = "$INSERT INTO `movies` (`id`, `title`, `image_url`, `runtime`, `description`, `release_date`, `added_date`) VALUES (NULL, 'j\'en ai pas.', 'jen_ai_pas', '10800', 'description', '2022-08-02'";

    function connect($host, $dbname, $login, $password){ //fonction qui permet de ce connecter a une base de données en passant les parametre
        return new PDO("mysql:host=".$host.";dbname=".$dbname, $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRORE_EXCEPTION)); // connexion a la base de données stockés dans une variable avec id et mot de passe.
        //var_dump($database); teste pour tester la connexion
    }
?>