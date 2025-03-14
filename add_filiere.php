<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une filière</title>
    <link rel="stylesheet" href="add1.css">
</head>
<body>
  
    <div class="wrapper">
        <img src="photo/filiere.png" alt="domaine"> <br> <br>
    <form action="#" method="post">
        <label>Nom filière : </label> <br>
        <input type="text" name="nom_filiere"> <br> <br>
        <label>Code filière: </label> <br>
        <input type="text" name="code_filiere"> <br> <br>
        <label>Charge horaire du filière: </label> <br>
        <input type="number" name="charge_filiere"> <br> <br>
        <input type="submit", name="sub", value="Ajouter" class="button"> <br> <br>
        <a href="admin.php">RETOUR</a>

    </form>
    </div>

    <?php
    include("connexion.php");
    if (isset($_POST['sub'])){
        $name=$_POST['nom_filiere'];
        $code_fil=$_POST['code_filiere'];
        $charge=$_POST['charge_filiere'];
        $sql="INSERT INTO `filiere` (`id`,`nom`, `code`, `charge_horaire`) 
        VALUES (NULL,'$name', '$code_fil', '$charge')";
        $result=mysqli_query($link,$sql);

    
    if ($result==true){
        header('location: admin.php');
    }
    else {
        echo "Echec lors de l'ajout";
    }
    }
    ?>
    
</body>
</html>