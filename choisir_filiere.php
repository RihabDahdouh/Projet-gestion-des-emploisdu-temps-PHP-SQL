<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>choisir filiere </title>
    <link rel="stylesheet" href="add1.css">
</head>
<body>
    <div class="wrapper">
    <h2>Veuillez choisir une filière :</h2> <br>
        <img src="photo/filiere.png"> <br> <br>
    <form action="#" method="post">
    <select name="ci1">
    <option value="" disabled selected>Cycle d'ingenieur 1</option>
   <?php 
   include("connexion.php");
   session_start();
   $sql="SELECT * FROM `filiere` where code!='CP1' and code!='CP2' ";
   $res=mysqli_query($link,$sql);
   while($data=mysqli_fetch_assoc($res)){
    $id=$data['id'];
    $filiere=$data['nom'];
    echo '<option value=' . $id . '>';
            echo  $filiere;
   echo '</option>';
   }
   ?>
  </select> <br>
     <input type="submit" name="submit" value="envoyer" class="button"> <br>
    </form>
    </div>
    <?php 
    include('connexion.php');
    if(isset($_POST['submit'])){
    session_start();
    $_SESSION['filiere']=$_POST['ci1'];
            header("location: afficheremploi.php");
        }
    
    ?>
</body>
</html>