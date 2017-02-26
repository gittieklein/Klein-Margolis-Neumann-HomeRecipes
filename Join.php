
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
            <form action ="JoinForm.php" method="post">
                <h1>Create An Account</h1>
                <br>
                <input type="text" name="firstname" placeholder='First Name' required/>
                <br>
                <input type="text" name="lastname" placeholder='Last Name'required/>
                <br>
                <input type="text" name="email" placeholder='Email'required/> 
                <br>
                <input type="password" name="password1" placeholder='Password'required/>
                <br>
                <input type="password" name="password2" placeholder='Confirm Password'required/>
                <br><br>
                <input type="SUBMIT" name="button" value="Join">
                <br><br>
                <p>Already have an account? <a href='Login.php'>Login</a></p>
            </form>
        </div> 
        
      
         <!--display an error assigned to a session variable if an the email has an existing account.-->
       
            <?php if(!empty($_SESSION['RegisterEmailError'])) 
                {
                echo $_SESSION['RegisterEmailError'];
                } 
                ?>
        
        <!--clear the error session after the message is displayed.-->
            <?php unset($_SESSION['RegisterEmailError']); ?>
        
        
          <!--display an error assigned to a session variable if an the passwords don't match.-->
         
            <?php if(!empty($_SESSION['RegisterPasswordError'])) { echo $_SESSION['RegisterPasswordError']; } ?>
        
        <!--clear the error session after the message is displayed.-->
            <?php unset($_SESSION['RegisterPasswordError']); ?>
        
        <!--display an error assigned to a session variable if a field was left out.-->
        
          
        
        <!--clear the error session after the message is displayed.-->
            <?php unset($_SESSION['RegisterEmailError']); ?>
        
        <br><br><br>
        <?php
            //include the footer in the file without rewriting code
            include 'Footer.php';
        ?>
    </body>
</html>