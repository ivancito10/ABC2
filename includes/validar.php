<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "BDIvan");

// Verificar si se ha enviado el formulario de registro
if (isset($_POST['registrar'])) {
    // Verificar que los campos no estén vacíos
    if (strlen($_POST['PersonaID']) >= 1 && strlen($_POST['TipoCuenta']) >= 1 && strlen($_POST['Saldo']) >= 1) {
        // Obtener los datos del formulario
        $PersonaID = trim($_POST['PersonaID']);
        $TipoCuenta = trim($_POST['TipoCuenta']);
        $Saldo = trim($_POST['Saldo']);

        // Construir la consulta SQL para insertar la nueva cuenta
        $consulta = "INSERT INTO CuentaBancaria (PersonaID, TipoCuenta, Saldo) VALUES ('$PersonaID', '$TipoCuenta', '$Saldo')";

        // Ejecutar la consulta
        mysqli_query($conexion, $consulta);

        // Cerrar la conexión
        mysqli_close($conexion);

        // Redirigir de nuevo a la página de listado de cuentas
        header('Location: ../views/user.php');
        exit(); // Terminar el script después de redirigir
    }
}
?>









?>