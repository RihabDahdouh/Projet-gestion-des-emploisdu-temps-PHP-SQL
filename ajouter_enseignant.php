<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ajouter enseignant</title>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:Verdana, Geneva, Tahoma, sans-serif
}

body{
    background-color: #d1e2f7;
    
}
.title{
    text-align: center;
    margin-top: 20px;
    margin-bottom: 0;
    font-size: 1.2em;
    color: rgb(61, 61, 61);
}

.wrapper{
    width:400px;
    padding: 2rem 1rem;
    margin-top: 150px;
    margin-left: 100px;
    background-color: #fff;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    margin: 30px auto;
    
}

.button{
    width: 280px;
    margin-top: 1.8rem;
    padding: 10px 5px;
    outline: none;
    border: none;
    color: #fff;
    background-color: #003166; 
    border-radius:20px;
    transition: .5s;
    font-size: 1.1em;
    cursor:pointer;

}
.button a{
    text-decoration: none;
    color: #003166;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bolder;
}
a{
    text-decoration: none;
    color: #003166;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    font-weight: bolder;
}
a:hover{
    text-decoration: underline;
}

img{
    width: 170px;
    height: 170px;
}
input{
    width: 92%;
    outline: none;
    border: 1px solid #fff;
    padding: 5px 20px;
    border-radius: 10px;
    background: #e4e4e4 ;
    font-size: large;
}
    </style>
</head>
<body>

<form action="" method="POST">

 <div class="wrapper">
    <img src="photo/teacher.png" alt="professeur"> <br>


    <label>ID DE L'ENSEIGNANT:</label>
    <input type="text" name="ID_prof" required><br><br>

    <label>NOM DE L'ENSEIGNANT:</label>
    <input type="text" name="nom_prof" required><br><br>

    <label>PRENOM DE L'ENSEIGNANT:</label>
    <input type="text" name="prenom_prof" required><br><br>

    <label>MOT DE PASSE:</label>
    <input type="text" name="pass" required><br><br>

    <label>CHARGE HORAIRE:</label>
    <input type="text" name="charge_h" required><br><br>

    <input type="submit" name="enregistrer" value="enregistrer" class='button'> <br> <br>
    <a href="admin.php">RETOUR</a>


    </div>
    

    <?php
    include("connexion.php");
    session_start();
    if(isset($_POST['enregistrer'])){

        $nom_prof=$_POST['nom_prof'];
        $ID_prof=$_POST['ID_prof'];
        $prenom_prof=$_POST['prenom_prof'];
        $pass = $_POST['pass'];
        $charge_h=$_POST['charge_h'];

        $sql="INSERT INTO `utilisateur`(`id`, `nom`, `prenom`, `mot_de_passe`, `photo_profil`, `role`) VALUES ('','$nom_prof','$prenom_prof','$pass','SANS_IMAGE.png','enseignant')";
        $result=mysqli_query($link,$sql);

        $sql="SELECT `id` FROM `utilisateur` WHERE `nom` = '" . $nom_prof ."'";
        $result=mysqli_query($link,$sql);
        $data = mysqli_fetch_assoc($result);
        $login = $data['id'];

        $sql="INSERT INTO `enseignant`(`id`, `nom`, `prenom`, `charge_horaire`, `utilisateur_id`) VALUES ('$ID_prof','$nom_prof','$prenom_prof','$charge_h','$login')";
        $result=mysqli_query($link,$sql);
        if($result!=FALSE){
            echo'votre enseignant a été bien enregistré';
        }
}
    
    ?>
   
</form>


    
</body>
</html>