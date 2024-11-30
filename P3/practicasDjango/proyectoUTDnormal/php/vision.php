<<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|Django Proyecto UTD
    </title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>
<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php" >Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Mision</a></li>
            <li><a href="vision.php">Vision</a></li>
            <li><a href="categorias.php">categorias</a></li>
            <li><a href="articulos.php">articulos</a></li>
            <li><a href="../controladores/logout.php">cerrar session</a></li>
            

        </ul>
    </nav>
    <section id="content">
       <div class="box">
            <h1>Nuestra Vision</h1>
            <hr>
            <p>Somos un equipo destinado al desarrollo de SW</p>
       </div>
    </section>
    <footer>
         <p>Alejandro</p>
    </footer>
</body>
</html>