<!DOCTYPE html>
<html>
    <head>
        <?php
            //include the menu (really the menu will be included in the header)
            include 'header.php';
            if($_SESSION['LoggedIn']==FALSE)
            {
                header("Location:Login.php");
            }
        ?>  
        <title>Submit Recipe | HomeRecipes</title>
    </head>
    <body>
        
        <div class="submitRecipe">   
            <h1>Submit Recipe</h1>
            <form action="Add.php" method="POST">
                <br>
                Recipe Title:<br>
                <input class="recipetitle" type="text" name="recipeTitle" value="" required/>
                <br>
                <br>
                Choose food course:
                <br>
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

                    $dbquery = 'SELECT * FROM courses';

                    $dbresult = mysql_query ($dbquery, $my_connection);

                    if ($dbresult == false)
                    {
                            die  ("Unable to perform query<br>");
                    }
           
                   //show list box
                   echo "<select name='course'>"; 
                   while ($dbrow = mysql_fetch_array($dbresult, MYSQL_ASSOC))
                           {
                               echo "<option value=$dbrow[courses]>$dbrow[courses]";
                               //options are added by looping through array
                           }
                   echo "</select>";//close list box
                ?>
            
                <br><br>
                Prep time: 
                <input type="text" name="prepTime" value=""/>
                <br><br>
                Cook time: 
                <input type="text" name="cookTime" value=""/>
                <br><br>
                <textarea name="ingredients" rows="12" cols="50" placeholder="Type the ingredients here, each on its own line." required></textarea>
                <br><br>
                <textarea rows="12" cols="50" placeholder="Type the instructions here, each on its own line." name="instructions" required></textarea>
                <br><br>
                Difficulty:
                <br>
                <?php
                    $dbquery = "SELECT * FROM difficulties";
                    $dbresult = mysql_query ($dbquery, $my_connection);         //show list box
                    echo "<select name='difficulty'>";
                    while ($dbrow = mysql_fetch_array($dbresult, MYSQL_ASSOC))
                    {
                        echo "<option value=$dbrow[difficulty]> $dbrow[difficulty]";
                        //options are added by looping through array
                    }
                    echo "</select>";//close list box
                ?>
             
                <br>    
                <br>
                <input class="submitRecipeButton" type="submit" name="submit_button" value="Submit your recipe!" required/>  
            </form>
        </div>

        <?php
            //include the footer in the file without rewriting code
            include 'Footer.php';
        ?>
    </body>
</html>