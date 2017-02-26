<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <header>
        <title>Join | HomeRecipes</title>
    </header>
    <body>
        <?php
            $my_connection = mysql_connect('localhost', 'root', 'gittie');
            
            if(!$my_connection)
            {
                die("Unable to connect to MySQL Database<br>");
            }
            
            $my_db = mysql_select_db('HomeRecipes');
            
            if(!$my_db)
            {
                die ("Unable to Select MySQL Database<br>");
            }
            
            $dbquery = "SELECT * FROM userinfo";
            $dbresult = mysql_query ($dbquery, $my_connection);
            
            $valid=TRUE; //to validate that the count does not exist.
            while ($dbrow = mysql_fetch_array($dbresult, MYSQL_ASSOC))
            {      
                if($dbrow['email'] == $_POST['email'])
                {
                    $valid=FALSE;
                    header("Location:Join.php");
                     $_SESSION['RegisterEmailError']='<p style="color: red; text-align: center; font-size: 12px; margin-top: 20px">*Account with email already exists</p>';
                }
            }
            
            if ($_POST['password1'] == $_POST['password2'])
            {
                $first = $_POST['firstname'];
                $last =  $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password1'];
                $usertype = "0";
                date_default_timezone_set("America/New_York");
                $date = date('Y-m-d h:i:sa');
            
                $dbquery = "INSERT INTO userinfo VALUES ('$first', '$last', '$email', '$password', '$usertype', '$date')";
                $dbresult = mysql_query ($dbquery, $my_connection);
                
                //log the user in.
                $_SESSION['LoggedIn'] = TRUE;
                               
                $_SESSION['name'] = $_POST['firstname'] . " ". $_POST['lastname'];

                if (!$dbresult)
                {
                        die  ("Unable to create account<br>");
                }
            }
            else
            {
                //if the account was unsuccessful until now it means the confirmed password did not match.
              
                header("Location:Join.php");
                $_SESSION['RegisterPasswordError']='<p style="color: red; text-align: center; font-size: 12px; margin-top: 20px">*Passwords do not match</p>';
            }
            
            //if an account was successfully made then go to the home page
            if ( $valid==TRUE)
            {
                $_SESSION['WelcomeUser']='<div style="color:#a91f23; text-align:right; font-family:Calibri; font-size:20px; position:absolute; margin-top:153px; margin-left:-200px">Welcome '.ucwords($first)."!".'</div>';
                header("Location: index.php");
            }
        ?>
    </body>
</html>