<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Recipe</title>
    </head>
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
                
                $recipeTitle = $_POST['recipeTitle'];
                $course = $_POST['course'];
                $prepTime = $_POST['prepTime'];
                $cookTime = $_POST['cookTime'];
                $ingredients = $_POST['ingredients'];
                $instructions = $_POST['instructions'];
                $difficulty = $_POST['difficulty'];
                $submit = $_SESSION['name'];
                
                /*Add recipe to table*/
                $dbquery = "INSERT INTO recipes VALUES('$recipeTitle','$course', '$prepTime', '$cookTime',
                        '$ingredients', '$instructions', '$difficulty', '$submit')";
                
                $dbresult = mysql_query($dbquery, $my_connection);
                
                if ($dbresult == false)
                {
                    die ("Unable to record recipe.<br>");
                }
                
                header("Location: thankyou.php");
                
            ?>

    </body>
</html>