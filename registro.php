

<!doctype html>
<html lang="en">

<head>
  <title>Verificacion-CEPADEM</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styloregistro.css">


  <?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Fecha en el pasado
  ?>

</head>

<body style="background-color: #00243C;">



  <!-- titulo /header -->

  <header class="shadow p-3 mb-5 bg-body-tertiary " style=" background: radial-gradient(circle, #00588D, #00395B, #00243C);margin-bottom: 3rem;">
    <div class="container ">

      <div id="divtitulo" class="container text-center">
        <div class="row" style="margin-right: 180px">
          <div class="col">
            <img src="css/img/mef_1.png" alt="MEF" style="height: 100px; width: 320px; position: relative;margin: 10px; right: 130px; ">
          </div>

          <div class="col">
            <img src="css/img/auditoriacepadembnp.png" alt="MEF" style="height: 150px; width: 500px; position: relative;margin: 10px; right: 180px; ">
          </div>

  

  </header>


  <!-- main   -->
  <main style="position: relative; top: -40px; color: white">

    <div class="container " style="height: 200px; width: 700px; font-family: 'Times New Roman', Times, serif;">

      <div class="card text-start shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="margin: 10px 90px 0px 90px;">


        <!-- cuadro superios intrucciones-->
      
        <blockquote class="blockquote mb-0" style="border-bottom: 1px rgba(182, 182, 182, 0.604);">
        <p class="text-center fs-4"><span id="titulogin">REGISTRO</span></p>
        </blockquote>


        <!---  formulario  ---->
        <div class="container" style="margin-bottom: 10px; color: #00588D;">
          <div class="row">

            <form class="row g-3" method="POST" action="" style="margin-top: 0;">


              <?php
                // Obtener los valores
              $cedula_usuario = isset($_POST['cedula_usuario']) ? $_POST['cedula_usuario'] : '';
              $contrasena_usuario = isset($_POST['contrasena_usuario']) ? $_POST['contrasena_usuario'] : '';
              $correo_usuario = isset($_POST['correo_usuario']) ? $_POST['correo_usuario'] : '';
              $nombre_usuario = isset($_POST['nombre_usuario']) ? $_POST['nombre_usuario'] : '';
              $apellido_usuario = isset($_POST['apellido_usuario']) ? $_POST['apellido_usuario'] : '';
              $usuario_usuario  = isset($_POST['usuario_usuario']) ? $_POST['usuario_usuario'] : '';
              ?>


              
                <div class="col-9">
                <label for="usuario_usuario" class="form-label fw-bold fs-5">Introduzca El Usuario</label>
                <br>
                <input id="imputusuario" class="form-control" id="usuario_usuario" name="usuario_usuario" type="text" placeholder="Introduzca El Usuario " autocomplete="off" required value="<?php echo $usuario_usuario?>">
                </div>
              
              <div class="col-9">
                <label for="correo_usuario" class="form-label fw-bold fs-5">Introduzca El Correo</label>
                <br>
                <input id="imputusuario" class="form-control" id="correo_usuario" name="correo_usuario" type="text" placeholder="Introduzca El Correo " autocomplete="off" required value="<?php echo $correo_usuario?>">
              </div>

              <div class="col-9">
                <label for="nombre_usuario" class="form-label fw-bold fs-5">Introduzca Su Nombre</label>
                <br>
                <input id="imputusuario" class="form-control" id="nombre_usuario" name="nombre_usuario" type="text" placeholder="Introduzca Su nombre " autocomplete="off" required value="<?php echo $nombre_usuario ?>">
              </div>

              <div class="col-9">
                <label for="apellido_usuario" class="form-label fw-bold fs-5">Introduzca Su Apellido</label>
                <br>
                <input id="imputusuario" class="form-control" id="apellido_usuario" name="apellido_usuario" type="text" placeholder="Introduzca Su Apellido " autocomplete="off" required value="<?php echo $apellido_usuario ?>">
              </div>

              <div class="col-9">
                <label for="cedula_usuario" class="form-label fw-bold fs-5">Introduzca La Cédula</label>
                <br>
                <input id="imputusuario" class="form-control" id="cedula_usuario" name="cedula_usuario" type="text" placeholder="Introduzca la Cédula " autocomplete="off" required value="<?php echo $cedula_usuario ?>">
              </div>


             
              <div class="col-9">
              <label for="contrasena_usuario" class="form-label fw-bold fs-5">Introduzca La Contraseña</label>
              <br>
              <input id="imputusuario" class="form-control" id="contrasena_usuario" name="contrasena_usuario" type="password" placeholder="Introduzca la Contraseña" autocomplete="off" required value="<?php echo $contrasena_usuario ?>">
              </div>


              

              <div class="col-4" style="position: relative; left: 20px;">
                <button class="btnconsultar" type="submit" value="Consultar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg>
                  Registrarme</button>
              </div>
            </form>
          </div>

          <div class="container" style="width: 130px; position: absolute; left: 188px; top: 622px ">
            <form action="" method="GET">
              <button class="btnlimpiar" type="submit" value="limpiar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                </svg>
                Limpiar</button>
            </form>
          </div>

          <div class="container" style="width: 130px; position: absolute; left: 340px; top: 622px ">
            <form action="http://dpi-webserver:8080/cepadem/login/login.php" method="GET">
              <button class="btninicio" type="submit" value="limpiar">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
                Login </button>
            </form>
          </div>
        </div>
      </div>



      <!----  fin formulario  ---->

      <!------- proceso registro  ---->

      <?php
