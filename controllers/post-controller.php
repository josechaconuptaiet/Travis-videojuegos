<?php
session_start();
include("../lib/db.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_SESSION["username"];
    $text = $_POST["comment"];
    $text = nl2br($text);
    $thread_id = $_GET["id"];
    $comment_id = $_GET["comment_id"];
    
    $query_id = $db->prepare('SELECT * FROM users WHERE username = ?');
    $query_id->bind_param("s", $username);
    $query_id->execute();
    $resultado = $query_id->get_result();
    
    if ($resultado->num_rows != 0) {
        while ($data = $resultado->fetch_assoc()) {
            $id = $data["User_id"];
            $fecha_actual = date('Y-m-d H:i:s');
    
            $query = $db->prepare("INSERT INTO `answers`(`Text`, `CreationDate`, `Comment_id`, `User_id`, `Thread_id`) VALUES (?,?,?,?,?)");
            $query->bind_param('sssss', $text, $fecha_actual, $comment_id, $id, $thread_id);
            $query->execute();
    
            echo "<script>history.go(-1);</script>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    $id = $_GET["id"];

    $query = $db->query("SELECT * FROM answers WHERE Comment_id=$id");
    $n_answer = $query->num_rows;

    echo $n_answer;
}
