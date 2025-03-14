<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>Enseignant</title>
    
</head>
<body>
    <div class="wrapper">
        <?php 
        include('connexion.php');
        session_start();
        $nom=$_SESSION['login'];
        $sql="SELECT * FROM  utilisateur where nom='". $nom ."'";
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


        <button class='button1'><a href="modifier_enseignant.php">Modifier vos informations</a></button>
        <button class='button2'><a href="deconnexion.php">Déconnexion</a></button>
    </div>

    <div class="box">
    <img src="photo/ratt.png" alt=""- class='icon'> <br>
    <button class="button"><a href="emploi.php">Ajouter un Rattrapage</a></button> <br>
    <button class="button"><a href="consulter.php">Consulter un emplois</a></button>
    </div>
    
</body>
</html></html>