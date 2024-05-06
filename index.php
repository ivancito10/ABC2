<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de nueva cuenta</title>

    <link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body id="page-top">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <br>
                        <br>
                        <h3 class="text-center">Registro de nueva cuenta</h3>
                        <div class="form-group">
                            <form action="./includes/validar.php" method="POST">
                                <label for="PersonaID" class="form-label">PersonaID *</label>
                                <input type="text" id="PersonaID" name="PersonaID" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="TipoCuenta" class="form-label">Tipo de Cuenta *</label>
                            <select id="TipoCuenta" name="TipoCuenta" class="form-control" required>
                                <option value="Credito">Crédito</option>
                                <option value="Ahorro">Ahorro</option>
                                <option value="Corriente">Corriente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Saldo" class="form-label">Saldo *</label>
                            <input type="text" id="Saldo" name="Saldo" class="form-control" required>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" value="Registrar" class="btn btn-success" name="registrar">
                            <a href="./views/user.php" class="btn btn-danger">Cancelar</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
