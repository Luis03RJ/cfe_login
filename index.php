<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
      <script src="animacion.js"></script>

    <!-- <link rel="icon" type="image/png" href="cfe_logo.svg" sizes="32x32"> -->
    <link id="ctl00_favicon" rel="shortcut&#32;icon" href="favico.png" type="image/vnd.microsoft.icon" /><link rel="stylesheet" href="https://www.cfe.mx/cdn/2019/assets/css/cfe.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
      
</head> 

<body>
    <div class="wrapper">
        <div class="title">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg/2560px-Comisi%C3%B3n_Federal_de_Electricidad_%28logo%29_.svg.png"
        alt="Logotipo de la CFE" 
           width="150">
        </div>


        <form action="InicioSesion/InicioSesion.php" method="POST">
            <div class="field">
                <input type="text" require name="username">
                <label for="">Usuario</label>           
            </div>


            <div class="field password-field">

    <input type="password" id="pass" name="password" required>
    <label for="pass">Contraseña</label>
    <img src="ojo.png" id="pass_icon" class="icon">

    <!-- <i class='bx bx-show-alt toggle-password'></i>  -->



</div>


            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Recordar</label>
                </div>

                <div class="pass-link"><a href="#">Olvido su contraseña?</a></div>
            </div>
            <div class="field">
                <input type="submit" value="Ingresar">
            </div>
            <div class="sigup-link"><a href="Registrarse.php">Registrarse Ahora</a></div>
        </form>   

        
    </div>

</body>
</html>