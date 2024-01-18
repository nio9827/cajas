<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "audi_cepadem";

            // Crear conexión
            $connection = mysqli_connect($servername, $username, $password, $dbname);

            // Verificar conexión
            if (!$connection) {
              die("Error en la conexión: " . mysqli_connect_error());
            }

?>


