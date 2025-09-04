<?php 

    if(isset($_POST["$email"]) && $_POST["$mdp"]){
        $serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe = "";
        $nom_base = "formulaire";

        $con = mysqli_connect($serveur,$utilisateur,"",$nom_base);

        $req = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' AND mdp = '$password' " );

    }

    
?>
