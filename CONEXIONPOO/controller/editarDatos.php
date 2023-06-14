<?php
$id3 = $_POST['Id'];

require '../model/conexion.php';
$objconexion = conexion();
$nombre = $_POST['nombre_empleado'];
$fecha = $_POST['Fecha_ingreso'];
$correo = $_POST['Correo_empleado'];
$genero = $_POST['Genero_empleado'];
$cargo = $_POST['Cargo_empleado'];

$editar2 = "UPDATE `empleados` SET `EmpNombre`='$nombre',`EmpFechaIngreso`='$fecha',`EmpCorreo`='$correo',`EmpGenero`='$genero', `EmpCargo`='$cargo' where EmplIdentificacion=" . $id3;

$resultado = mysqli_query($objconexion, $editar2);

if ($resultado) {
    echo "<script languaje='JavaScript'>
     alert('Los datos se editaron correctamente de la BD');
     location.assign('../views/listaremp.php');
     </script>";
} else {
    echo "<script languaje='JavaScript'>
    alert('Los datos No se editaron correctamente de la BD');
    location.assign('../views/listaremp.php');
    </script>";
}
