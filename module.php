<?php
include('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>Module</title>
</head>
<body>
    <div class="wrapper">
        <img src="photo/module.png" alt=""> <br> <br>
    <form action="ajouter_module.php" method="post" >
        <label for=""> Nom du module
            <br>
            <input type="text" name="module" id="">
        </label>
        <br><br>
        <label for="">Code
            <br>
            <input type="text" name="codeM" id="">
        </label>
        <br><br>
        <label for="">Filiere</label>
        <select name="filiere" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `filiere`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['nom'];
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        <label for="">Semestre</label>
        <select name="semestre" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `semestre`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['numero'];
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        <input type="submit" value="Ajouter" name="ajouter" class='button'> <br> <br>
        <a href="admin.php">RETOUR</a>
    </form>
    </div>
</body>
</html>