// Incluir el archivo de conexión
include 'conexion.php';

// Función para limpiar y validar datos
function validarDatos($dato) {
    // Eliminar espacios en blanco al principio y al final
    $dato = trim($dato);
    // Eliminar barras invertidas
    $dato = stripslashes($dato);
    // Convertir caracteres especiales a entidades HTML
    $dato = htmlspecialchars($dato);
    return $dato;
}

// Verificar si los campos están definidos en el formulario POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario_usuario'],$_POST['correo_usuario'],$_POST['nombre_usuario'],$_POST['apellido_usuario'],$_POST['cedula_usuario'], $_POST['contrasena_usuario'])) {
    
    // Obtener y validar los datos del formulario de registro
    $usuario_usuario  = validarDatos($_POST['usuario_usuario']);
    $cedula_usuario = validarDatos($_POST['cedula_usuario']);
    $contrasena_usuario = validarDatos($_POST['contrasena_usuario']);
    $correo_usuario = validarDatos($_POST['correo_usuario']);
    $nombre_usuario = validarDatos($_POST['nombre_usuario']);
    $apellido_usuario = validarDatos($_POST['apellido_usuario']);

    // Validar cédula con el patrón proporcionado
    $patron_cedula = '/^P$|^(?:PE|E|N|[23456789]|[23456789](?:A|P)?|1[0123]?|1[0123]?(?:A|P)?)$|^(?:PE|E|N|[23456789]|[23456789](?:AV|PI)?|1[0123]?|1[0123]?(?:AV|PI)?)-?$|^(?:PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(?:\d{1,4})-?$|^(PE|E|N|[23456789](?:AV|PI)?|1[0123]?(?:AV|PI)?)-(\d{1,4})-(\d{1,6})$/i';

    if (!preg_match($patron_cedula, $cedula_usuario)) {
        echo '<div class="alert alert-danger text-center h4" role="alert">
        <b> La cédula ingresada no es válida. </b>
        </div>';
        exit();
    }

    // Verificar si la cédula ya existe en la base de datos
    $consulta_existencia = "SELECT cedula FROM login WHERE cedula = '$cedula_usuario'";
    $resultado_existencia = mysqli_query($connection, $consulta_existencia);

    if (mysqli_num_rows($resultado_existencia) > 0) {
        echo '<div class="alert alert-danger text-center h4" role="alert">
        <b> Ya existe un usuario con esa cédula. </b>
        </div>';
        exit();
    }

    // Validar correo electrónico
    if (!filter_var($correo_usuario, FILTER_VALIDATE_EMAIL)) {
        echo '<div class="alert alert-danger text-center h4" role="alert">
        <b> El correo electrónico ingresado no es válido. </b>
        </div>';
        exit();
    }

    // Hashear la contraseña antes de almacenarla en la base de datos
    $contrasena_hasheada = password_hash($contrasena_usuario, PASSWORD_DEFAULT);

    // Insertar los datos en la base de datos
    $query = "INSERT INTO login (usuario, cedula, contrasena, correo, nombre, apellido) VALUES ('$usuario_usuario','$cedula_usuario', '$contrasena_hasheada', '$correo_usuario', '$nombre_usuario', '$apellido_usuario')";

    if (mysqli_query($connection, $query)) {
        echo '<div class="alert alert-primary text-center h4" role="alert">
        <b> Registro exitoso. Ahora puedes iniciar sesión. </b>
        </div>';
    } else {
        echo "Error al registrar: " . mysqli_error($connection);
    }

    // Cerrar la conexión
    mysqli_close($connection);
}
?>


      <!------  fin registro --->
      



    </div>

    

  </main>
  <!-- fin main   -->

  <!-- footer -->

  <footer class="d-flex flex-wrap justify-content-between align-items-center  border-top text-center" style="position: fixed;bottom: 0;left: 0; width: 100%; height: 110px;margin: auto;background: radial-gradient(circle, #00588D, #00395B, #00243C);">

    <div class="container text-center">
      <div class="row">
        <div class="col-md-6 offset-md-3" style="color: white; font-family: Arial; font-size: 18px;">
          <b> Cualquier Consulta puede escribir a: <br>
            <a href="" style="color: rgb(132, 170, 231);">soporte.cepadem@mef.gob.pa</a> O llamar al <b style="color: rgb(132, 170, 231);">506-6100 </b> (Call Center)</b>
        </div>
      </div>
    </div>

  </footer>


  <!-- fin footer-->

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>