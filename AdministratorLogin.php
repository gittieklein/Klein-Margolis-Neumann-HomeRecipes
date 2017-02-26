
<!DOCTYPE html>

<html>
    <head>
        <title>Administrator Login | Home Recipes</title>
        <?php
            //include the menu (really the menu will be included in the header)
            include 'header.php';
        ?>
        
    </head>
    <body>
       
        
        
        <br><br><br>
        <div class="sign">
            <form action="AdministratorLoginForm.php" method="post">
                <input type="hidden" name="redirect" value="index.php">
                <h1>Administrator Login</h1>
                <br>
                <input type="text" name="admemail" placeholder="Email" required/>
                <br>
                <input type="password" name="admpassword" placeholder="Password" required/>
                <br><br>
                <input type="SUBMIT" name="button" value="Sign In">
                
              
            </form>
        </div>
        

            <br><br><br>
        <?php
            //include the footer in the file without rewriting code
            include 'Footer.php';
        ?>
    </body>
</html>
