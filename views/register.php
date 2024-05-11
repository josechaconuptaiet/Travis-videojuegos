<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <a class="nav-link" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./quienessomos.html">Quienes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/catalogo.html">Juegos</a>
                </li>
            </ul>
        </nav>
    </header>
    <!--Body-->
    <div class="form-section">
        <div class="form-container">
            <div class="form-content">
                <h1>Bienvenido a Travis videojuegos</h1>
                <p>Ya tienes cuenta? <a href="">Iniciar sesion</a></p>
                <div class="form">
                    <form action="" method="post">
                        <div class="input">
                            <label for="username">Usuario</label>
                            <input type="text" name="username" id="">
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="input">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password" id="">
                            <ul>
                                <li>Un caracter en mayusculas</li>
                                <li>Usa 8 o mas caracteres</li>
                                <li>Un caracter especial</li>
                                <li>Un caracter en minusculas</li>
                                <li>Un numero</li>
                            </ul>
                        </div>
                        <button type="submit" class="button submit">REGISTRATE</button>
                        <p>Ya tienes cuenta? <a href="">Iniciar sesion</a></p>
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