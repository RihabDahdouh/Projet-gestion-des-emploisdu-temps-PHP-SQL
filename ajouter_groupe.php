<?php
session_start();
if(isset($_POST["ajouter"])){
    include('connexion.php');
    $ID = $_POST["id"];
    $type = $_POST["type"];
    $filiere= $_POST["filiere"];
    $section = $_POST["section"];
    $module = $_POST["module"];
    $nombre = $_POST["nombre"];



    $sql = "INSERT INTO `groupe`(`id`, `type`, `filiere`, `section`, `module_id`, `nombre`) VALUES ('$ID','$type','$filiere','$section','$module','$nombre')";
    $result = mysqli_query($link, $sql);

    $sql = "INSERT INTO `groupe_module`(`groupe_id`, `module_id`) VALUES ('$ID','$module')";
    $result = mysqli_query($link, $sql);
    header('location: admin.php');
}
else{
    header('Location: groupe.php');
}
?>