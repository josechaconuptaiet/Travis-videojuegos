<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./static/assets/imgs/joystick.png" type="image/x-icon">
    <title>Travis Videojuegos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./static/css/style.css">
    <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <!-- Head -->
    <header class="index-header">
        <nav class="navbar">
            <div class="navbar-brand">
                <h3>TRAVIS</h3>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./views/aboutus.php">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./views/catalogo.php">Juegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./views/chat.php">Social</a>
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
                    <a class="nav-link" href="./views/login.php">Iniciar sesion</a>
                </div>
            <?php
            }
            ?>

        </nav>
        <div class="index-header-container">
            <div class="index-title-container">
                <h1><span>TRAVIS</span><br />VIDEOJUEGOS</h1>
                <button type="button" class="button"><a href="./views/aboutus.php">Conocenos</a><i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="widget-container">
                <div class="widget">
                    <h5>PlayStation5</h5>
                    <p>Innovación y potencia en el gaming de nueva generación.</p>
                </div>
                <div class="widget">
                    <h5>PlayStation4</h5>
                    <p>Entretenimiento y juegos en alta definición para todos.</p>
                </div>
            </div>
        </div>

        <div class="section-arrow">
            <a href="#juega"><i class="fa-solid fa-arrow-down"></i></a>
        </div>
    </header>
    <!-- Section One -->
    <section id="juega">
        <div class="section-title">
            <h4>CATALOGO</h4>
            <h2>Juega</h2>
            <h5>Descubre los juegos que tenemos disponibles</h5>
        </div>
        <div class="section-content">
            <div class="play-time">
                <div class="play-content">
                    <h3>Play Time</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque, explicabo placeat similique laudantium distinctio magnam ipsum esse quo perspiciatis voluptas quia adipisci minus id numquam eius necessitatibus tempore cupiditate?</p>
                    <button type="button" class="button" ><a href="./views/catalogo.php">Ver catalogo </a><i class="fa-solid fa-arrow-right"></i></button>
                </div>
                <div class="play-image">
                    <img src="./static/assets/imgs/Play-time.webp" alt="">
                </div>
            </div>
            <div class="games">
                <div class="games-element">
                    <div class="games-image">
                        <a href="./static/pages/fortnite.html">
                            <img src="./static/assets/imgs/Fortnite.webp" alt="">
                        </a>
                    </div>
                    <div class="games-content">
                        <h4>Fortnite</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque, explicabo placeat similique laudantium distinctio magnam ipsum esse quo perspiciatis voluptas quia adipisci minus id numquam eius necessitatibus tempore cupiditate?</p>
                    </div>
                </div>
                <div class="games-element">
                    <div class="games-image">
                        <a href="./static/pages/fc24.html">
                            <img src="./static/assets/imgs/Fc24.webp" alt="">
                        </a>
                    </div>
                    <div class="games-content">
                        <h4>FC24</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque, explicabo placeat similique laudantium distinctio magnam ipsum esse quo perspiciatis voluptas quia adipisci minus id numquam eius necessitatibus tempore cupiditate?</p>
                    </div>
                </div>
                <div class="games-element">
                    <div class="games-image">
                        <img src="./static/assets/imgs/hogwarts-legacy.webp" alt="">
                    </div>
                    <div class="games-content">
                        <h4>Hogwarts Legacy</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque, explicabo placeat similique laudantium distinctio magnam ipsum esse quo perspiciatis voluptas quia adipisci minus id numquam eius necessitatibus tempore cupiditate?</p>
                    </div>
                </div>
                <div class="games-element">
                    <div class="games-image">
                        <img src="./static/assets/imgs/Reddead.webp" alt="">
                    </div>
                    <div class="games-content">
                        <h4>Read Dead Redemption 2</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis eaque, explicabo placeat similique laudantium distinctio magnam ipsum esse quo perspiciatis voluptas quia adipisci minus id numquam eius necessitatibus tempore cupiditate?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Two -->
    <section>
        <div class="section-title">
            <h4>UBICACION</h4>
            <h2>Donde nos ubicamos</h2>
            <h5>Descubre los juegos que tenemos disponibles</h5>
        </div>
        <div class="section-content">
            <div class="map">
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <h5>UPTAIET</h5>
                <p>Universidad Politecnica Territorial del Estado Tachira - Proyecto sociotecnologico <br /> de
                    informatica
                    Trayecto I</p>
            </div>
            <hr>
            <div class="footer-links">
                <P>@ 2024 | All rights reserved.</P>
                <ul class="footer-nav">
                    <li class="footer-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="footer-item">
                        <a class="nav-link" href="#">Quienes somos</a>
                    </li>
                    <li class="footer-item">
                        <a class="nav-link" href="#">Catalogo</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="./static/js/smooth-scroll.js"></script>
</body>

</html>