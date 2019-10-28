<?php 
    require("model.php");
    require("view.php");
    $acteurs=getActeurs();
    $films=getFilms();
    $productions=getProductions();
    $acteur_films=getActeur_Films();
    $acteur=getActeurByNom("brad");

    render_all($acteurs, "acteur");
    //render_all($films);
    //render_all($productions);
    //render_all($acteur_films);
    render_all($acteur); 
?>