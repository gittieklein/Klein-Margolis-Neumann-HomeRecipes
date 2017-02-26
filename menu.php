<!--This is a menu to include in the header-->
    <!--this will be a link for the user to login, or create an account-->
    <!--
        <a href = "Login.php">Join Free <span>|</span> Login </a></li>
    </div>-->
    <div class="login">
        <a href = "Join.php">Join Free</a><span> | </span>
        
      
        <?php
        //display a login option if the Session is logged out, or logout option if Session is logged in.
        if(!empty($_SESSION['LoggedIn']))
        {
             if($_SESSION['LoggedIn'] ==TRUE)
                {
        ?>
                 <a href="Logout.php">Logout</a>
         <?php
                }
        }
         else{
       ?>
             
        <a href = "Login.php">Login</a>
        <?php
             }
             ?>
       
    </div>
    </div>
     
<!--    These will be links for the user to find or submit recipes
    <ul id="horizontal-list">
        <li><a href = "Mains.php">Mains</a></li>
        <li><a href = "Salads.php">Salads</a></li>
        <li><a href = "Soups.php">Soups</a></li>
        <li><a href = "Sides.php">Sides</a></li>
        <li><a href = "Desserts.php">Desserts</a></li>
        <li><a href=  "Submit.php">Submit Recipe</a></li>  
    </ul>-->

<?php
    include 'jsmenu.php';
    ?>