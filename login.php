<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=test', 'ahjalul', 'EmRjca8zdwbs');
 
if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        header('Location: team.php');
        exit();
    } else {
        echo '<script type="text/javascript" language="Javascript"> 
        alert("Die Email Adresse oder das Passwort ist falsch!") 
        </script> ';
    }
}
?>
<!DOCTYPE html> 
<html> 
<head>
    <link href="files/login.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="files/img/fav.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
    <title>Login</title>    
</head> 

<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
<form action="?login=1" method="post">
    <div class="login">
        <h1>Login</h1>
        <p class=title>   Teambereich</p>
        <div class="email">
            <input type="email" name="email" placeholder="Email" id="username" required>
            <br></br>
            <br></br>
        </div>
        <div class="passwort">
		    <input type="password" name="passwort" placeholder="Passwort" id="passwort" required>
            <br></br>
        </div>
        <div class="button">
            <input type="submit" value="Login">
        </div>
	</div>
</form> 
</body>

</html>