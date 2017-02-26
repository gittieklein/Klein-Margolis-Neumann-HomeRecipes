
<!DOCTYPE html>
<html>
    <header>
        <title>Administrator Login | HomeRecipes</title>
    </header>
    <body>
        <?php
           
        $adminEmail="homerecipes123@gmail.com";
        $adminPassword="adminpsswrd";
            
          
                if($_POST['admemail'] == $adminEmail
                                && $_POST['admpassword']==$adminPassword)
                {
                    header("Location: Administrator.php");
                }
            
               
                  else
                   {
                       
                        header("Location: AdministratorError.php");
                   }
        ?>          
       
     
    </body>
</html>