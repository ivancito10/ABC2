
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Lista de Cuentas</title>
</head>

<body>
    <div class="container is-fluid">
        <br>
        <div class="col-xs-12">
            <h1>Lista de Cuentas</h1>
            <br>
            <div>
                <a class="btn btn-success" href="../index.php">Crear Nuevo</a>
            </div>
            <br>
            <br>

            <table class="table table-striped table-dark" id="table_id">
                <thead>
                    <tr>
                        <th>Nombre de Persona</th>
                        <th>Tipo de Cuenta</th>
                        <th>Saldo</th>
                        <th>Fecha de Apertura</th>
                        <th style="width:150px">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "BDIvan");
                    $SQL = "SELECT c.*, p.Nombre AS NombrePersona FROM CuentaBancaria c JOIN Persona p ON c.PersonaID = p.PersonaID";
                    $dato = mysqli_query($conexion, $SQL);
                    
                    if ($dato->num_rows > 0) {
                        while ($fila = mysqli_fetch_array($dato)) {
                            ?>
                            <tr>
                                <td><?php echo $fila['NombrePersona']; ?></td>
                                <td><?php echo $fila['TipoCuenta']; ?></td>
                                <td><?php echo $fila['Saldo']; ?></td>
                                <td><?php echo $fila['FechaApertura']; ?></td>
                    
                                <td>
                                    <a class="btn btn-primary btn-sm" href="editar_user.php?idcuenta=<?php echo $fila['CuentaID']; ?>">Editar</a>
                                    <a class="btn btn-danger btn-sm" href="eliminar_user.php?idcuenta=<?php echo $fila['CuentaID']; ?>">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr class="text-center">
                            <td colspan="5">No existen registros</td>
                        </tr>
                        <?php
                    }
                    
                    ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>
</html>
