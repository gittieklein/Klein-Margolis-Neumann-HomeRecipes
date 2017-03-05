<!--attach the css file-->
        
        <link rel="stylesheet" href="Recipes.css">
        <title>Desserts | HomeRecipes</title>

        <?php include 'header.php'; ?>
        
    </head>
    <body>
        <h1 class="pgtitle">DESSERTS</h1><br><br>
        <?php
            header('Content-Type: text/html; charset=Windows-1252');
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

            $dbquery = 'SELECT * FROM recipes WHERE Course = "Dessert"';

            $dbresult = mysql_query ($dbquery, $my_connection);

            if ($dbresult == false)
            {
                    die  ("Unable to perform query<br>");
            }

            while ($dbrow = mysql_fetch_array($dbresult, MYSQL_ASSOC))
            {
        ?>
        <p class="recipetitle"><?php echo $dbrow['RecipeTitle'];?></p>
        <p><?php
                echo '<br>';
                echo 'Difficulty: ' . $dbrow['Difficulty'] . '<br>';
                if($dbrow['PrepTime'] != NULL)
                {
                    echo "Prep Time: " . $dbrow['PrepTime'] . '<br>'; 
                }
                if($dbrow['CookTime'] != NULL)
                {
                    echo "Cook Time: " . $dbrow['CookTime'] . '<br>'; 
                } 
                echo nl2br("<br>Ingredients:<br>" . $dbrow['Ingredients'] . '<br><br>');
                echo nl2br("Directions:<br>" . $dbrow['Instructions'] . '<br><br>');
                echo "Recipe Submitted By: " . $dbrow['Submitted'] . '<br><br><br>';
                echo '-------------------------------------------------------------------------'
                    . '------------------------------------------------------------------------'
                    . '------------------------------------------------------------------------'
                    . '-------<br><br><br>';
            }
        ?></p>
        
        <?php include 'Footer.html'; ?>