<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO MARVENT</title>
  <link rel="icon" href="../resources/imagenes/logo.png">
  <link rel="stylesheet" href="../resources/css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>


<section class="container-fluid">
  <div class="row">
    <!--BARRA DE NAVEGACION-->
    <nav class="d-flex col-xxl-12 col-xl-12 col-md-12 edit5 ">


      <div class="modal-body text-lg-center ingresar">
        <form action="../controller/editarDatos.php" method="POST">
          <p>Nombre del empleado</p>

          <?php

          $id = $_GET['id'];

          require("../model/conexion.php");
          $objconexion = conexion();

          $sql = "SELECT * from empleados where EmplIdentificacion=" . $_REQUEST['id'];

          $resultado = $objconexion->query($sql);
          $row = $resultado->fetch_assoc();
          ?>

          <input type="hidden" name="Id" value="<?php echo $row['EmplIdentificacion']; ?>">
          <input type="text" name="nombre_empleado" required placeholder="preciotatal" value="<?php echo $row['EmpNombre'] ?>">
          <p>Fecha de ingreso</p>
          <input type="text" name="Fecha_ingreso" required placeholder="cantidadtotal" value="<?php echo $row['EmpFechaIngreso'] ?>">
          <p>Correo personal</p>
          <input type="text" name="Correo_empleado" required placeholder="nombreclie" value="<?php echo $row['EmpCorreo'] ?>">
          <p>genero del empleado</p>
          <input type="text" name="Genero_empleado" required placeholder="nombreusu" value="<?php echo $row['EmpGenero'] ?>">
          <p>cargo del empleado</p>
          <input type="text" name="Cargo_empleado" required placeholder="nombreusu" value="<?php echo $row['EmpCargo'] ?>">

      </div>
      <div class="modal-footer">
        <a href="listaremp.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button></a>
        <button type="submit" name="enviar" class="btn btn-primary">Actualizar</button>

      </div>
      </form>
  </div>
  </div>
</section>

<footer>

</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>