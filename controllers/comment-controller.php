<?php
session_start();
include("../lib/db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION["username"];
    $text = $_POST["comment"];
    $text = nl2br($text);
    $thread_id = $_GET["id"];

    $query_id = $db->prepare('SELECT * FROM users WHERE username = ?');
    $query_id->bind_param("s", $username);
    $query_id->execute();
    $resultado = $query_id->get_result();

    if ($resultado->num_rows != 0) {
        while ($data = $resultado->fetch_assoc()) {
            $id = $data["User_id"];
            $fecha_actual = date('Y-m-d H:i:s');

            $query = $db->prepare("INSERT INTO `comments`(`User_id`, `Thread_id`, `Text`, `CreationDate`) VALUES (?,?,?,?)");
            $query->bind_param('ssss', $id, $thread_id, $text, $fecha_actual);
            $query->execute();

            echo "<script>history.go(-1);</script>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET["id"];
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $delete = $db->query("DELETE FROM `comments` WHERE `id`='$id'");

        echo "<script>history.go(-1);</script>";
    }
}
