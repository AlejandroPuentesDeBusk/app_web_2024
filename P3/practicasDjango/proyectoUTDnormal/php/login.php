<?php
// Conexión a la base de datos
$host = "localhost";
$user = "root"; // Cambia esto si usas otro usuario
$password = "0711white"; // Cambia esto si tienes una contraseña
$dbname = "proyecto_utd";

$conn = new mysqli($host, $user, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para verificar el usuario
    $sql = "SELECT * FROM usuarios WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verifica la contraseña (en texto plano, sin hash)
        if ($password === $user['password']) { 
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['privilegio'] = $user['privilegio'];

            // Redirige al usuario al archivo index.html
            header("Location: ../index.html");
            exit;
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado'); window.history.back();</script>";
    }
}
$conn->close();
?>

