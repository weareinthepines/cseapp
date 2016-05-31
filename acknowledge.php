<?php
 session_start();
?>

<?php
if ($_POST){
         $to = 'tenglish@centerstarenergy.com'; // Use your own email address
         $subject = 'Equipment Request';
         $message = 'Thank you!';
         echo $message;
}
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
       <h1>Thank You</h1>
<p>Your message has been sent.</p>
<h1>Oops!</h1>
<p>Sorry, there was a problem sending your message.</p>

    </body>
</html>
<?php
    }
?>
