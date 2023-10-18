<?php
session_start();
extract($_REQUEST);
if(isset($_SESSION['usuario_logueado']))
    header("location:home.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <div class="" style="width:500px; margin: auto; padding-top:100px;">
        
        <span style="text-align: center">
        <div class="row">
            <div>
            <?php
              /*  if(isset($_SESSION['mensaje']))
                {
                    print("<p>".$_SESSION['mensaje']."</p>");
                    unset($_SESSION['mensaje']);
                }
*/
                if(isset($mensaje))
                {
                    print("<p>".$mensaje."</p>");
                   
                }
            ?>
            <form action="login.php" method="post" style="width: 350px">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" id="enviar" name="enviar" value="INGRESAR">
                </div>
            </form>

        </div>
        </span>
    </div>
</body>

</html>