<?php
// Incluir el archivo de conexión a la base de datos
include('../../conexion.php');

// Obtener datos de la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilo.css">
    <title>Datos de Usuarios</title>
</head>
<body>

    <h1>Datos de Usuarios</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Fecha de Registro</th>
        </tr>
        <?php
        // Mostrar datos en la tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['telefono'] . "</td>";
            echo "<td>" . $row['correo'] . "</td>";
            echo "<td>" . $row['fecha registro'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <p><a href="../../index.php">Volver a la página principal</a></p>

</body>
</html>
