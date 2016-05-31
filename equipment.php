<?php
 session_start();
?>
<?php
    if ($_POST){
        $_SESSION['project'] = $_POST['project'];
        echo 'Please select the equipment you need at '.$_SESSION['project'].''; 
?>
<!DOCTYPE html>
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
   <body style="margin: 10%;">
        <form action="review.php" method="post">
        <input type="checkbox" name="equipment" value="hammer">Hammer<br>
        <input type="checkbox" name="equipment" value="nails"> Nails <br> 
        <input type="checkbox" name="equipment" value="screwdriver">Screwdriver<br>
        <input type="checkbox" name="equipment" value="wrench">Wrench<br> 

        <input type="submit" value="Continue to Review">
        </form>
    </body>
</html>
<?php
    }
?>