<?php

require("conexion.php");


if (isset($_GET['nro_de_Corredor'])) {
    $nro_de_Corredor = $_GET['nro_de_Corredor'];
    $query = "SELECT * FROM carrera WHERE nro_de_Corredor = $nro_de_Corredor";
    $resultado = mysqli_query($conex, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_array($resultado);
        $nro_de_Corredor = $fila['nro_de_Corredor'];
        $categoria = $fila['categoria'];
        $apellido = $fila['apellido'];
        $nombre = $fila['nombre'];
        $fechaDeInscripcion = $fila['fechaDeInscripcion'];
    }
}

if (isset($_POST['actualizar'])) {
    $id = $_GET['nro_de_Corredor'];
    $nro_de_Corredor = $_POST['nro_de_Corredor'];
    $categoria = $_POST['categoria'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $fechaDeInscripcion = $_POST['fechaDeInscripcion'];

    $query = "UPDATE carrera set nro_de_Corredor = '$nro_de_Corredor', categoria = '$categoria', apellido = '$apellido', nombre = '$nombre', fechaDeInscripcion = '$fechaDeInscripcion' WHERE nro_de_Corredor = $id";

    mysqli_query($conex, $query);
    header("Location: consultar.php");
}

?>

<?php require("includes/header.php"); ?>

<div class="container p-5">
    <div class="row" style="margin:auto; width: 400px">
        <div class="col">
            <div class="card card-body">
                <form action="edit.php?nro_de_Corredor=<?php echo $_GET['nro_de_Corredor']; ?>" method="POST">
                    <div class="form-group">
                        <input type="number" style="margin-bottom: 10px;" name="nro_de_Corredor" value="<?php echo $nro_de_Corredor ?>" class="form-control" placeholder="Actualiza el título">
                    </div>
                    <div class="form-group">
                        <select name="categoria" value="<?php echo $categoria ?>" class="form-select mb-3" size="1">
                            <option value="Junior Masculino">Junior Masculino</option>
                            <option value="Junior Femenina">Junior Femenina</option>
                            <option value="Promesa Masculino">Promesa Masculino</option>
                            <option value="Promesa Femenina">Promesa Femenina</option>
                            <option value="Senior Masculino">Senior Masculino</option>
                            <option value="Senior Femenina">Senior Femenina</option>
                            <option value="Veterano 35 - Masculino">Veterano 35 - Masculino</option>
                            <option value="Veterano 35 - Femenina">Veterano 35 - Femenina</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" style="margin-bottom: 10px;" name="apellido" value="<?php echo $apellido ?>" class="form-control" placeholder="Actualiza el apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" style="margin-bottom: 10px;" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Actualiza el nombre">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaDeInscripcion" value="<?php echo $fechaDeInscripcion ?>" class="form-control" placeholder="Actualiza la fecha de inscripción">
                    </div>
                    <button class="btn btn-success" style="margin-top: 20px;" name="actualizar">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col" style="margin-bottom: 10px;">
        <a href="consultar.php"><button type="submit" class="btn btn-success btn-lg  m-1">Volver a la tabla</button></a>
    </div>
</div>

<div class="container">
    <div class="col">
        <a href="index.php"><button type="submit" class="btn btn-primary btn-lg  m-1">Volver al formulario</button></a>
    </div>
</div>


<?php require("includes/footer.php"); ?>