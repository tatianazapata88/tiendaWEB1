<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        //0.Recibir el id del registro a editar
        $id=$_GET["id"];

        //1.Recibir los datos
        $nombre=$_POST["nombreEditar"];
        $marca=$_POST["marcaEditar"];
        $precio=$_POST["precioEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $foto=$_POST["fotoEditar"];

        //2. Crear una copia de la clase BaseDatos
        $transaccion= new BaseDatos();

        //3. Crear una consulta SQL para actualizar registros
        $consultaSQL="UPDATE producto SET nombreProducto='$nombre',marcaProducto='$marca',precio='$precio',descripcion='$descripcion',foto='$foto' WHERE idProducto='$id'";

        //4. Ejecutar el metodo editarDatos de la clase BaseDatos
        $transaccion->editarProductos($consultaSQL);


    }