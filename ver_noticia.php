<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario El Nacional</title>
    <link href="lib/bootstrap-5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap-5.3.2/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container-fluid" style="width:1240px; position: relative; margin: auto">
        
        <span style="text-align: center">
        <h1>DIARIO EL NACIONAL</h1>
        <h4>NOTICIAS</h4>
        </span>

        <div class="row">
        <?php
        extract($_REQUEST);
        require("admin/conexion.php");
        $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
            or die("No se puede conectar con el servidor");
        mysqli_select_db($conexion, $base_db)
            or die("No se puede seleccionar la base de datos");
        $instruccion = "select * from noticias where id_noticia='$id_noticia'";

        $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");

        $nfilas = mysqli_num_rows($consulta);
        for ($i = 0; $i < $nfilas; $i++) {
            $resultado = mysqli_fetch_array($consulta);

            $inst2 = "select * from usuarios where id_usuario=" . $resultado['id_usuario'];
            $consulta2 = mysqli_query($conexion, $inst2) or die("no puedo consultar");
            $autor = mysqli_fetch_array($consulta2);

            print('
            <div class="col-12">
                <div class="card">
                
                <div style="width:50%; margin:auto;">
                    <img src="imagenes_subidas/'.$resultado['imagen'].'" class="card-img-top" alt="'.$resultado['titulo'].'">
                </div>
                
                
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 40px">'.$resultado['titulo'].'</h5>
                                                
                        <p class="card-text" style="font-size: 22px">'.substr($resultado['copete'],0,1600).'</p>
                                               
                        <h4 class="card-text" style="font-size: 14px; color: grey; text-align: right"> Por ' . $autor['nombre'] . ' ' . $autor['apellido'].'</h4>

                        <p class="card-text">'.substr($resultado['cuerpo'],0,20000).'</p>

                        <p style="align: left;"><a href="javascript:history.back()" class="btn btn-primary" >VOLVER AL DIARIO</a></p>
                        
                    </div>
                 </div>
            </div>
            
            ');
        }
        mysqli_close($conexion);
        ?>
        </div>

</body>
</html>