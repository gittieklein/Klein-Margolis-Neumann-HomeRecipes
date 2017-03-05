<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Content | HomeRecipes</title>
        <?php include 'header.php'; ?>
    </head>
    <body>
        <?php
            
                if($_SESSION['LoggedIn'] == TRUE)
                {?>
                     <p id="hello"> Hello  . $_COOKIE['firstname'] . '!';</p>
                <?php }
                else 
                {
                    echo 'You are not logged in.';
                    echo '<br>Login <a href ="Login.php">here</a>.';
                }
            
            //include the footer in the file without rewriting code
            include 'Footer.html';
        ?>
    </body>
</html>
