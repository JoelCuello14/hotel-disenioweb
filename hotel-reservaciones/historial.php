<?php
include 'php/db.php';

// Consulta todas las reservas en la base de datos
$query = $pdo->prepare("SELECT * FROM reservas ORDER BY fecha_reserva DESC");
$query->execute();

$reservas = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Reservas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Listado de Reservas</h1>

    <?php if (empty($reservas)): ?>
        <p>No hay reservas registradas.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th class="fondo">Habitación</th>
                    <th class="fondo">Cliente</th>
                    <th class="fondo">Email</th>
                    <th class="fondo">Teléfono</th>
                    <th class="fondo">Check-in</th>
                    <th class="fondo">Check-out</th>
                    <th class="fondo">Número de Habitaciones</th>
                    <th class="fondo">Fecha de Reserva</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservas as $reserva): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($reserva['id_habitacion']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['nombre_cliente']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['email_cliente']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['telefono_cliente']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['fecha_check_in']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['fecha_check_out']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['num_habitaciones']); ?></td>
                        <td><?php echo htmlspecialchars($reserva['fecha_reserva']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    
    <a href="index.php">Volver a la página principal</a>
</body>
</html>
