<?php 
include('connexion.php');
if(isset($_POST['connecter'])){
    if(isset($_POST['login']) or isset($_POST['password'])){
        $login=$_POST['login'];
        $pass=$_POST['password'];
        $sql="SELECT * FROM utilisateur WHERE nom='" . $login ."' AND mot_de_passe='" .$pass . "'";
        $result=mysqli_query($link,$sql);
        $matchFound = mysqli_num_rows($result) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

        if($matchFound == 'yes'){
            $data=mysqli_fetch_assoc($result);
            if($data!= false){
                session_start();
                $_SESSION['login']=$data['nom'];
                $_SESSION['pass']=$data['mot_de_passe'];
                if($data['role']=='admin'){
                    $_SESSION['role'] = $data['role'];
                    header("location: admin.php");
                }
                elseif($data['role']=='enseignant'){
                    $_SESSION['role'] = $data['role'];
                    header("location: prof.php");
                }
                else{
                    header('location: login.php');
                }

            }
        }
        else{
            header('location: login.php');
        }
    }
    else{
        header('location: login.php');
    }
}

?>