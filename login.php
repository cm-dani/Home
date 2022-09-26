<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/a26d91b6e0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="assets/css/Styles.css">
    <link rel="stylesheet" href="assets/css/Styles Index.css">

    <title>Login & Register</title>
</head>

<body>
<br>
<a href="index.html" >  <p> &nbsp &nbsp &nbsp<i class="fa-solid fa-circle-xmark" ></i></p></a>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Already have an account?</h3>
                    <p>Log in for enter to CLAN Marketplace </p>
                    <button id="btn__iniciar-sesion">Log in</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Don't have an account?</h3>
                    <p>Sign up to Log in</p>
                    <button id="btn__registrarse">Sign Up</button>
                    <a href="<?php echo $linkedin->getAuthUrl() ?>"><button>Sign up with LinkedIn</button></a>
                </div>
            </div>

            <!--Form login & register-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario.php" method="POST" class="formulario__login">
                    <h2>Log in</h2>
                    <input type="text" placeholder="E-mail" name="e_mail">
                    <input type="password" placeholder="Password" name="contrasena">
                    <button>GO!</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                    <h2>Register</h2>
                    <input type="text" placeholder="Full name" name="nombre_completo">
                    <input type="text" placeholder="E-mail" name="e_mail">
                    <input type="text" placeholder="User" name="usuario">
                    <input type="password" placeholder="Password" name="contrasena">
                    <button>Sign up</button>
                    <a href="<?php echo $linkedin->getAuthUrl() ?>"></a>
                </form>
            </div>
        </div>
        <script src="assets/js/script.js"></script>
    </main>
</body>

</html>