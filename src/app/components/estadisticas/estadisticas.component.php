<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f0795c0d98.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="estadisticas.component.css">
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
                <li><a class="active" href="http://localhost/Final/">Cerrar sesión</a></li>
                <li><a href="../sobre/sobre.component.html" class="active">Sobre CusCo</a></li>
                <li><a href="../funciona/funciona.component.html">¿Cómo funciona?</a></li>
            </ul>
        </nav>
    </header>

    <div class="container-pp">
        <div class="container-p">
            <p>Gráfica</p>
        </div>
    </div>

    <div class="stack-1">
        <div class="stack-1-1">
            <div class="stack-c">
                <br>
                <h1>Filtrado por:</h1>
                <h2>-Semana</h2>                                                        
                <br>
                <a onclick="cambiarTipoGrafica()" href="#" class="txt">Cambiar tipo de Gráfica</a>
            </div>

            <div class="desc-1">
                <div class="desc-1-p">
                <canvas id="myChart"></canvas>
                    <script src="../../../../scripts/grafica.js"></script>
                    <div
                        style="margin-top:16px;color:dimgrey;font-size:9px;font-family: Verdana, Arial, Helvetica, sans-serif;text-decoration:none;">
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>