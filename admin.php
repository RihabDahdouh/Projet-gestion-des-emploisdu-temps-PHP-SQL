<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <style>

    </style>
</head>
<body>
<div class="wrapper">
        <?php 
        include("connexion.php");
        session_start();
        $nom=$_SESSION['login'];
        $sql="SELECT * FROM utilisateur where nom='". $nom ."'";
        $resu=mysqli_query($link,$sql);
        while ($data=mysqli_fetch_assoc($resu)){
            $img=$data['photo_profil'];
            echo '<br>';
            echo "<h1 class='title'> " . $data['prenom'] . " " . $data['nom'] . "</h1>";
            echo '<br>';

            echo '<p>';
            echo "<img src=\"photo/$img\" alt=>";
            echo '</p>';
        }
        
        ?>
        <br>


        <button class='button1'><a href="modifier_profil.php">Modifier vos informations</a></button>
        <button class='button2'><a href="deconnexion.php">Déconnexion</a></button>

        

       
</div>

<div class="box">
    <button class="button"><a href="ajouter_enseignant.php">Ajouter un Professeur</a></button> <br>
    <button class="button"><a href="add_filiere.php">Ajouter filière</a></button> <br>
    <button class="button"><a href="add_semestre.php">Ajouter semestre</a></button> <br>
    <button class="button"><a href="module.php">Ajouter module</a></button> <br>
    <button class="button"><a href="groupe.php">Ajouter groupe</a></button> <br>
    <button class="button"><a href="add_salle.php">Ajouter salle</a></button> <br>
    <button class="button"><a href="emploi.php">Ajouter seance</a></button> <br>
</div>

    
</body>
</html>