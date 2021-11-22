<?php
    require 'php/bd.php';
    session_start();

    if($_POST)
    {
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario ='$usuario'";
        //echo $sql;
        $resultado= $mysqli->query($sql);
        $num = $resultado->num_rows;

        if($num>0)
        {
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];

            $pass_c = sha1($password);

            if($password_bd == $pass_c)
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];

                header("Location: admin.php");
            }
            else
            {
                echo "La contraseña no coinicide";
            }
        }
        else
        {
            echo "No existe usuario";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../js/fileinput.min.js" type="text/javascript"></script>
        <link href="css/animate.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                    <img src="img/log.png" width="55px" height="60px" align="left" alt="" >
                                        <img src="img/logo1.png" width="150px" height="75px" align="right" alt="" >
                                    
                         <h3 class="text-center font-weight-light my-4">Inicio de Sesión</h3>
            
                </div>
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                            
                                        <div class="form-floating mb-3">
                                                <input class="form-control" id="usuario" type="text" name="usuario" placeholder="Escriba el nombre de usuario" require/>
                                                <label for="inputEmail">Usuario</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                            
                                            <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Escriba su contraseña" require/>
                                                <label for="inputPassword">Contraseña</label>
                                                
                                                
                                                <!--<nav id="show-hide-passwd" action="hide" class="btn-group-addon bi bi-eye-slash-fill"><i class="bi bi-eye-slash-fill" style="font-size: 2rem; color: cornflowerblue;"></i>  <input type="button" name="wf"[onclick="mostrar()"]>   fa-solid fa-eye abierto  fa-solid fa-eye-slash-->
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-block" type="submit">Iniciar Session</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registro.php">¿Necesitas un acuenta? Registrate</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; GRUPO 4 IO SEGURIDAD INDUSTRIAL</div>
                            <div>
                            <a href="index.php">Inicio</a>
                                &middot;
                               <a href="aviso.php">Aviso de privacidad</a>
                                &middot;
                                <!--<a href="#">Terms &amp; Conditions</a>-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script>
            /*function mostrar(){

                var tipo = document.getElementById("inputPassword");

                if(tipo.type == 'password'){

                    tipo.type = 'text';

                }else{

                    tipo.type ='password';
                }
            }*/

            $(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
				}
			})
		})

</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
