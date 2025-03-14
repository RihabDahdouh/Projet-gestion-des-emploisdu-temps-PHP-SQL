<?php
    include('connexion.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <title>emploi</title>
</head>
<body> 
<div class="table-wrapper">
<table class="fl-table">
        <tr>
            <th ></th>
            <th >8:30-10:30</th>
            <th >10:45-12:45</th>     
            <th >14:00-16:00</th>       
            <th >16:30-18:30</th>
        </tr>
        <tr>
            <th>Lundi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '1' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                                echo "<br>";
                            }    

                            
                        }
                    }
                    echo "</td>";
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '1' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '1' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '1' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>

        <!----------------------------------------------------------MARDI---------------------------------------------------------->
        <tr>
            <th>Mardi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '8:30' AND `h_f` = '10:30' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){

                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>

        <!---------------------------------------------------Mercredi--------------------------------------------->
        <tr>
            <th>Mercredi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '8:30' AND `h_f` = '10:30' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){

                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>

        <!------------------------------------------------Jeudi----------------------------------------->
        <tr>
            <th>Jeudi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '8:30' AND `h_f` = '10:30' AND `id_filiere` = '".$_SESSION['filiere']."' ";
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){

                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>

        <!------------------------------------------------Vendredi------------------------------------->
        <tr>
            <th>Vendredi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '8:30' AND `h_f` = '10:30' AND `id_filiere` = '".$_SESSION['filiere']."' "  ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){

                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>

        <!-------------------------------------------------Samedi------------------------------------>
        <tr>
            <th>Samedi</th>
            <?php

                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '{' AND `h_d` = '8:30' AND `h_f` = '10:30' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\

                if($matchFound == 'yes'){

                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '8:30' && $data['h_f'] == '10:30'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '{' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '{' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '{' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

                            $sql1 = "SELECT * FROM `module` WHERE `id` = '".$data['id_module']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo "<td>";
                                echo $data1['nom'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `enseignant` WHERE `id` = '".$data['id_enseignant']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] . " " . $data1['prenom'] ;
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `groupe` WHERE `id` = '".$data['id_groupe']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo  $data1['type'] . ' ' . $data1['id'];
                                echo "<br>";
                            }

                            $sql1 = "SELECT * FROM `salle` WHERE `id` = '".$data['id_salle']."'";
                            $result1 = mysqli_query($link, $sql1);
                            while($data1 = mysqli_fetch_assoc($result1)){
                                echo $data1['nom'] ;
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }
            ?>
        </tr>
</table>
    
</body>
</html>

        
