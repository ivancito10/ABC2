<?php

require_once("_db.php");

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'editar_cuenta':
            editar_cuenta();
            break;

        case 'eliminar_cuenta':
            eliminar_cuenta();
            break;

        // Agregar más casos según sea necesario

        default:
            // Manejar el caso predeterminado si es necesario
            break;
    }
}

function editar_cuenta()
{
    $conexion = mysqli_connect("localhost", "root", "", "BDIvan");

    // Obtener los datos del formulario
    $id = $_POST['id'];
    $personaID = $_POST['PersonaID'];
    $tipoCuenta = $_POST['TipoCuenta'];
    $saldo = $_POST['Saldo'];

    // Preparar la consulta SQL para actualizar la cuenta bancaria
    $consulta = "UPDATE CuentaBancaria SET PersonaID = '$personaID', TipoCuenta = '$tipoCuenta', Saldo = '$saldo' WHERE CuentaID = '$id'";

    // Ejecutar la consulta
    mysqli_query($conexion, $consulta);

    // Redirigir de vuelta a la vista de cuentas bancarias
    header('Location: ../views/user.php');
}

function eliminar_cuenta()
{
    $conexion = mysqli_connect("localhost", "root", "", "BDIvan");

    // Obtener el ID de la cuenta bancaria a eliminar
    $id = $_POST['id'];

    // Preparar la consulta SQL para eliminar la cuenta bancaria
    $consulta = "DELETE FROM CuentaBancaria WHERE CuentaID = $id";

    // Ejecutar la consulta
    mysqli_query($conexion, $consulta);

    // Redirigir de vuelta a la vista de cuentas bancarias
    header('Location: ../views/user.php');
}

?>
