<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add1.css">
    <title>admin</title>
</head>
<body>
<div class="wrapper">
<form action="" method="POST" enctype="multipart/form-data">
<img src="photo/modify.png" alt=""> <br> <br>
<?php 
session_start();
include("connexion.php");
    $login=$_SESSION['login'];
    $pass=$_SESSION['pass'];
    $sql1="SELECT * FROM `utilisateur` WHERE nom='".$login."' AND mot_de_passe='".$pass."'";
    $requette1=mysqli_query($link,$sql1);
    $data1=mysqli_fetch_assoc($requette1);

    $sql2="SELECT * FROM `enseignant` WHERE `nom`= '$login' AND `prenom`='".$data1['prenom']."'";
    $requette2=mysqli_query($link,$sql2);
    $data2=mysqli_fetch_assoc($requette2);
    $enseignant = $data2['id'];
?>
<label>NOM</label>
<input type="text" name="nom" value="<?php echo $data1['nom']; ?>" ><br><br>

<label>PRENOM</label>
<input type="text" name="prenom" value="<?php echo $data1['prenom']; ?>" ><br><br>
    
<label>PASSWORD</label>
<input type="text" name="password" value="<?php echo $data1['mot_de_passe']; ?>" ><br><br>

<label>PHOTO</label>
<input type="file" name="image" ><br><br>

<input type="submit" name="enregistrer" value="enregistrer" class="button">

<?php
if(isset($_POST['enregistrer'])){

    $nom1=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $password=$_POST["password"];
    

    if(isset($_FILES['image']) and $_FILES['image']['error']==0){
		$dossier= 'photo/';
		$temp_name=$_FILES['image']['tmp_name'];
		if(!is_uploaded_file($temp_name)){
		    exit("le fichier est introuvable");
		}
		if ($_FILES['image']['size'] >= 1000000){
			exit("Erreur, le fichier est volumineux");
		}
		$infosfichier = pathinfo($_FILES['image']['name']);
	    $extension_upload = $infosfichier['extension'];
						
		$extension_upload = strtolower($extension_upload);
		$extensions_autorisees = array('png','jpeg','jpg');
		if (!in_array($extension_upload, $extensions_autorisees))
		{
		exit("Erreur, Veuillez inserer une image svp ");
		}
		$nom_photo=$login.".".$extension_upload;
		if(!move_uploaded_file($temp_name,$dossier.$nom_photo)){
			exit("Problem dans le telechargement de l'image, Ressayez");
		}
		$ph_name=$nom_photo;
	}
	else{
		$ph_name="SANS_IMAGE.png";
	}
    $sql = "SET FOREIGN_KEY_CHECKS=0";
    $resultat=mysqli_query($link,$sql);

    $sql = "UPDATE `enseignant` SET `nom`='$nom1',`prenom`='$prenom' WHERE `id` ='$enseignant' ";
    $resultat=mysqli_query($link,$sql);

    $sql = "UPDATE `utilisateur` SET `nom`='$nom1',`prenom`='$prenom',`mot_de_passe`='$password',`photo_profil`='$ph_name' WHERE nom='$login'";
    $resultat=mysqli_query($link,$sql);

    $_SESSION['login'] = $nom1;
    $_SESSION['pass'] = $password;
    
    if($resultat==TRUE){
        header("Location: prof.php");
    }
}
?>
</div>
</body>
</html>