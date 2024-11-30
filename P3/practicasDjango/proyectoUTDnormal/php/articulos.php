<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include '../controladores/mostrarArticulos.php';
$articulos = obtenerArticulos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículos</title>
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
            <h2>Inicio</h2>
            <br>
            <hr>
            <br>
            <h1 class="title">Artículos</h1>
            <hr>
            <h1 align="center">Listado</h1> 
            <br>
            <hr>
            <?php if (!empty($articulos)): ?>
                <?php foreach ($articulos as $articulo): ?>
                    <article class="article-item">
                        <?php if (!empty($articulo['imagen'])): ?>
                            <br>
                            <div>
                                <img width="400px" height="300px" src="data:image/jpeg;base64,<?php echo base64_encode($articulo['imagen']); ?>" alt="<?php echo htmlspecialchars($articulo['titulo']); ?>" />
                            </div>
                        <?php endif; ?>
                        <div class="data">
                            <h2><?php echo htmlspecialchars($articulo['titulo']); ?></h2>
                            <p>Descripción: <?php echo htmlspecialchars($articulo['descripcion']); ?></p>
                            <p>Categoría: <?php echo htmlspecialchars($articulo['categoria'] ?? 'Sin categoría'); ?></p>
                            <span class="date">
                                <?php echo htmlspecialchars($articulo['usuario']); ?>
                                <br />
                                <?php echo htmlspecialchars($articulo['creado'] . ' ' . $articulo['hora']); ?>
                               
                                
                            </span>
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay artículos para mostrar.</p>
            <?php endif; ?>
        </div>
    </section>
    <footer>
            <p>Alejandro</p>
    </footer>
</body>
</html>
