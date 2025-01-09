<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicació TIME</title>
    <style>
        body {
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        #time {
            font-size: 5em;
            color: #00ffff; /* Neon blue */
            text-shadow: 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff;
        }
    </style>
    <script>
        function updateClock() {
            const timeElement = document.getElementById('time');
            const currentTime = new Date();
            const formattedTime = currentTime.toLocaleTimeString('ca-ES', { hour12: false });
            timeElement.textContent = formattedTime;
        }
        setInterval(updateClock, 1000); // Update every second
        window.onload = updateClock; // Initialize on page load
    </script>
</head>
<body>
    <div id="time">
        <?php
        // Mostra l'hora inicial des del servidor
        date_default_timezone_set("Europe/Madrid"); // Defineix la franja horària
        echo date("H:i:s");
        ?>
    </div>
</body>
</html>
