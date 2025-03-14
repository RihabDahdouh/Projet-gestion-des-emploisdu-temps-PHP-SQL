<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Salle</title>
    <link rel="stylesheet" href="add1.css">
    <style>
        img{
            height:150px;
            width:150px;
        }
    </style>

</head>
<body>
   
    <div class="wrapper">
    <img src="photo/salle.png" alt=""> <br> <br>
<form action="#" method='post'>
    <label>Nom Salle:</label><br>
    <input type="text" name='salle' required class='input'><br>
    <label>Capacité de la salle:</label><br>
    <input type="text" name='capacity' required class='input'><br>
    <input type="submit" name='ajouter' value='Ajouter' class='button'> <br> <br>
    <a href="admin.php">RETOUR</a>
     
  
</form> </div>

<?php 
include("connexion.php");
if (isset($_POST['ajouter'])){
    $nom=$_POST['salle'];
    $cap=$_POST['capacity'];
    $sql="INSERT INTO `salle` (`id`, `nom`, `capacite_accueil`) VALUES (NULL, '$nom', '$cap')";
    $res=mysqli_query($link,$sql);

    $sql="SELECT `id` FROM `salle` WHERE `nom` = '$nom'";
    $res=mysqli_query($link,$sql);
    $data = mysqli_fetch_assoc($res);
    $salle =  $data['id'];

    $sql="INSERT INTO `etatsallejour`(`h_d`, `h_f`, `id_jour`, `id_salle`, `etat`) VALUES 
    ('8:30','10:30','1','$salle','empty'),
    ('10:45','12:45','1','$salle','empty'),
    ('14:00','16:00','1','$salle','empty'),
    ('16:15','18:15','1','$salle','empty'),
    ('8:30','10:30','2','$salle','empty'),
    ('10:45','12:45','2','$salle','empty'),
    ('14:00','16:00','2','$salle','empty'),
    ('16:15','18:15','2','$salle','empty'),
    ('8:30','10:30','3','$salle','empty'),
    ('10:45','12:45','3','$salle','empty'),
    ('14:00','16:00','3','$salle','empty'),
    ('16:15','18:15','3','$salle','empty'),
    ('8:30','10:30','4','$salle','empty'),
    ('10:45','12:45','4','$salle','empty'),
    ('14:00','16:00','4','$salle','empty'),
    ('16:15','18:15','4','$salle','empty'),
    ('8:30','10:30','5','$salle','empty'),
    ('10:45','12:45','5','$salle','empty'),
    ('14:00','16:00','5','$salle','empty'),
    ('16:15','18:15','5','$salle','empty'),
    ('8:30','10:30','6','$salle','empty'),
    ('10:45','12:45','6','$salle','empty'),
    ('14:00','16:00','6','$salle','empty'),
    ('16:15','18:15','6','$salle','empty')
    ";
    $res=mysqli_query($link,$sql);
    
    if ($res==true){
        header('location: admin.php');
    }
    else {
        echo "Echec lors de l'ajout";
    }
}

?>

    
    
</body>
</html>