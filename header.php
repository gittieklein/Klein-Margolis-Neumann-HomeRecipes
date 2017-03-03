
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!--attach the css file-->
        <link rel="stylesheet" href="Recipes.css">
        <!--Logo that is connected to a link to the website's homepage-->
        
        <?php
        if(!empty($_SESSION['LoggedIn']))
        {
        if($_SESSION['LoggedIn'] ==TRUE)
        {
            echo $_SESSION['WelcomeUser'];
        }
        }
        ?>
        
        <div id="logo">
            <a href="index.php">
            <img src="homerecipes.png"/>
            </a>
        </div>
    
        <!--This is a search that will eventually be connected to the webpages in our website.-->
		
        <input id="search" type="text" name="search" placeholder="Search..">
        <input id="submit" type="submit" value="search" class="tfbutton">
      
        <!--The menu is included into the header of each webpage-->
        <?php
            include 'menu.php';  
        ?>
        
    
        <!--This generates a space beneath the header and the body of each webpage-->
        <div id="menuspace"></div>