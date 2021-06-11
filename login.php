<?php 
include('config.inc.php'); 
include('connexion.inc.php');


if(!empty($_POST)):

    $query = 'SELECT `email`, `password` FROM  `user` where `email` = "'.$_POST['email'].'" AND `password`="'.$_POST["password"].'"';

    if($result = $mysqli->query($query)) :
        $rows_count_value = mysqli_num_rows($result);
        if ($rows_count_value > 0 ) {
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
            $_SESSION['email'] = $_POST['email'];
            header("location:index.php");
            // $id_categorie= $mysqli->insert_id;
            
        }else{
            echo 'HELLO';
        }
        endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method='POST'>
        <div class='champ'>
            <input type="text" name='email' id='email'  placeholder='Email' required>
            <input type="password" name='password' id='password'  placeholder='Password' required>
            <input type="submit" name='register' value='Register' class='btnSubmit'>
        </div>
    </form>

    <!-- <a href="index-admin-categories.php" title="retour">retour</a> -->
</body>
</html>
