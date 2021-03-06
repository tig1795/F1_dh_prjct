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
                <a href="test2.0.php">
                    <img src="../../images/F1_Logo.png" alt="logo" class="logo">
                </a>
            </div>
        </div>
    </header>
<br>

<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=f1', 'root', '');
//Die PHP Data Objects-Erweiterung (PDO) stellt eine leichte, konsistente Schnittstelle bereit, um mit PHP auf Datenbanken zuzugreifen. 
//Jeder Datenbanktreiber, der die PDO-Schnittstelle implementiert, kann spezifische Features als reguläre Funktionen der Erweiterung bereitstellen. 

if(isset($_GET['login'])) {  //Zuerst wird die Datenbank nach der entsprechenden E-Mail-Adresse abgefragt. 
                             //Sollte kein Benutzer gefunden worden sein, so hat der $user den Wert false.
    
    $email = $_POST['email'];
    $passwort =$_POST['passwort'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    if ($user !== false && password_verify($passwort, $user['passwort'])) {  //Überprüft, ob ein Passwort und ein Hash zusammenpassen.

        $_SESSION['userid'] = $user['id'];
    //Sollte ein Nutzer gefunden worden sein und sollte zusätzlich das Passwort stimmen, 
    //wird die Session-Variable userid mit der ID des Benutzers registrieren.
    echo'Login erfolgreich.';

    header("refresh:1.0; url=logged_in/test3.0.php");
        
    }else{
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}
?>

<?php

if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="post">
E-Mail:<br>
<br>
<input type="email" size="40" maxlength="250" name="email"><br>
<br>
 
Dein Passwort:<br>
<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
<br>
 
<br>
<input type="submit" value="Abschicken"><br>
<br>

<p>Sie haben noch kein Konto? <a href="register.php">Hier registrieren</a>.</p>
</form>
</body>
</html>