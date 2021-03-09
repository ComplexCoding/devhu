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
    
    <link rel="stylesheet" href="files/teamlinks.css">
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

    <div class=page>
      <img class=pic src="files/img/icon.png" alt="Picture" width="500" height="600">
      <p class="text">Private-Links</p>
      <div class="butons">
        <div>
          <br id="abc" class=br></br>
        </div>
        <div>
          <a href="http://git.dev-hub.tk:8080"><button id="abc" class="button1">Unser Git</button></a>
        </div>
        <div>
          <a href="https://discord.gg/2GH2hBQQKh"><button id="abc" class="button2">Unser Discord</button></a>
        </div>
        <div>
          <a href="https://www.instagram.com/devhub_network/"><button id="abc" class="button3">Unser Instagram</button></a>
        </div>
          <br></br>
          <br></br>
          <br></br>
        <div>
          <a href="https://www.youtube.com/channel/UCYs_CT6Xc-TfxAiWg4-RYOA?guided_help_flow=5"><button id="def" class="button4">Unser Youtube</button></a>
        </div>
        <div>
          <a href="https://github.com/MaxiPy"><button id="def" class="button5">Unser GitHub</button></a>
        </div>
        <div>
          <a href="https://host-unlimited.de/"><button id="def" class="button6">Unser Hoster</button></a>
        </div>
          <br></br>
          <br></br>
          <br></br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</html>
