<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f0795c0d98.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../../../scripts/updatePassword.js?v1.0.0"></script>
    <link rel="stylesheet" href="cambiar-code.component.css">
    <title>Sobre CusCo</title>
</head>
<style>
    body {
        background-color: #E0EEFA;
    }
</style>
<body>
    <!--BARRA DE NAVEGACION-->
    <header>
        <nav>
            <div>
                <img src="../../../../res/img/logo.png" class="logo">
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="bar-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul class="nav-menu">
                <li><a class="active" href="http://localhost/Final/">Ingresar</a></li>
                <li><a class="active" href="../sobre/sobre.component.html" >Sobre CusCo</a></li>
                <li><a href="../funciona/funciona.component.html">¿Cómo funciona?</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-pp">
        <div class="container-p">
            <p>Cambiar código de acceso</p>
        </div>
    </div>

    <div class="boxf">
        <form class="box" action="index.html">
            <h1>CusCo</h1>
            <br>
            <label for="email" style=" font-weight: bold;">Insgrese su correo de acceso:</label>
            <input id="email" type="text" name="email" placeholder="Correo" required>
            <label for="old-password" style=" font-weight: bold;">Ingrese su password:</label>
            <input id="old-password" type="text" name="old_password" placeholder="Password">
            <label for="new-password" style=" font-weight: bold;">Ingrese su password nueva:</label>
            <input id="new-password" type="text" name="" placeholder="Password">
            <a href="http://localhost/Final/" onclick="updatePassword()" type="submit" name="new_password" value="Actualizar contraseña">Cambiar código</a>
        </form>
    </div>


    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <div class="img-p">
                    <img src="../../../../res/img/telefono.png" class="footer-img">
                </div>
                
                <span class="menu-title">5512345678</span>
            </div>

            <div class="footer-content-container">
                <div class="img-p">
                    <img src="../../../../res/img/facebook.png" class="footer-img">
                </div>
                
                <span class="menu-title">CusCo_Of</span>
            </div>

            <div class="footer-content-container">
                <div class="img-p">
                    <img src="../../../../res/img/email.png" class="footer-img">
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