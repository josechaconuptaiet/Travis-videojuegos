<?php
session_start();
include("../lib/db.php");

$username = $_SESSION["username"];


if (!isset($_SESSION["username"])) {
    return null;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $delete = $db->query("DELETE FROM `answers` WHERE `id`='$id'");

        echo "<script>history.go(-1);</script>";
    }
}
