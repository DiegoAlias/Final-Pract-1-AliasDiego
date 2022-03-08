<?php require("conexion.php"); ?>
<?php require("includes/header.php"); ?>

<div class="container">
    <div class="row" style="margin-top: 20px; background:darkgray; margin-left: 30%;margin-right: 30%;">
        <div>
            <h3>Consulta de corredores</h3>
        </div>
    </div>
</div>


<div class="container">
    <div class="display">
        <div class="col">
            <table class="table table-dark table-striped" id="tabla" style="width: 100%; color:white; margin-top: 30px;">
                <thead>
                    <tr>
                        <th scope="col">Número de corredor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha de inscripcion</th>
                        <th scope="col">Electro</th>
                        <th scope="col">Ergometria</th>
                        <th scope="col">Rayos</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM carrera";

                    $resultado = $conex->query($sql);

                    while ($fila = $resultado->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $fila['nro_de_Corredor']; ?></td>
                            <td><?php echo $fila['categoria']; ?></td>
                            <td><?php echo $fila['apellido']; ?></td>
                            <td><?php echo $fila['nombre']; ?></td>
                            <td><?php echo $fila['fechaDeInscripcion']; ?></td>
                            <td><?php echo $fila['electro']; ?></td>
                            <td><?php echo $fila['ergometria']; ?></td>
                            <td><?php echo $fila['rayos']; ?></td>
                            <td>
                                <a href="edit.php?nro_de_Corredor=<?php echo $fila['nro_de_Corredor'] ?>" class="btn btn-secondary">
                                    <i><i class="fas fa-marker"></i></i>
                                </a>
                            </td>
                            <td>
                                <a href="delete.php?nro_de_Corredor=<?php echo $fila['nro_de_Corredor'] ?>" class="btn btn-danger">
                                    <i><i class="fa-solid fa-trash-can"></i></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="col">
        <a href="index.php"><button type="submit" class="btn btn-primary btn-lg  m-1">Volver al formulario</button></a>
    </div>
</div>

<?php require("includes/footer.php"); ?>
<script src="main.js"></script>