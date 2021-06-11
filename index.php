<?php
include('config.inc.php');
include('connexion.inc.php');
include('header.php');

session_start ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php
if (isset($_SESSION['email'])) {
    echo 'Hello '. $_SESSION['email'] , $_SESSION['id'];
    ?>
    <form action="logout.php">
    <button type="submit" >logout</button>
</form>



<?php

}else{
?>    
        <form action="login.php">
            <button type="submit" >Login</button>
        </form>
        <form action="register.php">
            <button type="submit" >Register</button>
        </form>

<?php    
}
?>
</body>
</html>