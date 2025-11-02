<?php

require_once '../config/Connection.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    // Para la creacion de variables que almacenan datos en el registro
    $nombre= $_POST['nombre'];
    $puesto=$_POST['puesto'];
    $role_id= $_POST['role_id'];
    $departamento_id = $_POST['departamento_id'];

    try {
        $connection = new Connection();
        $pdo = $connection ->connect();

        // Aqui se insertan los datos en la BD 
        $sql = "INSERT INTO usuarios(username, password,nombre,departamento_id,puesto,role_id) VALUES (:username, :password,:nombre,:departamento_id,:puesto,:role_id)";
        $stmt = $pdo -> prepare($sql);

        $stmt -> execute([
            'username' => $username,
            'password' => $password,
            'nombre'   => $nombre,
            'departamento_id' => $departamento_id,
            'puesto'=>$puesto,
            'role_id' => $role_id,
        ]);

        echo "<script>
        alert('Usuario registrado correctamente.');
        window.location.href = '../index.php'; 
        </script>";

    } catch (\Throwable $th) {
        echo "<script>
        alert('Error al registrar el usuario: " . addslashes($th -> getMessage()) . "');
        window.location.href = '../Registrarse.php'; 
        </script>";
    }

}