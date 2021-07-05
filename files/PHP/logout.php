<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>    
  <link rel="stylesheet" href="../CSS/login.css" type="text/css">
</head> 
<body>
    <header>
        <div class="row">
            <div class="logo-row">
              <a href="../PHP/index.php">
               <img src="../../images/F1_Logo.png" alt="logo" class="logo">
              </a>
            </div>
        </div>
    </header>
    <br>
</body>
</html>

<?php
session_start();
session_destroy();  //Cookies und $_SESSION wird geleert.
 
echo "Logout erfolgreich. Zurück zur <a href= Home.php> Startseite.</a>";
?>