
        <meta charset="UTF-8">
        <!--attach the css file-->
        <link rel="stylesheet" href="Recipes.css">
        <title>Home | HomeRecipe</title>

        <?php
            //include the menu (really the menu will be included in the header)
            include 'header.php';
        ?>
        
    </head>
    <body>
        <!--there will be a checkerboard of imgs and texts that are links to different
        types of recipes-->
        <a href="Mains.php">
            <div id="mains">
                <p>MAINS</P>
                <div id='mainslide'>
                    <?php include 'mainslider.php'; ?>
                </div>
            </div>
        </a>
        <a href="Salads.php">
            <div id="salads">
                <p>SALADS</P>
                <div id='saladslide'>
                    <?php include 'saladslider.php'; ?>
                </div>
            </div>
        </a>
        <a href="Soups.php">
            <div id="soups">
                <p>SOUPS</p>
                <div id='soupslide'>
                    <?php include 'soupslider.php'; ?>
                </div>
            </div>
        </a>
        <a href="Sides.php">
            <div id="sides">
                <p>SIDES</p>
                <div id='sideslide'>
                    <?php include 'sideslider.php'; ?>
                </div>
            </div>    
        </a>
        <a href="Desserts.php">
            <div id="desserts">
                <p>DESSERTS</p>
                <div id='dessertslide'>
                    <?php include 'dessertslider.php'; ?>
                </div>
            </div>
        </a>
        <?php
            //include the footer in the file without rewriting code
            include 'Footer.php';
        ?>