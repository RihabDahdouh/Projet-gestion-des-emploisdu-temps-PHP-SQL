<?php
include('connexion.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add1.css">
    <title>Seance</title>
</head>
<body>
    <div class="wrapper">
    <form action="ajouter_seance.php" method="post" >
    <img src="photo/seance2.png" alt=""> <br> <br>
        <label for="">Jour : </label>
            <select name="jour" id="">
                    <option value="" disabled selected>Select your option</option>
                    <?php
                        $sql2 = "SELECT * FROM `jour`";
                        $resultat2 = mysqli_query($link, $sql2);
                        while($data2 = mysqli_fetch_assoc($resultat2)){
                            echo '<option value=' . $data2['id_jour'] . '>';
                            echo  $data2['nom_j'];
                            echo '</option>';
                        }
                    ?>
            </select>
        <br><br>
        <label for="">Heure de debut : 
            <select name="h_d" id="">
                <option >8:30</option>
                <option >10:45</option>
                <option >14:00</option>
                <option >16:15</option>
            </select>
        </label>
        <br><br>
        <label for="">Heure de fin : 
            <select name="h_f" id="">
                <option >10:30</option>
                <option >12:45</option>
                <option >16:00</option>
                <option >18:15</option>
            </select>
        </label>
        <br><br>
        <label for="">Module : </label>
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
        <label for="">Enseignant : </label>
            <select name="enseignant" id="">
                    <option value="" disabled selected>Select your option</option>
                    <?php
                        $sql2 = "SELECT * FROM `enseignant`";
                        $resultat2 = mysqli_query($link, $sql2);
                        while($data2 = mysqli_fetch_assoc($resultat2)){
                            echo '<option value=' . $data2['id'] . '>';
                            echo  $data2['nom'] . ' ' . $data2['prenom'];
                            echo '</option>';
                        }
                    ?>
            </select>
        <br><br>
        
        <label for="">Salle</label>
        <select name="salle" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `salle`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['nom'];
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        <label for="">Groupe : </label>
        <select name="groupe" id="">
                <option value="" disabled selected>Select your option</option>
                <?php
                    $sql2 = "SELECT * FROM `groupe`";
                    $resultat2 = mysqli_query($link, $sql2);
                    while($data2 = mysqli_fetch_assoc($resultat2)){
                        echo '<option value=' . $data2['id'] . '>';
                        echo  $data2['type'] . ' ' . $data2['id'];
                        echo '</option>';
                    }
                ?>
        </select>
        <br><br>
        
        <input type="submit" value="Ajouter" name="ajouter" class="button">
    </form>
    </div>
   
</body>
</html>