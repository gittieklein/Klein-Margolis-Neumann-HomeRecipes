
    <meta charset="UTF-8">
    <!--attach the css file-->
    <link rel="stylesheet" href="Recipes.css">
    <title>Contact Us | HomeRecipe</title>

    <?php include 'header.php'; ?>

</head>
<body>
    <form action="emailsent.php" method="post">
        <div id="contact">
            <h1>Contact Us</h1>
            <br>
            Name: <br><input type="text" name="name" value="" required/><br><br>
            Email: <br><input type="text" name="email" value="" required/><br><br>
            Reason for contacting us: <br><input type="text" name="reason" value="" required/><br><br>
            Detail you request: <br><textarea type="text" name="detail" value="" required></textarea><br><br>
            <input type="submit" name="submit_button" value="Send Email"/>
        </div>
    </form>
    


   <?php include 'Footer.html'; ?>