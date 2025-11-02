<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Usuario</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="animaciones.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    


    
    <!-- Este es para peersonalizar las ventanas emergentes -->
           <script src="animacion.js"></script>

     <script src=https://cdn.jsdelivr.net/npm/sweetalert2@11></script>
</head>

<body>
    <div class="wrapper">
        
        <div class="title">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg/2560px-Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg.png"
        alt="Logotipo de la CFE" 
           width="150">
           <h4>Registro</h4>
        </div>

        <form action="InicioSesion/registrarse.php" method="POST">
           
        <!-- RPE  -->
        <div class="field">
                <input type="text" id="username" name="username" required>
                <label for="username">Usuario RPE</label>
            </div>

            <!-- Nombre -->
            <div class="field">
                <input type="text" required name="nombre">
                <label for="">Nombre Completo</label>
            </div>

            <!-- Contraseña -->
            <div class="field password-field">
            <input type="password" id="pass" name="password" required>
            <label for="pass">Contraseña</label>
            <img src="ojo.png" id="pass_icon" class="icon">
            </div>

             <!-- Depaertamento -->
             <div class="field">
                <!-- <select name="departamento" id="departamento" required>
                    <option value="1">Control e Informatica</option>
                    <option value="2">Subestaciones y Lineas</option>
                    <option value="3">Proteccion y Medicion</option>
                    <option value="4">Administración</option> -->
                    <!-- De acuerdo a los roles existentes dentro del sistem -->
                     <!-- <select name="departamento_id" id="departamento_id" required>
     <option value="" disabled selected>Selecciona</option> -->
    <!-- <option value="1">Control e Informatica</option>
    <option value="2">Subestaciones y Lineas</option>
    <option value="3">Proteccion y Medicion</option>
    <option value="4">Administración</option>
</select>  -->


                <select name="departamento_id" id="departamento_id" required>
                    <option value="1">Control e Informatica</option>
                    <option value="2">Subestaciones y Lineas</option>
                    <option value="3">Proteccion y Medicion</option>
                    <option value="4">Administración</option>
                </select>
                 <!-- </select> -->
                <label for="role_id">Departamento</label>
            </div> 
                    
            <!-- Puesto/ ocupación -->
            <div class="field">
                <input type="text" required name="puesto">
                <label for="">Puesto/Ocupación</label>
            </div>

            <!-- ROL  -->
            <div class="field">
                <select name="role_id" id="role_id" required>
                    <option value="1">Administrador</option>
                    <option value="2">Usuarios</option>
                    <!-- De acuerdo a los roles existentes dentro del sistem -->
                </select>
                <label for="role_id">ROL</label>
            </div>

            <div class="field">
                <input type="submit" value="Registrar">
            </div>
            <div class="sigup-link">
                ¿Ya tienes una cuenta?<a href="index.php">Iniciar seccion</a>
            </div>
        </form>
    </div>
    
</body>


</html>