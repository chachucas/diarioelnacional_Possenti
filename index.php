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
    <div class="" style="width:1240px; position: relative; margin: auto">
        
        <span style="text-align: center">
        <h1>DIARIO EL NACIONAL</h1>
        
        
        <h4>NOTICIAS</h4>
        </span>

        <div style="">
            <div class="row">
            <?php
            require("admin/conexion.php");
            $conexion = mysqli_connect($server_db, $usuario_db, $password_db)
                or die("No se puede conectar con el servidor");
            mysqli_select_db($conexion, $base_db)
                or die("No se puede seleccionar la base de datos");
            $instruccion = "select * from noticias  order by id_noticia desc limit 10";
            
            $consulta = mysqli_query($conexion, $instruccion) or die("no puedo consultar");
            
            $nfilas = mysqli_num_rows($consulta);
            for ($i = 0; $i < $nfilas; $i++) {
                $resultado = mysqli_fetch_array($consulta);
                print('
                <div class="col-4">
                    <div class="card">
                    <img src="imagenes_subidas/'.$resultado['imagen'].'" class="card-img-top" alt="'.$resultado['titulo'].'">
                        <div class="card-body">
                                <h5 class="card-title" style="font-size: 19px">'.$resultado['titulo'].'</h5>
                            <p class="card-text" style="font-size: 14px">'.substr($resultado['copete'],0,400).'</p>
                            <a href="ver_noticia.php?id_noticia='.$resultado['id_noticia'].'" class="btn btn-primary">AMPLIAR</a>
                        </div>
                    </div>
                </div>
                
                ');
            }
            mysqli_close($conexion);
            ?>
            </div>
        </div>
</body>

</html>