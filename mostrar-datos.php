<?php
$username="root";
        $password="";
        $servername="localhost";
        $database="yuren";

        //crear conexion
        $conexion = new mysqli($servername,$username,$password,$database);

        //verificar la conexion
        if($conexion->connect_error){
            die("conexion fallida: " . $conexion->connect_error);

        }
        $sql="SELECT * FROM jugadores";
        $resultado = $conexion -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos de la base de datos</title>
</head>
<body>
    <style>
        body{
            font-family: cursive;
            color: #DDF1AB;
            background-color: #F2E9D8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items:center;
            height: 100px;
        }
        h1{
            text-align: center;
            color:black;
            margin-bottom: 20px;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:50px;
            border-radius:50px;
        }
        th, td{
            padding:10px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }
        tr:nth-child(even){
            background-color:#FAF0DB;
            color:black;
        }
        tr:nth-child(odd){
            background-color:#4A5859;
            color:#DDF1AB;
        }
        th{
            background-color:#F4C8EA;
            color:white;
        }
        

    </style>
    <div class="container">
        <h1>Datos del jugador de la NBA</h1>
       <?php

       if($resultado->num_rows >0):?>
       <table>
        <tr>
            <th>nombre</th>
            <th>apodo</th>
            <th>equipo</th>
            <th>posicion</th>
            <th>altura</th>
            <th>peso</th>
            <th>numero</th>
            <th>edad</th>
            <th>nacionalidad</th>
            <th>puntos</th>
        </tr>
        <?php while ($fila = $resultado->fetch_assoc()):?>
            <tr>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['apodo'];?></td>
                <td><?php echo $fila['equipo'];?></td>
                <td><?php echo $fila['posicion'];?></td>
                <td><?php echo $fila['altura'];?></td>
                <td><?php echo $fila['peso'];?></td>
                <td><?php echo $fila['numero'];?></td>
                <td><?php echo $fila['edad'];?></td>
                <td><?php echo $fila['nacionalidad'];?></td>
                <td><?php echo $fila['puntos'];?></td>
            </tr>
            <?php endwhile;?>
       </table>
       <?php else: ?>
        <p>No se encontraron jugadores</p>
        <?php endif;?>
    </div>
</body>
</html>