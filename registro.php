<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ejercicios PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
        </div>
    </nav>
    
   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
            
           <form action="registro.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellidoUsuario">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Edad" name="edadUsuario">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fotografia" name="fotografia">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" name="botonEnviar">Controlar</button>
            </form>

            
            <?php if(isset($_POST["botonEnviar"])): ?> 

                <?php
                    $fotoHombre="https://image.freepik.com/vector-gratis/perfil-avatar-hombre-icono-redondo_24640-14044.jpg";
                    $fotoMujer="https://image.freepik.com/vector-gratis/diseno-ilustracion-vector-personaje-avatar-mujer-joven_24877-18520.jpg";
                    $nombre=$_POST["nombreUsuario"];
                    $apellido=$_POST["apellidoUsuario"];
                    $edad=$_POST["edadUsuario"];
                    $foto=$_POST["fotografia"];
                ?>
                   
                   <h5><?php echo($nombre) ?></h5>
                   <h5><?php echo($apellido) ?></h5>
                   <h6><?php echo($edad)?></h6>
                   
                   
                   <img src="<?php echo($foto)?>" alt="perfil">
    
            <?php endif ?>

//masculino//femenino
            
            
            
            
            
            
            
           


           </div>
       </div>
   </div>

  
   
   </main>
   <footer>
   
   </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>