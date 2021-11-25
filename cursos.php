<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
     <!-- Materialize.css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
    <!-- CSS Estilos -->
    <link rel="stylesheet" href="css/carrusel/estilos.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body class="hidden">
    <div class="centrado" id="onload">
    <div class="lds-facebook"><div></div><div></div><div></div></div>
     </div>
         <nav id="nav" class="nav1">
             <div class="contenedor-nav">
                 <div class="logo">
                     <img src="img/logo1.png" alt="">
                 </div>
                 <div class="enlaces" id="enlaces">
                 <a href="login.php" id="enlace-contacto" class="btn-header"><p class="fas fa-user"></p></a>
                     <a href="index.php" id="enlace-inicio" class="btn-header"><p class="fas fa-home fa-fw"></p>&nbsp;Inicio</a>
                     <a href="usuario.php" id="enlace-acerca" class="btn-header"><p class="fas fa-cart-plus fa-fw"></p>&nbsp;Pedidos <span class="span">0</span></a>
             </div>
            
            </div>
         </nav>
         <div class="textos">
         <div class="container">
        <div class="row">
            <div class="col s12">
                <h3 class="center-align titulo">-</h3>
                <div class="carousel center-align">
                    <div class="carousel-item">
                    <img src="./img/cap1.gif" width="400" alt="">
                    </div>

                    <div class="carousel-item">
                        <h2 class="subtitulo">Cursos</h2>
                        <div class= "linea-division"></div>
                        <p class="tit">Precausión</p>          
                        <img src="./img/curso.png" width="400" alt="">
                    </div>
                    
                    <div class="carousel-item">
                        <h2 class="subtitulo">Material</h2>
                        <div class= "linea-division"></div>
                        <p class="tit">Guías</p>          
                        <img src="./img/curso1.png" width="400" alt="">
                    </div>
                    
                    <div class="carousel-item">
                        <h2 class="subtitulo"></h2>     
                        <img src="./img/gif.png" width="400" alt="">
                    </div>
                    
                    <div class="carousel-item">  
                    <h2 class="subtitulo">PÓKER</h2>
                        <div class="linea-division"></div>
                        <p class="tit">Seguridad</p>
                        <img src="img/poker.png" alt="">
                    </div>
                    
                    <div class="carousel-item">        
                        <img src="./img/eq.png" width="400" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
            
         </div>
     <main>
         <section class="team contenedor" id="acerca">
             <h3>Cursos</h3>
             <div class="botones-work">
                 <?php 
                 
                 require 'vendor/autoload.php';
                 $cursos = new Kawschool\Grupo;
                 
                 ?>
             </div>
             <div class="galeria-work">
                 <div class="cont-work equipo">
                     <div class="img-work">
                         
                     </div>
                     <div class="textos-work">
                       <button class="btn-warning">Quiero ser parte <i class="fas fa-bags-shopping"></i></button>
                     </div>
                 </div>
        </section>     
     </main>
    
                <h3 class="center-align titulo2"><b>Empresas con las que hemos trabajado</b></h3> 
                <!--<img id="empresas"src="./img/logo1.png" width="150px" height="75px" alt="">-->
                <img id="empresas"src="./img/GRUPO 4 IO SEGURIDAD INDUSTRIAL (3).gif" width="100%" height="820s%" alt="">
   
     <footer id ="contacto">
       <div class="footer contenedor">
           <div class="marca-logo">
               <img src="img/logoprincipal.png">
           </div>
           <p>Calle Acatipan #3 Int. 3. Col. Vicente Guerrero. C.D Sahagún, Hgo.</p>
                   <div class="text-muted"><b>Copyright &copy; GRUPO 4 IO SEGURIDAD INDUSTRIAL </b></div>
                            <div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/oberdanhc"><i class="fab fa-twitter-square"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a class="contac" href="tel:7751301633"><p class="fas fa-address-book">&nbsp;&nbsp;Comunícate:</p> 775-130-1633</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href= "https://www.linkedin.com/in/grupo-4-io-seguridad-industrial-dc-5-stps-5696a21a/?originalSubdomain=mx"><i class="fab fa-linkedin"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               <b>&middot;</b>
                               <a class="contac" href="mailto:grupo4io.seguridad@gmail.com"><p class="fas fa-envelope">&nbsp;&nbsp;Correo:</p>grupo4io.seguridad@gmail.com</a>
                               <b>&middot;</b>
                                <!--<a href="#">Terms &amp; Conditions</a>-->
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://web.facebook.com/GRUPO-4-IO-Seguridad-Industrial-105576114353693/"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
       </div>
   </footer>
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   <script src="js/main.js"></script>
   <script src="js/jquery.js"></script>
   <script src="js/filtro.js"></script>
   <!-- Materialize.js -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Main -->
    <script src="js/carrusel/main.js"></script>
</body>
</html>