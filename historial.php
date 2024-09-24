<?php
include 'php/db.php';

// Consulta a la base de datos para obtener las reservas del usuario
$query = $pdo->prepare("SELECT * FROM reservas WHERE email_cliente = :email_cliente ORDER BY fecha_reserva DESC");
$query->execute(['email_cliente' => $_GET['email_cliente']]);

$reservas = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Reservas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Historial de Reservas</h1>
    
    <?php if (empty($reservas)): ?>
        <p>No tiene reservas realizadas.</p>
        <a href="index.php">Volver a la página principal</a>
    <?php else: ?>
        <table>
            <tr>
                <th>Habitación</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Número de Habitaciones</th>
                <th>Fecha de Reserva</th>
            </tr>
            <?php foreach ($reservas as $reserva): ?>
                <tr>