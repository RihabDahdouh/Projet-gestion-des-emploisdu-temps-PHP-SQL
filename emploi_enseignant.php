<?php
    include('connexion.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="add1.css">
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '1' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '2' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '3' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '4' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '5' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '6' AND `h_d` = '8:30' AND `h_f` = '10:30'  AND `id_filiere` = '".$_SESSION['filiere']."' " ;
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
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '6' AND `h_d` = '10:45' AND `h_f` = '12:45' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '10:45' && $data['h_f'] == '12:45'){

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
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '6' AND `h_d` = '14:00' AND `h_f` = '16:00' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '14:00' && $data['h_f'] == '16:00'){

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
                            }    

                            echo "</td>";
                        }
                    }
                }
                else{
                    echo "<td> -- </td>";
                }  
                //-----------------------------------------------------------------------------------------------
                $sql = "SELECT * FROM `seance` WHERE `id_jour` = '6' AND `h_d` = '16:15' AND `h_f` = '18:15' AND `id_filiere` = '".$_SESSION['filiere']."' " ;
                $resultat = mysqli_query($link, $sql);
                $matchFound = mysqli_num_rows($resultat) > 0 ? 'yes' : 'no'; // on verifie si le nombre de ligne est null ou pas\
                if($matchFound == 'yes'){
                    echo "<td>";
                    while($data = mysqli_fetch_assoc($resultat)){
                        if($data['h_d'] == '16:15' && $data['h_f'] == '18:15'){

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
</div> 
<div class="wrapper">  
<form action="#" method="post">
        
        <label for="">Seances disponibles : </label>
        <select name="esj" id="">
            <option value="" disabled selected>Select your option</option>
            <?php
                $sql2 = "SELECT * FROM `etatsallejour` WHERE `etat` = 'empty'";
                $resultat2 = mysqli_query($link, $sql2);
                while($data2 = mysqli_fetch_assoc($resultat2)){
                    echo '<option value=' . $data2['id_esj'] . '>';
                    $sql3 = "SELECT * FROM `jour` WHERE `id_jour` = '".$data2['id_jour']."'";
                    $resultat3 = mysqli_query($link, $sql3);
                    while($data3 = mysqli_fetch_assoc($resultat3)){
                        echo $data3['nom_j'] . " ";
                    }
                    echo  "De" . $data2['h_d'] . " a " . $data2['h_f'] . " ";
                    $sql3 = "SELECT * FROM `salle` WHERE `id` = '".$data2['id_salle']."'";
                    $resultat3 = mysqli_query($link, $sql3);
                    while($data3 = mysqli_fetch_assoc($resultat3)){
                        echo "Salle". $data3['nom'] . " ";
                    }
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
    if(isset($_POST['ajouter'])){
        $esj =$_POST["esj"];
        $sql = "SELECT * FROM `etatsallejour` WHERE `id_esj` = '$esj'";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($result);

        $jour = $data["id_jour"];
        $hd = $data["h_d"];
        $hf = $data["h_f"];
        $salle = $data["id_salle"];
        $groupe = $_POST["groupe"];
        $filiere = $_SESSION['filiere'];
        

        $enseignant = $_SESSION["login"];
        echo $enseignant;

        $sql = "SELECT `id` FROM `enseignant` WHERE `nom` = '$enseignant'";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($result);
        $enseignant = $data['id']; 
        echo $enseignant;

        $sql = "SELECT DISTINCT `module_id` FROM `enseignant_module` WHERE `enseignant_id` = '$enseignant'";
        $result = mysqli_query($link, $sql);
        $data = mysqli_fetch_assoc($result);
        $module = $data["module_id"];


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
    }
?>