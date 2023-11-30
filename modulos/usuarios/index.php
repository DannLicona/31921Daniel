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
    <title>Iniciar Sesión</title>
</head>
<body>

    <h1>Iniciar Sesión</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID:</label>
        <input type="text" name="id" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required><br>

        <?php
        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recuperar los datos del formulario
            $id = $_POST['id'];
            $password = $_POST['password'];

            // Verificar las credenciales en la base de datos
            $sql = "SELECT * FROM usuarios WHERE id = '$id' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<span class='exito'>Inicio de sesión exitoso</span>";
                // Puedes redirigir a otra página después de iniciar sesión
                // header('Location: otra_pagina.php');
                // exit();
            } else {
                echo "<span class='error'>Credenciales incorrectas</span>";
            }
        }
        ?>

        <input type="submit" value="Iniciar Sesión">
    </form>

    <p><a href="../../index.php">Volver a la página principal</a></p>

</body>
</html>
