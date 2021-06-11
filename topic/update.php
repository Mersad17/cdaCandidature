<?php

include('../config.inc.php'); 
include('../connexion.inc.php');
include('../header.php');

if(!empty($_POST['id_topic'])
AND !empty($_POST['title'])) {

    $query = 'UPDATE topic SET
                    title = "'.$_POST['title'].'"
                    WHERE id = "'.$_POST['id_topic'].'"
                    ';
                    if ($result = $mysqli->query($query)) {
      header("location:createTopic.php");
  

   }                 
}
if(!empty($_POST['id_topic'])) {
    $query = 'SELECT * FROM topic WHERE id = '.$_POST['id_topic'];


    if ($result = $mysqli->query($query)) {
         $update = $result->fetch_assoc();

    }
    else {
        echo 'Error';
    }
}


?>

<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update topic</title>
</head>
<body>
<h1>Update topic</h1>

<div class="create"> 
    <form action="update.php" method="POST">
        <h3>
            <label for="title">Update title : </label>
            <input type="text" name='title' value="<?php if(!empty($update['title'])) echo $update['title'];?>" class='input'/>
        </h3>
        <a href="createTopic.php" title="back" >Back</i></a>    
        <input type="submit" value="submit" />
</div> 


<?php
if(!empty($update['id'])) {
    ?>
    <input type="hidden" name="id_topic" value="<?php if(!empty($update['id'])) echo $update['id'];?>">
<?php                                                             
}
?>



    </form>
</body>
</html>                               