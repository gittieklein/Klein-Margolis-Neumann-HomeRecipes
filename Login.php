
<!DOCTYPE html>

<html>
    <head>
        <title>Login | Home Recipes</title>
        <?php
            //include the menu (really the menu will be included in the header)
            include 'header.php';
        ?>
        
    </head>
    <body>
       
        
        
        <br><br><br>
        <div class="sign">
            <form action="LoginForm.php" method="post">
                <input type="hidden" name="redirect" value="index.php">
                <h1>Login</h1>
                <br>
                <input type="text" name="email" placeholder="Email" required/>
                <br>
                <input type="password" name="password" placeholder="Password" required/>
                <br><br>
                <input type="SUBMIT" name="button" value="Sign In">
                
                <br><br>
                <p>Don't have an account? <a href='Join.php'>Join Free</a></p>
                <p>Want to login as an administrator? <a href='AdministratorLogin.php'>Login Here</a></p>
            </form>
        </div>
        
         <!--display an error assigned to a session variable if login is incorrect.-->
        
            <?php if(!empty($_SESSION['LoginError']))
                { 
                    echo $_SESSION['LoginError'];
                }
                ?>
    
        <!--clear the error session after the message is displayed.-->
        
        <?php unset($_SESSION['LoginError']); ?>
            <br><br><br>
        <?php
            //include the footer in the file without rewriting code
            include 'Footer.php';
        ?>
    </body>
</html>
