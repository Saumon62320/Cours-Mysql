<?php 

try {
        $server = "localhost";
        $user = "root";
        $password = "" ;
        $dbname = "coursmysql";

        $db = new PDO("mysql:host=$server;dbname=$dbname", $user, $password);

        
    
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    
    function getActeurs(){
        global $db;
        $acteurs = $db->query("SELECT * FROM acteur");
        return $acteurs;
    }
   

    function getFilms(){
        global $db;
        $films = $db->query("SELECT * FROM film");
        return $films;
    }

    function getProductions(){
        global $db;
        $productions = $db->query("SELECT * FROM production");
        return $productions;
    }
    function getActeur_Films(){
        global $db;
        $acteur_films = $db->query("SELECT * FROM acteur_film");
        return $acteur_films;
    }

    function getActeurByNom($nom){
        global $db;
        $acteur = $db->prepare("SELECT * FROM acteur WHERE acteur.nom = :nom");
        $acteur -> bindParam(":nom",$nom);
        $acteur -> execute();
        return $acteur;
    }


?>