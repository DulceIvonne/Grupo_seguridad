<?php
    session_start();
    require 'bd.php';

    if(!isset($_SESSION['id']))
    {
        header("Location: php/salir.php");
    }

    $id = $_SESSION['id'];
    $id =$_SESSION['id'];

    $nombre = $_SESSION['nombre'];
    $tipo_usuario =$_SESSION['tipo_usuario'];

    $id = $_SESSION['id'];
    $tipo_usuario = $_SESSION['tipo_usuario'];

    if($tipo_usuario ==1)
    {
        $where ="";
    }
    else if ($tipo_usuario ==2)
    {
        $where ="WHERE id=$id";
    }

    $sql = "SELECT * FROM usuarios $where";

    $resultado= $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Area del Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="admin.php">Area del Administrador</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <?php echo $nombre; ?>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $nombre; ?><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="../php/salir.php">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Admin</div>
                            <a class="nav-link" href="../admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Area de cursos en linea
                            </a>
                            <?php if($tipo_usuario== 1) 
                            {?>
                            <div class="sb-sidenav-menu-heading">Acciones</div>
                            <a class="nav-link" href="RegistroA.php">
                                <div class="fas fa-user fa-fw"><i class="fas fa-table"></i></div>
                                Registrar nuevos Admin
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            </div>

                            <?php 
                            } ?>
                            <div class="sb-sidenav-menu-heading">Gestion</div>
                            <a class="nav-link" href="tablas.php">
                                <div class="fas fa-user fa-fw"><i class="fas fa-table"></i></div>
                                Usuarios activos
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Has iniciado session como:</div>
                        <?php echo $nombre; ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Agregar un nuevo usuario :D</h1>

                        <div class="card">
                            <div class="card-header">
                                Ingrese los siguientes datos mostrados
                            </div>
                            <div class="card-body">
                            <form action="" method="post">


                                <label for="nombre" class="form-label">ID: </label>
                                <div class="input-group flex-nowrap m-3">
                                    <input type="text"
                                    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingresa el ID">
                                </div>


                                <label for="email" class="form-label">Nombre completo : </label>
                                <div class="input-group flex-nowrap m-3">
                                <input type="text" class="form-control" placeholder="Nombre completo" aria-label="UshelpIduario" aria-describedby="addon-wrapping">
                                </div>
                                <br>


                                <label for="email" class="form-label">Nombre de usuario : </label>
                                <div class="input-group flex-nowrap m-3">
                                <span class="input-group-text" id="addon-wrapping">@</span>
                                <input type="text" class="form-control" placeholder="Nombre completo" aria-label="UshelpIduario" aria-describedby="addon-wrapping">
                                </div>


                                <label for="telefono" class="form-label">Email: </label>
                                <div class="input-group flex-nowrap m-3">
                                    <input type="email"
                                    class="form-control" name="telefono" id="Ingrea que Area tematica es" aria-describedby="helpId" placeholder="Ingresa el email">
                                </div>

                                <label for="telefono" class="form-label">Telefono: </label>
                                <div class="input-group flex-nowrap m-3"">
                                    <input type="number"
                                    class="form-control" name="telefono" id="Ingrea que Area tematica es" aria-describedby="helpId" placeholder="Ingresa el numero telefonico">
                                </div>


                                <label for="tipousuario" class="form-label">Tipo de usuario: </label>
                                <div class="input-group flex-nowrap m-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected> Elige uno</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>      
                                </div>


                                <label for="password" class="form-label">Ingresa una contraseña: </label>
                                <div class="input-group flex-nowrap m-3">
                                    <input type="password"
                                    class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingresa una contraseña">
                                </div>

                                <button type="submit" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/></svg>
                                    Agregar un nuevo admin
                                </button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">GRUPO 4 IO SEGURIDAD INDUSTRIAL Copyright &copy;</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>

