<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | PHP Proyecto UTD</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen PHP" title="PHP">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="registro.php" class="active">Registro</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registro de Usuario</h1>
            <hr>
            <form id="registerForm" method="POST" action="../controladores/registrarUsuario.php">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                <label for="first_name">Nombre:</label>
                <input type="text" id="first_name" name="first_name" placeholder="Ingresa tu nombre" required>

                <label for="last_name">Apellido:</label>
                <input type="text" id="last_name" name="last_name" placeholder="Ingresa tu apellido" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

                <label for="confirm_password">Confirmar Contraseña:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirma tu contraseña" required>

                <button type="submit">Registrarse</button>
            </form>
        </div>
    </section>
    <footer>
            <p>Alejandro</p>
    </footer>
</body>
</html>
