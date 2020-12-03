<?php 

class BaseDatos{

//DATOS/VARIABLES/ATRIBUTOS
public $usuarioBD="root";
public $passwordBD="";


//CONSTRUCTOR FUNCION ESPECIAL
public function __construct(){}


//ACCIONES/FUNCIONES/METODOS
public function conectarBD(){

    //1. DEFINIR EL DSN(info generica de mi BD)
    //gestorBD:host=nombreServidor;dbname=nombreBD
    $infoBD="mysql:host=localhost;dbname=tiendaweb";

    //2. Revisar(intentar) si hay conexión con la BD
    try{

        //3. UTILIZAR A PDO(crear un objeto de la clase PDO)
        $conexionBD=new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        return($conexionBD);

    }catch(PDOException $error){
        //3.1 Manejo del error
        echo($error->getMessage());
    }

}

public function agregarProductos($consultaSQL){

    //1. Establecer una conexión con la BD
    $conexionBD=$this->conectarBD();
    
    //2. Peparar la consulta
    $consultarAgregarProducto=$conexionBD->prepare($consultaSQL);

    //3. Ejecutar la consulta
    $resultado=$consultarAgregarProducto->execute();

    //4. Verificar el resultado
    if($resultado){
        echo("Se agrego el producto con éxito");
    }else{
        echo("Error agregando el producto");
    }
    Header("location:formularioProducto.php");
}

public function consultarProductos($consultaSQL){

    //1.Establecer la conexión
    $conexionBD=$this->conectarBD();

    //2. Preparar la consulta para agregar datos
    $consultaBuscarProductos=$conexionBD->prepare($consultaSQL);

    //3. Establecer como(En que formato) devolver los datos consultados
    $consultaBuscarProductos->setFetchMode(PDO::FETCH_ASSOC);

    //4. Ejecutar la consulta preparada
    $resultado=$consultaBuscarProductos->execute();

    //5. Retornar los datos consultados
    return($consultaBuscarProductos->fetchAll());
}

public function eliminarDatos($consultaSQL){
  //1. Establecer una conexión con la BD
  $conexionBD=$this->conectarBD();
    
  //2. Peparar la consulta
  $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);

  //3. Ejecutar la consulta
  $resultado=$consultaEliminarDatos->execute();

  //4. Verificar el resultado
  if($resultado){
      echo("se eliminó el registro con éxito");
  }else{
      echo("Error eliminando el registro");
  }

}

public function editarDatos($consultaSQL){
    //1. Establecer una conexión con la BD
    $conexionBD=$this->conectarBD();
      
    //2. Peparar la consulta
    $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
  
    //3. Ejecutar la consulta
    $resultado=$consultaEditarDatos->execute();
  
    //4. Verificar el resultado
    if($resultado){
        echo("se editó el registro con éxito");
    }else{
        echo("Error editando el registro");
    }
  
  }

}



?>