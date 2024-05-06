
<?php
// Obtener el ID de la cuenta bancaria desde la URL
$id = $_GET['idcuenta'];

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "BDIvan");

// Consultar la cuenta bancaria correspondiente
$consulta = "SELECT * FROM CuentaBancaria WHERE CuentaID = $id";
$resultado = mysqli_query($conexion, $consulta);
$cuenta = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cuenta bancaria</title>
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body id="page-top">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
                        <br>
                        <h3 class="text-center">Editar cuenta bancaria</h3>
                        <form action="../includes/_functions.php" method="POST">
                            <div class="form-group">
                                <label for="PersonaID" class="form-label">ID de Persona</label>
                                <input  type="text" id="PersonaID" name="PersonaID" class="form-control" value="<?php echo $cuenta['PersonaID']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="TipoCuenta" class="form-label">Tipo de Cuenta</label>
                                <input type="text" id="TipoCuenta" name="TipoCuenta" class="form-control" value="<?php echo $cuenta['TipoCuenta']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Saldo" class="form-label">Saldo</label>
                                <input type="text" id="Saldo" name="Saldo" class="form-control" value="<?php echo $cuenta['Saldo']; ?>" required>
                            </div>
                            <input type="hidden" name="accion" value="editar_cuenta">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <br>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                                <a href="user.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>