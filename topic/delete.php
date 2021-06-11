<?php

include('../config.inc.php'); 
include('../connexion.inc.php');

$id = $_POST['id_topic'];

$query = 'DELETE FROM topic WHERE id = '.$id;


if(!empty($id)) {

    if ($resultat = $mysqli->query($query)) {

        header('Location: createTopic.php');
        exit();

    }
    
}
else {
   echo 'attention, idCategorie est vide';
}

?>