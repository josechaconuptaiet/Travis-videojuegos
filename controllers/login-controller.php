<?php
include("../lib/db.php");

$username = $_POST["username"];
$password = $_POST["password"];

//Validaciones de datos
$lpassword = strlen($password);
$lusername = strlen($username);

if($lusername == 0 || $lpassword == 0){
    echo "Introduzca todos los campos";
    return null;
}

//Consultar usuario
$user = $db->prepare('SELECT * FROM users WHERE username = ?');
$user->bind_param('s', $username);
$user->execute();
$resultado = $user->get_result();

if($resultado->num_rows != 0){
    while($data = $resultado->fetch_assoc()){
        $passwordDB = $data["password"];

        //Verificar contraseña
        if(!password_verify($password, $passwordDB)){
            echo "Contraseña incorrecta";
            return null;
        }

        session_start(); //Creando la sesion ya que los datos son validos
        $_SESSION["username"] = $username;

        header('Location: '. '../index.php');
    }
}


?>