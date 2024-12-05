<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Incluir la conexión a la base de datos
require_once 'acceso.php';

// Obtener usuarios
$search_query = "";
if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $search_query = " AND (nombre LIKE '%$search%' OR email LIKE '%$search%')";
}

$usuarios_query = "SELECT * FROM usuarios WHERE rol = 'cliente'" . $search_query;
$usuarios_result = $conn->query($usuarios_query);

// Obtener mensajes de la tabla contactos
$mensajes_query = "SELECT c.id, c.nombre AS usuario, c.mensaje, c.fecha 
                   FROM contactos c";

if (isset($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $mensajes_query .= " WHERE c.nombre LIKE '%$search%' OR c.mensaje LIKE '%$search%'";
}

$mensajes_result = $conn->query($mensajes_query);

// Obtener las calificaciones más recientes
$calificaciones_query = "SELECT c.id, c.usuario_id, c.rating, c.fecha 
                         FROM calificacion c
                         INNER JOIN (
                             SELECT usuario_id, MAX(fecha) AS max_fecha
                             FROM calificacion
                             GROUP BY usuario_id
                         ) AS latest_calif ON c.usuario_id = latest_calif.usuario_id 
                         AND c.fecha = latest_calif.max_fecha";
$calificaciones_result = $conn->query($calificaciones_query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero de Administración</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            color: #007BFF;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        form input, form select, form button {
            padding: 8px;
            margin: 5px;
        }
        form button {
            background-color: #007BFF;
            color: white;
            border: none;
        }
        form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Bienvenido al Tablero de Administración</h1>
    <p>Hola, <?php echo $_SESSION['user_name']; ?>. Este es tu panel de administración.</p>

    <!-- Formulario para crear un nuevo usuario -->
    <h2>Crear Nuevo Usuario</h2>
    <form action="crear_usuario.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" required><br>
        <label for="rol">Rol:</label>
        <select name="rol">
            <option value="cliente">Cliente</option>
            <option value="admin">Administrador</option>
        </select><br>
        <button type="submit">Crear Usuario</button>
    </form>

    <!-- Formulario de Búsqueda -->
    <h2>Buscar</h2>
    <form method="GET" action="tablero.php">
        <input type="text" name="search" placeholder="Buscar por nombre o email...">
        <button type="submit">Buscar</button>
    </form>

    <!-- Tabla de Usuarios -->
    <h2>Usuarios</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($usuario = $usuarios_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nombre']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td>
                        <a href="editar_usuario.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                        <a href="eliminar_usuario.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Tabla de Mensajes -->
    <h2>Mensajes</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($mensaje = $mensajes_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $mensaje['id']; ?></td>
                    <td><?php echo $mensaje['usuario']; ?></td>
                    <td><?php echo $mensaje['mensaje']; ?></td>
                    <td><?php echo $mensaje['fecha']; ?></td>
                    <td>
                        <a href="ver_mensaje.php?id=<?php echo $mensaje['id']; ?>">Ver Detalles</a>
                        <a href="eliminar_mensaje.php?id=<?php echo $mensaje['id']; ?>" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Tabla de Calificaciones -->
    <h2>Calificaciones</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Calificación</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($calificacion = $calificaciones_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $calificacion['id']; ?></td>
                    <td>
                        <?php 
                        // Obtener el nombre del usuario a partir de su ID
                        $usuario_id = $calificacion['usuario_id'];
                        $usuario_query = "SELECT nombre FROM usuarios WHERE id = $usuario_id";
                        $usuario_result = $conn->query($usuario_query);
                        $usuario = $usuario_result->fetch_assoc();
                        echo $usuario['nombre']; 
                        ?>
                    </td>
                    <td><?php echo $calificacion['rating']; ?></td>
                    <td><?php echo $calificacion['fecha']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
