<?php require("conexion.php"); ?>
<?php require("includes/header.php"); ?>

<div class="container">
    <div class="row" style="margin-top: 20px; background:darkgray; margin-left: 30%;margin-right: 30%;">
        <div>
            <h3>Ficha de inscripcion</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row" style="margin-left: 30%;margin-right: 30%;">
        <?php if (isset($_SESSION['message'])) { ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php session_unset();
        } ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="colum" style="margin-top: 40px;">
            <a href="consultar.php"><button type="submit" class="btn btn-primary btn-lg  m-1">Consultar Tabla</button></a>
        </div>
    </div>
</div>


<form method="POST" action="guardar.php" onsubmit="">
    <div class="container">
        <div class="row" style="margin-top: 2%; margin-bottom: 2%; flex-wrap: wrap;">
            <div class="colum">
                <label id="cat">
                    <h5><b>Categoria:</b></h5>
                    <select class="form-select mb-3" size="4" id="categoria" style="min-width: 300px;" name="categoria" required>
                        <option value="Junior Masculino">Junior Masculino</option>
                        <option value="Junior Femenina">Junior Femenina</option>
                        <option value="Promesa Masculino">Promesa Masculino</option>
                        <option value="Promesa Femenina">Promesa Femenina</option>
                        <option value="Senior Masculino">Senior Masculino</option>
                        <option value="Senior Femenina">Senior Femenina</option>
                        <option value="Veterano 35 - Masculino">Veterano 35 - Masculino</option>
                        <option value="Veterano 35 - Femenina">Veterano 35 - Femenina</option>
                    </select>
                </label>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col">
            <div class="row">
                <div class="col-md-3 text-center">
                    Ingrese número de corredor<input style="height: 40px; width: 250px; border-radius: 2px; padding: 15px; border-radius: 5px" type="number" id="nro_de_Corredor" name="nro_de_Corredor" placeholder="Número de corredor" autofocus required>
                </div>

                <div class="col-md-3 text-center">
                    Ingrese apellido<input style="height: 40px; width: 250px; padding: 15px; border-radius: 5px " type="text" id="apellido" name="apellido" placeholder="Apellido" onkeypress="return soloLetras(event)" onpaste="return false" required>
                </div>

                <div class="col-md-3 text-center">
                    Ingrese nombre<input style="height: 40px; width: 250px; padding: 15px; border-radius: 5px" type="text" id="nombre" name="nombre" placeholder="Nombre" onkeypress="return soloLetras(event)" onpaste="return false" required>
                </div>

                <div class="col-md-3 text-center">
                    Fecha de inscripción<input style="height: 40px; width: 250px; padding: 15px; border-radius: 5px" type="date" id="fecha_de_inscripcion" name="fechaDeInscripcion" placeholder="Fecha de inscripción" required>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 5%; margin-right: 5%; margin-top: 2%; margin-bottom: 10px;">
        <div class="col">
            <div id="tildes">
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" style="margin-right: 1%;" id="electro" name="electro" value="1"> <label class="form-check-label" for="inlineCheckbox1" required>Electro</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" style="margin-right: 1%;" id="ergonometria" name="ergometria" value="1"> <label class="form-check-label" for="inlineCheckbox1" required>Ergometria </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input " type="checkbox" style="margin-right: 1%;" id="rayosTorax" name="rayos" value="1"> <label class="form-check-label" for="inlineCheckbox1" required>Rayos Torax </label>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 30%; margin-right: 30%; margin-top: 40px;">
        <div class="col">
            <input type="submit" class="btn btn-primary btn-lg m-1" value="ENVIAR" onclick="return validar()" id="enviar">

            <button class="btn btn-primary btn-lg m-1" id="borrar" name="borrar" type="reset">BORRAR</button>
        </div>
    </div>
</form>

<?php require("includes/footer.php"); ?>