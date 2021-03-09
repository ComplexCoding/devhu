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
    <link rel="stylesheet" href="files/team.css">
    <link rel="icon" type="image/png" href="files/img/fav.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevHub Website</title>
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
                <a class="nav-link" href="privatebots.php">Unsere Bots</a>
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
    <div class="banner">
        <h2>Willkommen im Teambereich</h3>
        <h4>Hier findest du wichtige Teaminformationen!</h5>
    </div>

    <div class="container">
        <div id="description">
            <div>
                <span>
                    <p></p>
                </span>
            </div>
            <div class="desc">
                <i class="fa fa-user fa-4x desc1" style="color: white;"></i>
                <span>
                    <h3>Teambesprechung</h3>
                    <p>Das Datum für die nächste Teambesprechung steht noch nicht fets.</p>
                </span>
            </div>
            <div>
              <span>
                  <p></p>
              </span>
          </div>
            </div>
        </div>
    </div>


    <div class="bannera">
      <h2>Die Neusten Internes Update und Änderungen:</h2>
      <br></br>
      <h4>[+] Neues Website Design</h4>
      <br></br>
      <br></br>
      
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>
</html>



