<?php
session_start();
if(!isset($_SESSION['userid'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>

<html lang="de">

<head>
    <link rel="icon" type="image/png" href="files/img/fav.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DevHub - Official Website</title>
    
    <link rel="stylesheet" href="files/privatebots.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://use.fontawesome.com/30155533f0.js"></script>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="team.php">DevHub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="team.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="privatebots.php">Private Bots</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teamlinks.php">Links</a>
              </li>
              <li class="nav-item dropdown navbar-dark bg-dark">
                <a class="nav-link dropdown-toggle navbar-dark bg-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teambereich
                </a>
                <ul class="dropdown-menu navbar-dark bg-dark" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#" style="color: #9b9d8c;">Stats</a></li>
                  <li><a class="dropdown-item" href="logout.php" style="color: #9b9d8c;">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </nav>
<div class="flex-container">
      <abc class=bot1>
        <img class=pic1 src="files/img/icon.png" alt="Picture" width="500" height="600">
        <p class="bot">DevHub Bot</p>
        <h6 class="bot2">Der DevHub Bot ist unser Haupt Bot und hat viele Features wie z.B. ein Ticket System und noch mehr!</h6>
        <a href="https://discord.com/developers/applications/813800298182213702/information"><button id="def" class="button5">Zur Application</button></a>
      </abc>
      <div class="faq1">
        <img class=pic2 src="files/img/faq.jpg" alt="Picture" width="500" height="600">
        <p class="faq">FAQ Bot</p>
        <h6 class="faq2">Der FAQ Bot ist unsere frequently asked Questions Bot und du kannst ihr dir auf deinen Server holen!</h6>
        <a href="https://discord.com/developers/applications/814253525042593852/information"><button id="abc" class="button5">Zur Application</button></a>
      </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>  



