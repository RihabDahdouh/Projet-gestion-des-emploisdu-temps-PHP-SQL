<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <form action="ajouter_seance.php" method="post"  >
    <img src="photo/error.png" alt=""> <br> <br>
<?php
session_start();

    include('connexion.php');
    $jour = $_POST["jour"];
    $hd = $_POST["h_d"];
    $hf = $_POST["h_f"];
    $salle = $_POST["salle"];
    $enseignant = $_POST["enseignant"];
    $module = $_POST["module"];
    $groupe = $_POST["groupe"];

    $filiere = $_SESSION["filiere"];

    $sql = "SELECT `etat` FROM `etatsallejour` WHERE `h_d` = '$hd' AND `h_f` = '$hf' AND `id_jour` = '$jour' AND `id_salle` = '$salle' ";
    $result = mysqli_query($link, $sql);
    $data = mysqli_fetch_assoc($result);
    if($data['etat'] == 'occupied' ){

        $sql = "SELECT * FROM `seance` WHERE `h_d`='$hd' AND `h_f`='$hf' AND `id_jour`='$jour' AND `id_salle`='$salle'";
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

        if($matchFound == 'no'){
            $sql = "INSERT INTO `seance`(`id_seance`, `h_d`, `h_f`, `id_jour`, `id_module`, `id_enseignant`, `id_salle`, `id_groupe`, `id_filiere`) VALUES ('','$hd','$hf','$jour','$module','$enseignant','$salle','$groupe','$filiere')";
            $result = mysqli_query($link, $sql);
            $sql = "SELECT * FROM `enseignant_module` WHERE `enseignant_id` = '$enseignant' AND `module_id` = '$module'";
            $result = mysqli_query($link, $sql);
            $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
            if($matchFound == 'no'){
                $sql = "INSERT INTO `enseignant_module`(`enseignant_id`, `module_id`) VALUES ('$enseignant','$module')";
                $result = mysqli_query($link, $sql);
            }
            header('location: afficheremploi.php');
        }
        else{
        ?>
            <h2>Salle occupée !</h2>
            <br><br>
            <a href="seance.php" class="button">Retourner</a>
        <?php
        }

        
    }
    else{
        $sql = "UPDATE `etatsallejour` SET `etat`='occupied' WHERE `h_d`='$hd' AND `h_f`='$hf' AND `id_jour`='$jour' AND `id_salle`='$salle'";
        $result = mysqli_query($link, $sql);

        $sql = "INSERT INTO `seance`(`id_seance`, `h_d`, `h_f`, `id_jour`, `id_module`, `id_enseignant`, `id_salle`, `id_groupe`, `id_filiere`) VALUES ('','$hd','$hf','$jour','$module','$enseignant','$salle','$groupe','$filiere')";
        $result = mysqli_query($link, $sql);

        $sql = "SELECT * FROM `enseignant_module` WHERE `enseignant_id` = '$enseignant' AND `module_id` = '$module'";
        $result = mysqli_query($link, $sql);
        $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
        if($matchFound == 'no'){
            $sql = "INSERT INTO `enseignant_module`(`enseignant_id`, `module_id`) VALUES ('$enseignant','$module')";
            $result = mysqli_query($link, $sql);
        }
        header('location: afficheremploi.php');

        
    }

?>
</form>
    </div>
</body>
</html>