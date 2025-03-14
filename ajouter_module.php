<?php
session_start();
if(isset($_POST["ajouter"])){
    include('connexion.php');
    $module = $_POST["module"];
    $code = $_POST["codeM"];
    $filiere = $_POST["filiere"];
    $semestre = $_POST["semestre"];


    $sql = "INSERT INTO `module`(`id`, `nom`, `code`, `filiere_id`, `semestre_id`) VALUES ('','$module','$code','$filiere','$semestre')";
    $result = mysqli_query($link, $sql);
    header('location: admin.php');
}
else{
    header('Location: module.php');
}
?>