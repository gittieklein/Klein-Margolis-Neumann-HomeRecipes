<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Email | HomeRecipes</title>
    </head>
        <body>
            <?php

            
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['reason'];
                $body = $_POST['detail'];

                $email_message = "Name: " . $name . "\nEmail: " . $email . "\n\nMessage:\n" . $body;

                mail('homerecipes123@gmail.com', $subject, $email_message, "From:" . $email);
                
                header('Location: emailconfirm.php');
            ?>
    </body>
</html>

