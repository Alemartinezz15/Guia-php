<?php
include 'conexion.php';  

// Consultar las opciones del menú
$sql = "SELECT * FROM menu";
$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía de PHP</title>
</head>
<body>

    <h1>Guía de PHP</h1>
    
    <!-- Menú dinámico -->
    <nav>
        <ul>
            <?php
            
            if ($resultado->num_rows > 0) {
                // Mostrar cada opción 
                while ($row = $resultado->fetch_assoc()) {
                    echo "<li><a href='" . $row['link'] . "'>" . $row['nombre'] . "</a> - " . $row['descripcion'] . "</li>";
                }
            } else {
                echo "<li>No hay opciones en el menú.</li>";
            }
            ?>
        </ul>
    </nav>

    <p>Bienvenido a la guía completa de PHP. </p>

</body>
</html>

<?php
$conn->close();  
?>
