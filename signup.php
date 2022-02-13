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
</head>
      
<body>
    <main>
        <center>
            <p class="signup" >Cher Etudiant veuillez remplir toute information necessaire</p>
           
            <table width=40%   background="images/bg1.jpg">

            <form classe="signup" action="include/signup-inc.php" method="POST" > 
            <tr><td> <p class="nom">Nom :</p></td><td>  <input type="text" name ="Name" required> </td> </tr>
            <tr><td> <p class="nom">Prénom :</p></td><td>  <input type="text" name ="lastName"  required></td> </tr>
            <tr><td> <p class="nom">CNE :</p> </td><td>  <input type="text" name ="CNE"  required>  </td> </tr>
            <tr><td> <p class="nom">Email:</p></td><td>  <input type="text" name ="email"  required> </td> </tr>
            <tr><td> <p class="nom">Mot de passe :</p></td><td>  <input type="password" name ="password" required> </td> </tr>
            <tr><td> <p class="nom">Mot de passe repete :</p></td><td>  <input type="password" name ="password-repeat"  required></td> </tr>
            <tr><td> <p class="nom">Niveau d'étude :</p></td><td>  <select name="op" > 
                <option value="">AP1 </option>
                <option value="">AP2 </option>
                <option value="">GINF </option>
                <option value="">GIND </option>
                <option value="">GSTR </option>
                <option value="">GSEA </option>
                <option value="">G3EI </option>
                <option value="">MASTER </option>
    </select>
            </td> </tr>   
              
            <tr><td>  <input class="signup"  type="submit" name="signup-botton" value="Signup"></td>
               
            </form>
            <form classe="signup" action="index.php" method="POST" value="Back">
              <td>  <input class="signup"  type="submit" name="back-botton" value="Annuler"></td>
            </form>
            </table>
           
           
           
           <?php
                
                if (isset($_GET['error']))
                {
                    if ($_GET['error'] == "emptyfields")
                    {
                        echo '<h5 classe="signuperror">Vous Devez Remplire Tout Les Champs!</h5>';
                    }
                    else if ($_GET['error']="invalideMail")
                    {
                        
                        echo '<h5 classe="signuperror">Vous Devez Entrer Un Email Juste!</h5>';
                    }
                    else if ($_GET['error']="invalideMail&Name")
                    {
                        echo '<h5 classe="signuperror">Vous Devez Entrer Un Email Juste Ou Un Nom Juste!</h5>';
                    }
                    else if ($_GET['error']="invalideName")
                    {
                        echo '<h5 classe="signuperror">Vous Devez Entrer Nom Juste!</h5>';
                    }
                    else if ($_GET['error']="passwordCheck")
                    {
                        echo '<h5 classe="signuperror">Les Deuc Mots De Passe Ne Sont Pas Egaux!</h5>';
                    }
                    else if ($_GET['error']="CNE%20taken")
                    {
                        echo '<h5 Ce CNE Est Deja Existant!</h5>';
                    }
                    
                }
            ?>
           

        </center>
        
    </main>
</body>
</html>