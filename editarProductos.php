<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catàlogo de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">BIENVENIDO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="admon.php">Administración</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="listado.Productos.php">Catálogo de Productos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    <?php
    
        //rutina para consultar todos los datos de una tabla

        //1. Incluir el archivo BaseDatos.php (Para pdoer usar la clase)
        include("BaseDatos.php");

        //2. Crear un objeto de la clase BaseDatos
        $transaccion=new BaseDatos();
        
        //3. Escribir una consulta SQL para buscar datos(La que usted necesite)
        $consultaSQL="SELECT * FROM producto";

        //4. Utilizar el metodo consultarDatos de mic lase BaseDatos
        $productos=$transaccion->consultarProductos($consultaSQL);

        //print_r($productos);

    ?>

    <div class="container">
        

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto): ?>

                <div class="col mb-4">

                    <div class="card h-100">
                        <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="fotoscard">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto["nombreProducto"] ?></h5>
                            <p class="card-text"><?= $producto["marcaProducto"] ?></p>
                            <p class="card-text"><?= $producto["precio"] ?></p>
                            <p class="card-text"><?= $producto["descripcion"] ?></p>
                           <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                                Editar
                            </button>
                            <a href="eliminarProductos.php?id=<?= ($producto["idProducto"])?>" class="btn btn-dark">Eliminar</a>
                            
                            
                        </div>
                    </div>
                    

                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="modificarProductos.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                        <div class="form-group">
                                            <label>Nombre Producto:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombreProducto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Marca Producto:</label>
                                            <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marcaProducto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Precio:</label>
                                            <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($producto["descripcion"])?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto:</label>
                                            <textarea class="form-control" rows="3" name="fotoEditar"><?php echo($producto["foto"])?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
            <?php endforeach ?>

        </div>
    
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>