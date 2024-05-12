<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../static/static/assets/imgs/joystick.png" type="image/x-icon">
    <title>Juegos</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
    <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                    <a class="nav-link" href="../controllers/logout-controller.php">Cerrar sesion</a>
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
        <div class="index-header-container bg-catalogo">
            <div class="index-title-container neon-border">
                <div>
                    <h1 class="
                    centro">
                        Juegos<br> disponibles
                    </h1>
                </div>
                <div class="index-img-container">
                    <img src="../static/assets/imgs/PS4.png">
                    <img src="../static/assets/imgs/PS5.png" alt="">
                </div>
            </div>
        </div>
        <div class="section-arrow">
            <a href="#PS5"><i class="fa-solid fa-arrow-down"></i></a>
        </div>
    </header>
    <!-- PS5 Section -->
    <section id="PS5">
        <div class="section-title">
            <h4>PlayStation 5</h4>
            <h2>Juegos de PlayStation 5</h2>
        </div>
        <div class="section-content">
            <div class="game">
                <img src="../static/assets/imgs/spiderman-2.webp" class="game-img" alt="">
                <div class="game-desc">
                    <div class="desc-image">
                        <img src="../static/assets/imgs/spiderman-2.webp" alt="">
                    </div>
                    <div class="game-desc-cont">
                        <h4>Spiderman 2</h4>
                        <p>Los Spider-Men Peter Parker y Miles Morales regresan para una nueva y emocionante aventura de
                            la aclamada franquicia Marvel's Spider-Man para PS5.</p>
                        <button type="button" class="button"><a href="./spiderman2.html">Ver detalles </a><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="game">
                <img src="../static/assets/imgs/Mortal-kombat.webp" class="game-img" alt="">
                <div class="game-desc">
                    <div class="game-desc-cont">
                        <h4>Mortal Kombat 11</h4>
                        <p>Entra en una nueva era de kombate con la 11.ª entrega de la emblemática serie de lucha y
                            desvela las consecuencias de las acciones de Raiden, que se remontan a los albores de la
                            violenta saga.</p>
                        <button type="button" class="button"><a href="./mortalkombat.html">Ver detalles </a><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    <div class="desc-image">
                        <img src="../static/assets/imgs/Mortal-kombat.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="slidder">
            <div class="wrapper">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <ul class="carousel">
                    <a href="./fortnite.html" class="card">
                        <img src="../static/assets/imgs/carousel/Fortnite.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Fortnite</h2>

                        </div>
                    </a>
                    <a href="./fc24.html" class="card">
                        <img src="../static/assets/imgs/carousel/FC24.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>FC24</h2>

                        </div>
                    </a>
                    <a href="./godofwar.html" class="card">
                        <img src="../static/assets/imgs/carousel/GodOfWar.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>God of war</h2>

                        </div>
                    </a>
                    <a href="./mortalkombat.html" class="card">
                        <img src="../static/assets/imgs/carousel/mortal kombat.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Mortal kombat</h2>

                        </div>
                    </a>
                    <a href="./warzone.html" class="card">
                        <img src="../static/assets/imgs/carousel/Call-of-duty-warzone.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Call of Duty Warzone</h2>

                        </div>
                    </a>
                    <a href="./crashbandicoot.html" class="card">
                        <img src="../static/assets/imgs/carousel/Crash.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Crash Bandicoot</h2>

                        </div>
                    </a>
                    <a href="./nba2k24.html" class="card">
                        <img src="../static/assets/imgs/carousel/NBA2K24.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>NBA2K24</h2>

                        </div>
                    </a>
                    <a href="./fallguys.html" class="card">
                        <img src="../static/assets/imgs//carousel/FallGuys.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Fall Guys</h2>

                        </div>
                    </a>
                    <a href="./spiderman.html" class="card">
                        <img src="../static/assets/imgs/carousel/Spiderman.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Spiderman</h2>

                        </div>
                    </a>
                    <a href="./blackops.html" class="card">
                        <img src="../static/assets/imgs/carousel/COD.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Call of Duty Black Ops</h2>

                        </div>
                    </a>
                    <a href="./needforspeed.html" class="card">
                        <img src="../static/assets/imgs/carousel/Need for Speed Heat.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Need For Speed</h2>

                        </div>
                    </a>
                    <a href="./injustice.html" class="card">
                        <img src="../static/assets/imgs/carousel/injustice.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Injustice</h2>

                        </div>
                    </a>
                    <a href="./spiderman2.html" class="card">
                        <img src="../static/assets/imgs/carousel/Spiderman2.webp" alt="img" draggable="false">
                        <div class="card-content">
                            <h2>Spiderman 2</h2>

                        </div>
                    </a>

                </ul>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
    </section>
    <!-- PS4 Section -->
    <section id="PS4">
        <div class="section-title">
            <h4>PlayStation 4</h4>
            <h2>Juegos de PlayStation 4</h2>
        </div>
        <div class="section-content">
            <div class="game">
                <img src="../static/assets/imgs/COD.webp" class="game-img top" alt="">
                <div class="game-desc">
                    <div class="game-desc-cont">
                        <h4>Call of Duty Cold War</h4>
                        <p>Black Ops Cold War pondrá a los fans en el corazón de la Guerra Fría y su volátil batalla
                            geopolítica a principio de los años 80. </p>

                        <button type="button" class="button"><a href="./blackops.html">Ver detalles </a><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                    <div class="desc-image ">
                        <img src="../static/assets/imgs/COD.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="game">
                <img src="../static/assets/imgs/god-of-war-ps4.webp" class="game-img" alt="">
                <div class="game-desc">
                    <div class="desc-image">
                        <img src="../static/assets/imgs/god-of-war-ps4.webp" alt="">
                    </div>
                    <div class="game-desc-cont">
                        <h4>God of war</h4>
                        <p>
                            Kratos vuelve a ser padre. Como mentor y protector de Atreus, un hijo decidido a ganarse su
                            respeto, se ve obligado a lidiar y controlar la rabia que lo ha definido durante mucho
                            tiempo mientras está en un mundo muy peligroso con su hijo. Con su venganza contra los dioses del Olimpo detrás de él, Kratos ahora vive en el reino de
                            las deidades y monstruos nórdicos.</p>
                        <button type="button" class="button"><a href="./godofwar.html">Ver detalles </a><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="../static/js/carousel.js"></script>
</body>

</html>