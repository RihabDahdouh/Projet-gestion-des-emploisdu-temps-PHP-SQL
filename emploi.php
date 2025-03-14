<?php
include('connexion.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>Groupe</title>
    <style>
        .button{
            margin-top: 5px;
            width: 200px;
        }
        .img{
            width:150px;
            height:150px;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <img src="photo/seance1.png" alt=""> <br> <br>
    <form action="#" method="post" >
        <label for="">Choisir Filiere : </label>
        <select name="filiere">
                <?php
                    $sql2 = "SELECT * FROM `filiere`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['code'] ;
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        <?php
        if($_SESSION['role'] != 'enseignant'){
        ?>
        <input type="submit" value="Ajouter" name="ajouter" class="button">
        <br><br>
        <input type="submit" value="Modifier" name="modifier" class="button">
        <?php
        }
        else{
        ?>
            <input type="submit" value="Ajouter un ratt" name="ratt" class="button">
        <?php
        }
        ?>
        <br><br>
        <a href="admin.php">RETOUR</a>
    </form>
    </div>
</body>
</html>

<?php
if(isset($_POST["ajouter"])){
    $_SESSION["filiere"] = $_POST["filiere"];
    header('location: seance.php');
}
if(isset($_POST["modifier"])){
    $_SESSION["filiere"] = $_POST["filiere"];
    header('location: modifier_emploi.php');
}

if(isset($_POST["ratt"])){
    $_SESSION["filiere"] = $_POST["filiere"];
    header('location: emploi_enseignant.php');
}