<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Habitaciones de Hotel</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Reserva de Habitaciones</h1>
    <form action="reservas.php" method="POST">
        <label for="checkin">Fecha de Check-in:</label>
        <input type="date" id="checkin" name="checkin" required>
        
        <label for="checkout">Fecha de Check-out:</label>
        <input type="date" id="checkout" name="checkout" required>
        
        <label for="num_habitaciones">Número de Habitaciones:</label>
        <input type="number" id="num_habitaciones" name="num_habitaciones" min="1" required>
        
        <button type="submit">Buscar Habitaciones</button>
    </form>
</body>
</html>