
<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $database = " cigi";
    //crear conexion
    $conexion = new mysqli($servername, $username, $password, $database);
    //verificar conexion 
    if($conexion->connect_error){
        die("conexion fallida: " . $conexion->connect_error);
    }
    //obtencion de los datos del formulario
   $nombre = $_POST['nombre'];
   $apodo = $_POST['apodo'];
   $equipo = $_POST['equipo'];
   $posicion = $_POST['posicion'];
   $altura = $_POST['altura'];
   $peso = $_POST['peso'];
   $numero = $_POST['numero'];
   $edad = $_POST['edad'];
   $nacionalidad = $_POST['nacionalidad'];
   $puntos = $_POST['puntos'];
   $sql = "INSERT INTO jugadores (nombre, apodo, equipo, posicion, altura, peso, numero, edad, nacionalidad, puntos)VALUES 
   ('$nombre', '$apodo', '$equipo', '$posicion', '$altura', '$peso', '$numero', '$edad', '$nacionalidad', '$puntos')";
   if($conexion->query($sql)===TRUE){
    echo "Datos guardados sadisfactoriamente";
   }else{
    echo "ERROR: " . $sql . "<br>" . $conexion->error;
   }
   $conexion->close();
    ?>

