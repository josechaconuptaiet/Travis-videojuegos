<?php
session_start();
// Terminar la sesión:
session_destroy();

// Redirigir al index
header('Location: '. '../index.php');
?>