<?php
    include('../header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Topic</title>
</head>
<body>
<h1>Add a Topic</h1>
<?php
    include('create.php');


$query ="SELECT * FROM topic";

if ($result = $mysqli->query($query)) {
    while ($obj = $result->fetch_object()) {
      ?>
        <h2><?php echo $obj->title;?></h2>
                <form method='POST' action='update.php' >
                    <input type='hidden' value='<?php echo $obj->id;?>' name='id_topic' required>
                    <button type=submit value=update >Update</button>
                </form>
                <form method='POST' action='delete.php'>
                    <input type='hidden' value='<?php echo $obj->id;?>' name='id_topic'>
                    <button type=submit value=delete >Delete</i></button>
                </form>
        </div> 
    </div>
 <?php   }
}else echo 'je ne comprends pas votre requète';?>



    
</body>
</html>