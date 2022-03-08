<?php
        //CONSULTAR
        if (isset($_POST['btn_consultar'])) {
                            
            $num = $_POST['numCorredor'];

            $consulta = $conex->query("SELECT * FROM carrera WHERE nro_de_Corredor = $num");

                
                            while ($row = $consulta->fetch_array()) {
                                echo $row ['apellido']; 

                                } 
        
        }
        //ELIMINAR
        if (isset($_POST['btn_eliminar'])) {
                            
            $num = $_POST['apellido'];

            $consulta = $conex->query("SELECT * FROM carrera WHERE nro_de_Corredor = $num");

            $_DELETE_SQL = "DELETE FROM carrera WHERE apellido = $num";
        }

        echo 'return'
        
        ?>