<?php
 session_start();
?>
<?php
    if ($_POST){
        $_SESSION['full_name'] = $_POST['full_name'];
        $_SESSION['email_address'] = $_POST['email_address'];
        echo 'Hello '.$_SESSION['full_name'].', please select the project you are working on:';  

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <style>
            body {
                text-align: center;
                margin: 10%;
            }
</style>
    </head>
   <body style="text-align: center" style="margin: 10%">
        <form action="equipment.php" method="post">
        <input type="checkbox" name="project" value="Fed Ex - South Brunswick, NJ">Fed Ex - South Brunswick, NJ<br>
        <input type="checkbox" name="project" value="St. Francis Hospital - Hartford, CT"> St. Francis Hospital - Hartford, CT <br> 
        <input type="submit" value="Continue to Equipment">
        </form>
    </body>
</html>
<?php
    }
?>
