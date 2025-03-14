<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un semestre</title>
    <link rel="stylesheet" href="add1.css">
</head>
<body>
    <div class="wrapper">
        <img src="photo/semester.png" alt="semestre"> <br> <br>

    <form action="#" method="post">
    <label>Numero du semestre : </label> <br>
        <input type="number" name="num_semestre"> <br> <br>
        <label>debut semestre: </label> <br>
        <input type="date" name="debut_s"> <br> <br>
        <label>Fin semestre: </label> <br>
        <input type="date" name="fin_s"> <br> <br>
        <input type="submit", name="submit", value="Ajouter" class="button"> <br> <br>
        <a href="admin.php">RETOUR</a>
    </form>
    </div>

    <?php
    include("connexion.php");
    if (isset($_POST['submit'])){
        $num=$_POST['num_semestre'];
        $debut_s=$_POST['debut_s'];
        $fin_s=$_POST['fin_s'];
        $sql="INSERT INTO `semestre` (`id`, `numero`, `debut`, `fin`)
        VALUES (NULL,'$num', '$debut_s', '$fin_s')";
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