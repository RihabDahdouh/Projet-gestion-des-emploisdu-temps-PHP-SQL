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
    <title>Groupe</title>
    <style>
        img{
            width:130px;
            height:130px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <img src="photo/groupe.png" alt=""> <br> <br>
    <form action="ajouter_groupe.php" method="post" >
        <label for="">ID</label><br>
            <input type="text" name="id" id="">

        <br><br>
        <label for="">Type</label>
        <select name="type" id="">
            <option>Cours</option>
            <option>TD</option>
            <option>TP</option>
        </select>
        <br><br>
        <label for="">Filiere</label>
        <select name="filiere" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `filiere`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['code'];
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        <label for="">Section
            <input type="text" name="section" id="">
        </label>
        <br><br>
        <label for="">Nombre 
            <input type="number" name="nombre" id="">
        </label>
        <br><br>
        <label for="">Module</label>
        <select name="module" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `module`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['code'];
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