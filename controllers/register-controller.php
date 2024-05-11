<?php
include("../lib/db.php");

//Tomar los datos de el formulario
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

//Validaciones de datos
$lpassword = strlen($password);
$lusername = strlen($username);
$lemail = strlen(($email));

if($lusername == 0 || $lemail == 0){
    echo "Introduzca todos los campos";
    return null;
}

if ($lpassword >= 16 || $lpassword <= 2) {
    echo "El largo de la contraseña debe ser maximo 8 caracteres y minimo 2";
    return null;
}

if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/\d/', $password) || !preg_match("/[^a-zA-Z0-9]/", $password)) {
    echo "La contraseña debe cumplir con las condiciones";
    return null;
}

if ($password != $cpassword) {
    echo "Las contraseñas no coinciden";
    return null;
}

//Comprobar si ya existe el usuario
$user = $db->prepare('SELECT * FROM users WHERE username = ? OR email = ?');
$user->bind_param('ss', $username, $email);
$user->execute();
$resultado = $user->get_result();

if($resultado->num_rows > 0){
    echo "Ya existe ese usuario";
    return null;
}

//Encriptar contraseña

$password_hash = password_hash($password, PASSWORD_BCRYPT);
echo $password_hash;

//Enviar los datos a la base de datos
$query = $db->query("INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password_hash')");
echo $query;

if ($query) {
    session_start();
    $_SESSION["username"] = $username;

    header('Location: '. '../index.php');
}