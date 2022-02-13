<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        h5 {
        color: red ;
        }
    </style>
    <title>Document</title>
    <title>Document</title>
</head>
        <center>
                <?php
                     if (isset($_GET['error'])) 
                     {
                        if($_GET['error'] == "emptyfields")
                        {
                            echo '<h5 classe="signuperror">Vous Devez Remplire Tout Les Champs!</h5>';
                        
                        }
                        else if ($_GET['error'] == "wrongpassword")
                        {
                            echo '<h5 classe="signuperror">Mot De Passe Est Faut!</h5>';
                        }
                        else if ($_GET['error'] == "nostudent")
                        {
                            echo '<h5 classe="signuperror">Cet Etudiant N existe Pas!!</h5>';
                        }
                        
                     }
                ?>
        </center>
        <center>
            <div class="content">
               <table width=50%  background="images/bg1.jpg" class="tab"> 
               <tr><td colspan='2' align='center' > <img src="images/ensa-tanger.png" class="logoensat" > </td></tr>
               <tr><td width=60%  colspan='2' align='center'> <p class="ENSAT">Bienvenue au site  web de l'ecole nationale des sciences appliquees  </p></td></tr>  
               

              <form action="include/login-inc.php" method="POST" >
                  <tr><td > <p class="name"  >E-mail d'utilisateur</p></td><td><input type="text" name="nomEtulisateur" required> <br></td></tr>
                  <tr><td > <p class="mp">Mot de passe</p></td><td><input type="password" name="motDePasse" required></td></tr>
        
                   
                     
                    
                     

                  <tr><td>  <input class="register"  type="submit" name="log_in" value="Se connecter"></td>
                </form>

                <form action="signup.php">
                    <br>
                   <td> <input class="connexion"  type="submit" name="Sign_Up" value="Sign Up"> </td> </tr>
                </form>
                <tr><td></br></td></tr>
                    </table>
                    </div>
        </center> 
<body>