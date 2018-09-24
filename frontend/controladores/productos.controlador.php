<?php

class ControladorProductos {

    static public function ctrMostrarCategorias($item, $valor){
        $tabla = "catalogo";
        $respuesta = ModeloProductos::mdlMostrarCategorias($tabla, $item, $valor);
        return $respuesta;
    }

    static public function ctrMostrarSubCategorias($item, $valor){
        $tabla = "subcatalogo";
        $respuesta = ModeloProductos::mdlMostrarSubCategorias($tabla, $item, $valor);
        return $respuesta;
    }

}