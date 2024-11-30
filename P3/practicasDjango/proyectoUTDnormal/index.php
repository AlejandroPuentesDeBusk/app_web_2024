<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | PHP Proyecto UTD</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen PHP" title="PHP">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            
            <?php if ($loggedIn): ?>
                <li><a href="php/acercade.php">Acerca de</a></li>
                <li><a href="php/mision.php">Misión</a></li>
                <li><a href="php/vision.php">Visión</a></li>
                <li><a href="php/categorias.php">Categorías</a></li>
                <li><a href="php/articulos.php">Artículos</a></li>
                <li><a href="controladores/logout.php">Cerrar Sesión</a></li>
            <?php else: ?>
                <li><a href="php/registro.php">Registro</a></li>
                <li><a href="php/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Inicio</h1>
            <hr>
            <?php if ($loggedIn): ?>
                <p>Bienvenido  <?php echo htmlspecialchars($_SESSION['username']); ?></p>
                <p><?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <?php else: ?>
                <p>Por favor, inicia sesión.</p>
            <?php endif; ?>
        </div>
    </section>
    <footer>
        <p>PHP Proyecto UTD &copy; 2024</p>
    </footer>
</body>
</html>
