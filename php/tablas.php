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
                            <?php 
                            }?>
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
                        <h1 class="mt-4">Tabla de Usuarios</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1" class="text-center"></i>
                                Usuarios registrados en bases de datos
                            </div>
                            <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Usuario</th>
                                        <th>Password</th>
                                        <th>nombre</th>
                                        <th>tipo usuario</th>
                                        <th> Actualizar</th>
                                        <th> Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php while($row = $resultado-> fetch_assoc())
                                        {?>
                                            <tr>
                                            <td> <?php echo $row['id']; ?></td>
                                                <td> <?php echo $row['usuario']; ?></td>
                                                <td> <?php echo $row['password']; ?></td>
                                                <td> <?php echo $row['nombre']; ?></td>
                                                <td> <?php echo $row['tipo_usuario']; ?></td>
                                                <td> 
                                                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#modelIda">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>
                            Actualizar
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modelIda" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                            <h5 class="modal-title">Edita a los usuarios</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                            <form action="" method="post">
                                    <label for="nombre" class="form-label"> ID: </label>
                                <div class="mb-3">
                                    <input type="Number" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingresa el ID">
                                </div>


                                <label for="email" class="form-label" class="form-control collectes-date-chargement-min text-center">  Usuario : </label>
                                <div class="input-group flex-nowrap">
                                
                                <input type="text" class="form-control" placeholder="Ingresa la fecha de registro" aria-label="UshelpIduario" aria-describedby="addon-wrapping">
                                </div>


                                <label for="email" class="form-label" class="form-control collectes-date-chargement-min text-center">  Nombre : </label>
                                <div class="input-group flex-nowrap">
                                
                                <input type="text" class="form-control" placeholder="Ingresa la fecha de registro" aria-label="UshelpIduario" aria-describedby="addon-wrapping">
                                </div>


                                <label for="tipousuario" class="form-label">Tipo de usuario: </label>
                                <div class="mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                                    <select class="form-select" id="inputGroupSelect01">
                                        <option selected> Elige uno</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>  

                                </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>
                                            Cerrar
                                        </button>
                                        <button type="submit" href="actualizar.php" class="btn btn-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg>
                                            Actualizar
                                        </button>
                                </div>
                                
                            </form>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#modelId">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>
                                                    Eliminar
                                                </button>
                                                </td>
                                            </tr>
                                    <?php 
                                        }?>  
                                    </tr>
                                </tbody>
                                </table>
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
