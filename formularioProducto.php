<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GPS TECH</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css">
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
                            <a class="nav-link" href="calculadora.php">Catálogo de Productos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main class="dark">
        <BR>
        <h2 class="negritaycolor text-center">ADMINISTRACION DE PRODUCTOS</h2>
        
        <br>
        <div class="container col-6 ">
            <form action="confirmacion.php" method="POST">
                
                
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre Producto" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Marca Producto" name="marca">
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col">
                           <input type="text" class="form-control" placeholder="Precio Producto" name="precio">
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col">
                      <textarea class="form-control" rows="4" name="descripcion" placeholder="Descripción"></textarea>
                    </div>
                </div>
                <div class="row mt-3"> 
                    <div class="col"> 
                        <label class="font-weight-bold">Foto:</label> 
                            <input type="text" class="form-control" placeholder="Foto URL" name="foto">
                    </div>
                </div>
                <br>
                
                
                <div class="col text-center">
                    <button type="submit" class="btn btn-info" name="botonEnvio">Registrar</button>
                </div>
            </form>
        </div>
    </main>
    <footer class="bg-dark text-white mt-5">
        <div class="contaner">
            <div class="row justify-content-around text-center ">
                        <div class="col-md-3 mt-5">
                        <p>Luz Tatiana Zapata ©</p>
                        <p>tatianazz3@hotmail.com</p>
                        <p>Medellin - Antioquia</p>
                    </div>
                </div>
                <div class="row justify-content-center text-center">
                    <div class="col-md-8">
                        <div class="footer-copyright text-center py-3">© Colombia - 2020 Copyright:
                            <a
                                href=" https://www.intersoftware.org.co/">
                                Grupo Cerrado Intersoftware </a> <a href="https://www.cesde.edu.co/Paginas/tecnicos/procesos-tecnologicos-e-industriales/desarrollo-de-software-virtual.aspx"> - CESDE  </a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>