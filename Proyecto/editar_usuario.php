<?php
include 'acceso.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario_query = "SELECT * FROM usuarios WHERE id = '$id'";
    $usuario_result = $conn->query($usuario_query);
    $usuario = $usuario_result->fetch_assoc();
}
?>

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

<h2>Editar Usuario</h2>
<form action="actualizar_usuario.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required><br>
    <label for="rol">Rol:</label>
    <select name="rol">
        <option value="cliente" <?php if ($usuario['rol'] == 'cliente') echo 'selected'; ?>>Cliente</option>
        <option value="admin" <?php if ($usuario['rol'] == 'admin') echo 'selected'; ?>>Administrador</option>
    </select><br>
    <button type="submit">Actualizar Usuario</button>
</form>
