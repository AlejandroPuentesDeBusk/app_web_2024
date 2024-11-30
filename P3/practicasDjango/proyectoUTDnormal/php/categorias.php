<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include '../controladores/mostrarCategorias.php';
$categorias = obtenerCategorias();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
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
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Misión</a></li>
            <li><a href="vision.php">Visión</a></li>
            <li><a href="categorias.php">Categorías</a></li>
            <li><a href="articulos.php">Artículos</a></li>
            <li><a href="../controladores/logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Inicio</h1>
            <hr>
            <h2>Categorías</h2>
            <br>
            <hr>
            <?php if (!empty($categorias)): ?>
                <h1 align="center">Listado</h1>
                <hr>
                <?php foreach ($categorias as $categoria): ?>
                    <article class="article-item">
                        <div class="data">
                            <h2><?php echo htmlspecialchars($categoria['nombre']); ?></h2>
                            <p>Descripción: <?php echo htmlspecialchars($categoria['descripcion']); ?></p>
                            <span class="date"><?php echo htmlspecialchars($categoria['creado']. ' ' . $categoria['hora']); ?></span>
                            <hr>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay categorías para mostrar.</p>
            <?php endif; ?>
        </div>
    </section>
    <footer>
            <p>Alejandro</p>
    </footer>
</body>
</html>
