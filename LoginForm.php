<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Login | HomeRecipes</title>
    </header>
    <body>
        <?php
            $my_connection = mysql_connect('localhost', 'root', 'gittie');
            
            if(!$my_connection)
            {
                die("Unable to connect to MySQL Database<br>");
            }
            
            $my_db = mysql_select_db('homerecipes');
            
            if(!$my_db)
            {
                die ("Unable to Select MySQL Database<br>");
            }
            
            $dbquery = 'SELECT * FROM userinfo';

            $dbresult = mysql_query ($dbquery, $my_connection);

            if ($dbresult == false)
            {
                    die  ("Unable to perform query<br>");
            }
            
            $flag = FALSE;
            
            while ($dbrow = mysql_fetch_array($dbresult, MYSQL_ASSOC))
            {      
                if($dbrow['email'] == $_POST['email'] 
                                && $dbrow['password'] == $_POST['password'])
                {
                    $flag = TRUE;
                    $_SESSION['WelcomeUser']='<div style="color:#a91f23; text-align:right; font-family:Calibri; font-size:20px; position:absolute; margin-top:153px; margin-left:-200px">Welcome '.ucwords($dbrow["firstname"])."!".'</div>';
                    $_SESSION['name'] = $dbrow['firstname'] . " " . $dbrow['lastname'];
                    setCookie('email', $_POST['email']);
                    $_SESSION['LoggedIn'] = TRUE;
                    break;
                }
            }
               
            if(!$flag)
            {
                $_SESSION['LoggedIn'] = FALSE;
                //assign an error message to a session and redirect to the login page.
                $_SESSION['LoginError']='<p style="color: red; text-align: center; font-size: 12px; margin-top: 20px">*Invalid email or password</p>';
                header("Location: Login.php");
            }
        ?>          
       
        <?php
            //if it successfully logged in, then go back to the home page
            if ($flag)
            {
                header("Location: index.php");
            }
         
        ?>
    </body>
</html>