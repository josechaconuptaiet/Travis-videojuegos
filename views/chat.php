<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../static/assets/imgs/joystick.png" type="image/x-icon">
    <title>Travis Videojuegos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/signup-signin.css">
</head>
<body>
    
<!-- Head -->
<header>
    <nav class="navbar bg">
        <div class="navbar-brand">
            <h3>TRAVIS</h3>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./aboutus.php">Quienes somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./catalogo.php">Juegos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./chat.php">Social</a>
            </li>
        </ul>
        <?php
        if (isset($_SESSION["username"])) {
        ?>
            <div class="session">
                <a class="nav-link" href="./controllers/logout-controller.php">Cerrar sesion</a>
            </div>
        <?php
        } else {
        ?>
            <div class="session">
                <a class="nav-link" href="./login.php">Iniciar sesion</a>
            </div>
        <?php
        }
        ?>
    </nav>
</header>
</body>
</html>