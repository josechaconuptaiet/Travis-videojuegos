<?php
include("../lib/db.php");
session_start();
$id = $_GET['id'];
$query = $db->query("SELECT *
FROM threads 
JOIN users ON threads.User_id = users.User_id
WHERE id=$id;
");
$data = $query->fetch_assoc();


$comments = $db->query("SELECT *
FROM comments JOIN users ON comments.User_id = users.User_id
WHERE comments.thread_id = $id;
");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["Title"] ?></title>
    <link rel="shortcut icon" href="../static/assets/imgs/joystick.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/signup-signin.css">
    <link rel="stylesheet" href="../static/css/chat.css">
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
            ?>
                <div class="single-post">
                    <div class="single-post-content">
                        <div class="post-user">
                            <div class="user">
                                <i class="fa-solid fa-arrow-left back"></i>
                                <img src="../static/assets/imgs/imagenes-de-perfil/profile-picture.png" alt="">
                                <p><?= $data["username"] ?></p>
                            </div>
                            <?php
                            if (isset($_SESSION["username"])) {
                                if ($_SESSION["username"] === $data["username"]) {
                            ?>
                                    <a href="../controllers/chat-controller.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-xmark "></i></a>
                                <?php
                                } else {
                                ?>
                                    <div></div>
                            <?php
                                }
                            }
                            ?>

                        </div>
                        <h5><?= $data["Title"] ?></h5>
                        <p><?= $data["Text"] ?></p>
                    </div>
                    <?php
                    if (isset($_SESSION["username"])) {
                    ?>
                        <form action="../controllers/comment-controller.php?id=<?= $id ?>" method="post">
                            <div class="input comment-form">
                                <textarea name="comment" id="textarea" placeholder="Añadir comentario" required></textarea>
                                <div class="comment-form-options hidden">
                                    <i class="fa-solid fa-xmark close"></i>
                                    <button type="submit">Comentar</button>
                                </div>
                            </div>
                        </form>
                    <?php
                    } else {
                    ?>
                        <div class="warning">
                            <a href="./login.php">Inicia sesion para poder comentar</a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            <?php
            }
            ?>
            <!--Comentarios-->
            <div class="comments">
                <?php
                if ($comments->num_rows > 0) {
                    while ($data = $comments->fetch_assoc()) {
                        $comment_id = $data["id"];
                ?>
                        <div class="comment">
                            <div class="comment-content">
                                <div class="comment-user">
                                    <img src="../static/assets/imgs/imagenes-de-perfil/profile-picture.png" alt="">
                                    <p><?= $data["username"] ?></p>
                                    <?php
                                    if (isset($_SESSION["username"])) {
                                        if ($_SESSION["username"] === $data["username"]) {
                                    ?>
                                            <a href="../controllers/comment-controller.php?id=<?= $data['id'] ?>"><i class="fa-solid fa-xmark "></i></a>
                                        <?php
                                        } else {
                                        ?>
                                            <div></div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <p><?= $data["Text"] ?></p>
                            </div>
                            <div class="comment-options">
                                <button class="comment-answer" data-target="<?= $data["id"] ?>">
                                    <i class="fa-regular fa-comment"></i>
                                </button>
                                <?php
                                if (isset($_SESSION["username"])) {
                                ?>
                                    <button class="add-answer" data-target="<?= $data["id"] ?>">
                                        <i class="fa-sharp fa-regular fa-plus "></i>
                                    </button>
                                <?php
                                } 
                                ?>
                            </div>

                            <!--Formulario para añadir comentario-->
                            <form action="../controllers/post-controller.php?id=<?= $id ?>&comment_id=<?= $comment_id ?> " method="post">
                                <div class="input comment-form hidden" data-id="<?= $data["id"] ?>">
                                    <textarea name="comment" class="textarea" placeholder="Añadir comentario" required></textarea>
                                    <div class="comment-form-options hidden">
                                        <i class="fa-solid fa-xmark close"></i>
                                        <button type="submit">Comentar</button>
                                    </div>
                                </div>
                            </form>
                            <!--Respuestas a comentarios-->
                            <?php
                            $answer = $db->query("SELECT * FROM answers JOIN users ON answers.User_id = users.User_id WHERE Thread_id=$id AND Comment_id=$comment_id ORDER BY id ASC;");
                            if ($answer->num_rows > 0) {
                                while ($answer_data = $answer->fetch_assoc()) {
                            ?>
                                    <div class="comment l1 hidden" data-id="<?= $data["id"] ?>">
                                        <div class="comment-content">
                                            <div class="comment-user">
                                                <img src="../static/assets/imgs/imagenes-de-perfil/profile-picture.png" alt="">
                                                <p><?= $answer_data["username"] ?></p>
                                                <?php
                                                if (isset($_SESSION["username"])) {
                                                    if ($_SESSION["username"] === $answer_data["username"]) {
                                                ?>
                                                        <a href="../controllers/answer-controller.php?id=<?= $answer_data['id'] ?>"><i class="fa-solid fa-xmark "></i></a>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <div></div>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <p><?= $answer_data["Text"] ?></p>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
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
                        <form action="../controllers/post-controller.php" method="post">
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
    <script src="../static/js/vista-post.js"></script>
    <script src="../static/js/postModal.js"></script>
    <script>
        if (!localStorage.getItem('firstLoad')) {
            localStorage['firstLoad'] = true;
            window.location.reload();
        } else {
            localStorage.removeItem('firstLoad');
        }
    </script>
</body>

</html>