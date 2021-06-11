<?php 
include('config.inc.php'); 
include('connexion.inc.php');
include('header.php');



if(!empty($_POST)):

    
    $query = 'INSERT INTO `user`(   `email`, `password`, `birthDate`) 
            VALUES (

                "'.$_POST['email'].'",
                 "'.$_POST['password'].'",
                 "'.$_POST['birthDate'].'"
            
                    )';

    if($result = $mysqli->query($query)) :
        session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['email'] = $_POST['email'];
        $lastid = mysqli_insert_id($mysqli);
		$_SESSION['id'] = $lastid;
        header("location:index.php");
        // $id_categorie= $mysqli->insert_id;
        
    endif;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register.php" method='POST'>
        <div class='champ'>
            <input type="text" name='email' id='email'  placeholder='Email' required>
            <input type="password" name='password' id='password'  placeholder='Password' required>
            <input type="date" name='birthDate' id='birthDate'  placeholder='Birthdate' required>

            <input type="submit" name='register' value='Register' class='btnSubmit'>
        </div>
    </form>

    <!-- <a href="index-admin-categories.php" title="retour">retour</a> -->
</body>
</html>
