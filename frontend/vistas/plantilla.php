<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda Virtual</title>
    <?php
        $icono = ControladorPlantilla::ctrEstiloPlantilla();
        echo '<link rel="icon" href="http://localhost/e-shop/backend/'.$icono["icono"].'">';
        $url = Ruta::ctrRuta();
    ?>
    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed" rel="stylesheet"> 
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
</head>
<body>
    <?php
    // HEADER
    include "modulos/cabezote.php";
    $rutas = array();
    $ruta = null;
    if(isset($_GET["ruta"])){
        $rutas = explode("/",$_GET["ruta"]);
        
        $item = "ruta";
        $valor = $rutas[0];

        $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
        if($valor == $rutaCategorias["ruta"]){
            $ruta = $valor;
        };

        $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
        foreach ($rutaSubCategorias as $key => $value) {
            if($valor == $value["ruta"]){
                $ruta = $valor;
            };
        }
        
        if ($ruta != null) {
            include "modulos/productos.php";
        } else {
            include "modulos/error404.php";
        }
        //var_dump($ruta);
    }
    ?>
    <script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
</body>
</html>