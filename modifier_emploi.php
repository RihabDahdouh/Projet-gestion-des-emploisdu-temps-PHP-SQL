
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
    <title>Seance</title>
</head>
<body>
    <div class="wrapper">
        <form action="#" method="post" >
        <img src="photo/modify.png" alt=""> <br> <br>
        <label for="">Seance a modifier : </label>
            <select name="seance" id="">
                    <option value="" disabled selected>Select your option</option>
                    <?php
                        $sql2 = "SELECT * FROM `seance`";
                        $resultat2 = mysqli_query($link, $sql2);
                        while($data2 = mysqli_fetch_assoc($resultat2)){
                            echo '<option value=' . $data2['id_seance'] . '>';
                            echo  $data2['id_seance'];
                            echo '</option>';
                        }
                    ?>
            </select>
        <br><br>
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
        <label for="">Heur de debut : 
            <select name="h_d" id="">
                <option >8:30</option>
                <option >10:45</option>
                <option >14:00</option>
                <option >16:15</option>
            </select>
        </label>
        <br><br>
        <label for="">Heur de fin : 
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

<?php
if(isset($_POST["ajouter"])){
    $jour = $_POST["jour"];
    $hd = $_POST["h_d"];
    $hf = $_POST["h_f"];
    $salle = $_POST["salle"];
    $enseignant = $_POST["enseignant"];
    $module = $_POST["module"];
    $groupe = $_POST["groupe"];

    $seance = $_POST["seance"];

    $filiere = $_SESSION["filiere"];

    $sql = "UPDATE `seance` SET `h_d`='$hd',`h_f`='$hf',`id_jour`='$jour',`id_module`='$module',`id_enseignant`='$enseignant',`id_salle`='$salle',`id_groupe`='$groupe' WHERE `id_filiere` = '$filiere' AND `id_seance` = '$seance'";
    $result = mysqli_query($link, $sql);



    header('location: afficheremploi.php');
}
?>