<!DOCTYPE html>
<html lang="es">

<head>
  <!--METADATOS-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="GESTION DE INVENTARIO DE MINIMERCADOS">
  <meta name="keywords" content="durabilidad, facilidad, inventario">
  <!--TITULO-->
  <title>VENTAS</title>
  <!--favicon-->
  <link rel="icon" href="../resources/imagenes/logo.png">
  <!--LINKS-->
  <link rel="stylesheet" href="../resources/css/style1.css?2">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!--LINK DE ICONOS-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body>

            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <th class="sort asc">Identificacion</th>
                            <th class="sort asc">Nombre</th>
                            <th class="sort asc">Fecha Ingreso</th>
                            <th class="sort asc">correo</th>
                            <th class="sort asc">Cargo</th>   
                            <th class="sort asc">sueldo</th>                         
                            <th></th>
                            <th></th>
                        </thead>
                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">
                          <?php
                            require ("../model/conexion.php");
                            $objconexion= conexion();
                            $sql = $objconexion -> query("SELECT * FROM empleados
                            INNER JOIN cargos ON empleados.EmpCargo = cargos.IdCargo
                            ");

                            while($resultado = $sql ->fetch_assoc()){
                          ?>

                              <tr>
                                <th scope="row"><?php echo $resultado['EmplIdentificacion']?></th>
                                <th scope="row"><?php echo $resultado['EmpNombre']?></th>
                                <th scope="row"><?php echo $resultado['EmpFechaIngreso']?></th>
                                <th scope="row"><?php echo $resultado['EmpCorreo']?></th>
                                <th scope="row"><?php echo $resultado['CarNombre']?></th>
                                <th scope="row"><?php echo $resultado['CarSueldo']?></th>
                                <th>
                                  <a href="./editar.php?id=<?php echo $resultado['EmplIdentificacion']?>"
                                   class="btn btn-warning">Editar</a>
                                  <a href="" class = "btn btn-danger">Eliminar</a>
                                </th>
                              </tr>

                          <?php
                              }
                          ?>
                        </tbody>
                    </table>
                </div>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </main>
</body>
</html>