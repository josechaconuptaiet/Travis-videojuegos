
<?php
session_start();
include("../lib/db.php");

$username = $_SESSION["username"];


if (!isset($_SESSION["username"])) {
    return null;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST["title"];
    $text = $_POST["description"];
    $text = nl2br($text);

    $query_id = $db->prepare('SELECT * FROM users WHERE username = ?');
    $query_id->bind_param("s", $username);
    $query_id->execute();
    $resultado = $query_id->get_result();

    if ($resultado->num_rows != 0) {
        while ($data = $resultado->fetch_assoc()) {
            $id = $data["User_id"];
            $fecha_actual = date('Y-m-d H:i:s');

            $query = $db->prepare("INSERT INTO `threads`(`User_id`, `Title`, `Text`, `CreationDate`) VALUES (?,?,?,?)");
            $query->bind_param('ssss', $id, $title, $text, $fecha_actual);
            $query->execute();

            header('Location: ' . '../views/chat.php');
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $delete = $db->query("DELETE FROM `threads` WHERE `id`='$id'");

        header('Location: ' . '../views/chat.php');
    }
}
