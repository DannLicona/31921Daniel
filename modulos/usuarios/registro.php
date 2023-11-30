<?php
// Incluir el archivo de conexión a la base de datos
include('../../conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Estilo.css">
    <title>Crear Usuario</title>
</head>
<body>

    <h1>Registro de Usuario</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <?php
        // Incluir el archivo de conexión a la base de datos
        include('../../conexion.php');

        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar los datos del formulario
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            // Insertar datos en la base de datos
            $sql = "INSERT INTO usuarios (nombre, telefono, correo, password) VALUES ('$nombre', '$telefono', '$correo', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<span class='exito'>Registro exitoso</span>";
            } else {
                echo "<span class='error'>Error al registrar usuario: " . $conn->error . "</span>";
            }
        }
        ?>

        <input type="submit" value="Registrar">
    </form>

    <p><a href="../../index.php">Volver a la página principal</a></p>

</body>
</html>
-