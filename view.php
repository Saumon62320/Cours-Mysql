 <?php 

   function render_all($res, $type){

    $type == "acteur";

    echo "<table><tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Date Naissance</th><th>Nationalité</th></tr>";
        while($row = $res->fetch()){
            echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>". $row["prenom"]."</td><td>". $row["date_naissance"]."</td><td>". $row["nationalite"]."</td></tr>";
        }
        echo "</table>";
    }
    

?>