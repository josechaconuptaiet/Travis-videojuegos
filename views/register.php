<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear una cuenta</title>
    <link rel="shortcut icon" href="../static/assets/imgs/joystick.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/signup-signin.css">
</head>

<body>
    <!-- Head -->
    <header>
        <nav class="navbar">
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
        </nav>
    </header>
    <!--Body-->
    <div class="form-section">
        <div class="form-container">
            <div class="form-content margin">
                <h1>Bienvenido a Travis videojuegos</h1>
                <p>Ya tienes cuenta? <a href="./login.php">Iniciar sesion</a></p>
                <div class="form">
                    <form action="../controllers/register-controller.php" method="post">
                        <div class="input">
                            <label for="username">Usuario</label>
                            <input type="text" name="username" id="" required>
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="" required>
                        </div>
                        <div class="input">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="" required>
                        </div>
                        <div class="input">
                            <label for="cpassword">Confirmar contraseña</label>
                            <input type="password" name="cpassword" id="" required>
                            <ul>
                                <li>Un caracter en mayusculas</li>
                                <li>Usa 2 o mas caracteres</li>
                                <li>Un caracter especial</li>
                                <li>Un caracter en minusculas</li>
                                <li>Un numero</li>
                            </ul>
                        </div>
                        <button type="submit" class="button submit">REGISTRATE</button>
                        <p>Ya tienes cuenta? <a href="./login.php">Iniciar sesion</a></p>
                    </form>
                </div>
            </div>
        </div>
        <div class="form-img">
            <img src="../static/assets/imgs/login.webp" alt="">
        </div>
    </div>
</body>

</html>