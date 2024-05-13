<?php
include("../lib/db.php");
session_start();
$query = $db->query("SELECT *
FROM threads
JOIN users ON threads.User_id = users.User_id;
");
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
    <link rel="stylesheet" href="../static/css/chat.css">
    <link rel="stylesheet" href="../static/css/signup-signin.css">
    <!-- CDN Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

    <!-- Head -->
    <header>
        <nav class="navbar bg block">
            <div class="navbar-brand">
                <h3>TRAVIS</h3>
            </div>

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
    </header>
    <div class="lateral-nav">
        <ul class="navbar-nav colum">
            <a href="../index.php">
                <li class="lateral-item">
                    <i class="fa-sharp fa-solid fa-house"></i>
                    <p>Home</p>
                </li>
            </a>
            <a href="./aboutus.php">
                <li class="lateral-item">
                    <i class="fa-sharp fa-solid fa-circle-info"></i>
                    <p>Quienes somos</p>
                </li>
            </a>
            <a href="./catalogo.php">
                <li class="lateral-item">
                    <i class="fa-solid fa-puzzle-piece"></i>
                    <p>Juegos</p>
                </li>
            </a>
            <a href="./chat.php">
                <li class="lateral-item">
                    <i class="fa-sharp fa-regular fa-user"></i>
                    <p>Social</p>
                </li>
            </a>
        </ul>
        <hr>
        <?php
        if (isset($_SESSION["username"])) {
        ?>
            <div class="options">
                <div class="lateral-item" id="create-post">
                    <i class="fa-sharp fa-regular fa-plus"></i>
                    <p>Crear un nuevo post</p>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="options">
                <a href="./login.php">
                    <div class="lateral-item">
                        <i class="fa-sharp fa-regular fa-plus"></i>
                        <p>Inicia sesion para postear</p>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>

    </div>
    <!--Chat-->
    <div class="chat">

        <!--Publicacion-->
        <div class="post-container">
            <?php

            if ($query->num_rows > 0) {
                while ($data = $query->fetch_assoc()) {
                    $texto = substr($data["Text"], 0, 500);
                    $texto .= '...';
            ?>
                    <div class="post">
                        <div class="post-content">
                            <a href="./post.php?id=<?= $data["id"] ?>">
                                <div class="post-user">
                                    <div class="user">
                                        <img src="../static/assets/imgs/imagenes-de-perfil/profile-picture.png" alt="">
                                        <p><?= $data["username"] ?></p>
                                    </div>
                                </div>
                                <h5><?= $data["Title"] ?></h5>
                                <p><?= $texto ?></p>
                            </a>
                        </div>
                        <hr>
                    </div>

            <?php

                }
            }

            ?>
        </div>
    </div>
    <!--Modal-->
    <div class="post-modal hidden">
        <div class="post-modal-container">
            <div class="form-container">
                <div class="form-content">
                    <div class="modal-top">
                        <h5>Crea una nueva publicacion</h5>
                        <i class="fa-solid fa-xmark modal-close"></i>
                    </div>
                    <div class="form">
                        <form action="../controllers/chat-controller.php" method="post">
                            <div class="input">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" id="" required>
                            </div>
                            <div class="input">
                                <label for="description">Descripcion</label>
                                <textarea name="description" id=""></textarea>
                            </div>
                            <button type="submit" class="button submit">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="../static/js/vista-chat.js"></script>
    <script src="../static/js/postModal.js"></script>
</body>

</html>