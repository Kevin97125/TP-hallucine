<?php
    //https://www.php.net/manual/fr/language.oop5.visibility.php
    abstract class Model{
        private static $_pdo; //private permet de déclarer des attributs et des méthodes qui ne seront visibles et accessibles directement que depuis l'intérieur même de la classe. C'est à dire qu'il devient impossible de lire ou d'écrire la valeur d'un attribut privé directemen
        
        //Les propriétés déclarées sans explicitement utiliser un mot-clef de visibilité seront automatiquement définies comme publiques.indique que les propriétés et méthodes d'un objet seront accessibles depuis n'importe où dans le programme principal ou bien dans les classes mères héritées ou classes filles dérivées.
        protected function _getDatabase(){ //Il permet d'utiliser des attributs et méthodes communs dans une classe parente et ses classes dérivées (héritantes).
            if(self::$_pdo===null){
                try {
                    self::$_pdo = self::_connect("localhost", "hallucine", "root", "");
                } catch (Exception $error) {
                    echo "Erreur de connexion à la BDD.<br>";
                    die("ERROR: ".$error->getMessage());
                }
        }

        private static function _connect($host, $dbname, $login, $password){
            $db = new PDO("mysql:host=".$host.";dbname=".$dbname, $login, $password);
            
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
    }
?>