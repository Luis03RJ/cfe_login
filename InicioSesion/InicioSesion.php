<?php

require_once '../config/Connection.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $error_messge = ''; // Inicializar el mensaje de error

    try {
        $connection = new Connection();
        $pdo = $connection ->connect();

        $sql = "SELECT * FROM usuarios WHERE username = :username";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(['username' => $username]);
        $user = $stmt ->fetch(PDO::FETCH_ASSOC);


        if($user && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['departamento_id']= $user['departamento_id'];

            // Opcional: Almacenar nombres para usarlos en el dashboard/UI
            // $_SESSION['nombre_departamento'] = $user['nombre_departamento']; 
            // $_SESSION['nombre_rol'] = $user['nombre_rol'];

            //Para Administrador 
            if($user['role_id'] == 1){
                header('Location: ../Home/dashboard.php');
                exit();
                // Para departamento 1 
            }elseif ($user['departamento_id'] == 1) {
                header('Location: ../Home/dashboarduser.php');
                exit();
                 // Para departamento 2
            }elseif ($user['departamento_id'] == 2) {
                header('Location: ../Home/Departamento2.html');
                exit();
                 // Para departamento 3
            }elseif ($user['departamento_id'] == 3) {
                 header('Location: ../Home/Departamento3.html');
                exit();
                 // Para departamento 4
            }elseif ($user['departamento_id'] == 4) {
                 header('Location: ../Home/Departamento4.html');
                exit();
            }
            
            
            
            
            
            else {
                echo 'Acceso Denegado AAA';

            }
            exit();
        }else{
            $error_messge = 'Credenciales Incorrectas';
        }
//dddd


    } catch (\Throwable $th) {
        
        $error_messge = "Error en la conexion" . $th -> getMessage();
        exit;
    }

    // --- Manejo de errores después de la autenticación ---
    if (!empty($error_message)) {
        $_SESSION['error_message'] = $error_message; 
    }
    
    // Redirigir siempre a la página de login (index.php) en caso de fallo
    header('Location: ../Registrarse.php'); // <-- Ya no está comentado
    exit();



}