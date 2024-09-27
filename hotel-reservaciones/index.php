<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Habitaciones de Hotel</title>
    <link rel="stylesheet" href="css/styles.css">
    <script>
        function validarFechas(event) {
            const checkin = document.getElementById('checkin').value;
            const checkout = document.getElementById('checkout').value;

            if (new Date(checkout) <= new Date(checkin)) {
                alert("La fecha de Check-out debe ser posterior a la fecha de Check-in.");
                event.preventDefault(); // Evitar el envío del formulario
            }
        }
    </script>
</head>
<body>
<h1>Reserva de Habitaciones</h1>
    <form action="reservas.php" method="POST" onsubmit="validarFechas(event)">
        <label for="checkin">Fecha de Check-in:</label>
        <input type="date" id="checkin" name="checkin" required>
        
        <label for="checkout">Fecha de Check-out:</label>
        <input type="date" id="checkout" name="checkout" required>
        
        <label for="num_habitaciones">Número de Habitaciones:</label>
        <input type="number" id="num_habitaciones" name="num_habitaciones" min="1" required>
        
        <button type="submit">Buscar Habitaciones</button>
    </form>
    <a href="historial.php">Ver reservas</a>
</body>
</html>
