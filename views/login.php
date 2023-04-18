<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f0795c0d98.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./res/css/header.css">
    <link rel="stylesheet" href="./res/css/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Ingresar</title>
</head>
<style>
    body {
        background-color: #E0EEFA;
    }
</style>
<body>
    <!--BARRA DE NAVEGACION-->
    <!-- Compiled and minified JavaScript -->
    <header>
        <nav>
            <div>
                <img src="./res/img/logo.png" class="logo">
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="bar-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-menu">
                <li><a href="./src/app/components/sobre/sobre.component.html">Sobre CusCo</a></li>
                <li><a href="./src/app/components/funciona/funciona.component.html">¿Cómo funciona?</a></li>
            </ul>
        </nav>
    </header>

    <div class="boxf">
        <form class="box" action="index.html" method="post">
            <img src="./res/img/logo.png" class="logof">
            <h1>CusCo</h1>
            <p>Ingresa Correo:</p>
            <input id='email' type="email" name="" placeholder="Correo">
            <p>Ingresa Password:</p>
            <input id='password' type="password" name="" placeholder="Password">
            <a id='submit' type="submit" name="" value="">Iniciar sesión</a>
            <li><a href="./src/app/components/registros/registro.php">no tienes cuenta, registrate</a></li>
        </form>
    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <div class="img-p">
                    <img src="./res/img/telefono.png" class="footer-img">
                </div>

                <span class="menu-title">5512345678</span>
            </div>

            <div class="footer-content-container">
                <div class="img-p">
                    <img src="./res/img/facebook.png" class="footer-img">
                </div>

                <span class="menu-title">CusCo_Of</span>
            </div>

            <div class="footer-content-container">
                <div class="img-p">
                    <img src="./res/img/email.png" class="footer-img">
                </div>

                <span class="menu-title">cusco@gmail.com</span>
            </div>

        </div>
        <div class="copyright-container">
            <span class="copyright">Copyright 2021, cusco.com. Todos los derechos reservados.</span>
        </div>
    </footer>

</body>

</html>

<script type="text/javascript" src="./scripts/login.js?v1.0.0"></script>