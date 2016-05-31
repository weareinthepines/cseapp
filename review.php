<?php
 session_start();
 require_once 'Mail.php';
 $wgSMTP = array(
    'host' => 'tls://smtp.sendgrid.net',
    'IDHost' => 'heroku.com',
    'port' => 587,
    'username' => getenv("SENDGRID_USERNAME"), 
    'password' => getenv("SENDGRID_PASSWORD"),
    'auth' => true
 );
?>
<?php
    if ($_POST){
        $_SESSION['equipment'] = $_POST['equipment'];
        echo 'Thank you, '.$_SESSION['full_name'].'. You requested the following equipment:'.$_SESSION['equipment'].' for the project: '.$_SESSION['project'].''; 
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
    <body style="text-align: center" style="margin: 10%">
<form action="" method="post">
    <input type="submit" value="Submit Equipment Request" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php
if(isset($_POST['button_pressed']))
{
    $to      = 'thomaswenglish@gmail.com';
    $subject = 'Equipment Request';
    $message = 'TESTING';

    mail($to, $subject, $message);

    echo 'Email Sent.';
}

?>
            </body>
</html> 
<?php
    }
?>
