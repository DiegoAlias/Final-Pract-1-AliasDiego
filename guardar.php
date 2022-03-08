<?php require("includes/header.php"); ?>

<div class="container text-center mt-5 ">
    <div class="row" style="margin-top: 20px; background:darkgray; margin-left: 30%;margin-right: 30%; margin-bottom: 8%;">

        <label class="h4 mt-2">
            <?php
            require("conexion.php");

            /*if($conex){echo"todo ok";}*/

            $nro_de_Corredor = $_POST['nro_de_Corredor'];
            $categoria = $_POST['categoria'];
            $apellido = $_POST['apellido'];
            $nombre = $_POST['nombre'];
            $fechaDeInscripcion = $_POST['fechaDeInscripcion'];
            $electro = $_POST['electro'];
            $ergometria = $_POST['ergometria'];
            $rayosTorax = $_POST['rayos'];

            $sql = "INSERT INTO carrera (nro_de_Corredor,categoria, apellido, nombre, fechaDeInscripcion, electro, ergometria, rayos, operador) VALUES ('$nro_de_Corredor','$categoria','$apellido','$nombre','$fechaDeInscripcion','$electro','$ergometria','$rayosTorax', '')";

            //echo $sql;
            $resultado = $conex->query($sql);
            //echo 'resultado' . $resultado;

            if ($resultado == 1) {
                echo 'REGISTRO AGREGADO CORRECTAMENTE';
            } else {
                echo 'ERROR AL AGREGAR REGISTRO';
            }
            ?>
        </label>
    </div>
</div>

<div class="container">
    <div class="col" style="margin-bottom: 10px;">
        <a href="consultar.php"><button type="submit" class="btn btn-success btn-lg  m-1">Ir a la tabla</button></a>
    </div>
</div>

<div class="container">
    <div class="col">
        <a href="index.php"><button type="submit" class="btn btn-primary btn-lg  m-1">Volver al formulario</button></a>
    </div>
</div>

</html>