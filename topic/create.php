<?php 
include('../config.inc.php'); 
include('../connexion.inc.php');

session_start();


if(!empty($_POST)):

    $title=$_POST["title"];
$user=$_SESSION['id'];
 
 $result = $mysqli->query("INSERT INTO topic (title, user)
  VALUES ('$title', '$user')");
        header("location:createTopic.php");
        endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="create.php" method='POST'>
        <div class='champ'>
            <input type="text" name='title' id='title'  placeholder='Title' required>
            <input type="submit" name='AddTitle' value='Add Title' class='btnSubmit'>
        </div>
    </form>

    <!-- <a href="index-admin-categories.php" title="retour">retour</a> -->
</body>
</html>
