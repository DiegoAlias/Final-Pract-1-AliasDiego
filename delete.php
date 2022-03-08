<?php

require("conexion.php");


if(isset($_GET['nro_de_Corredor'])){
    $nro_de_Corredor = $_GET['nro_de_Corredor'];
    $query = "DELETE FROM carrera WHERE nro_de_Corredor = $nro_de_Corredor";
    $resultado = mysqli_query($conex,$query);
    if(!$resultado){
        die("consulta fallida");
    }
    $_SESSION['message'] = "El corredor fue eliminado satisfactoriamente";
    $_SESSION['message_type'] = 'danger';
    header("Location: index.php");
}

?>