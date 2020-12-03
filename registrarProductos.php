<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        
        //1. Recibo datos del formulario
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $descripcion=$_POST["descripcion"];
        $precio=$_POST["precio"];
        $foto=$_POST["foto"];

        //2. Crear un objeto(COPIA) de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3.Construir una consulta SQL para insertar datos
        $consultaSQL="INSERT INTO producto(nombreProducto,marcaProducto,precio,descripcion,foto) VALUES ('$nombre','$marca','$precio','$descripcion','$foto')";
        
        //4. Utilizar el metodo agregarDatos() de la clase BaseDatos
        $transaccion->agregarProductos($consultaSQL);

    }




?>