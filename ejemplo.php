<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>🌹 La Rosa Eterna 🌹</title>
    <style>
        body {
            background-color: #1a001a;
            color: #fff;
            text-align: center;
            font-family: 'Georgia', serif;
            overflow: hidden;
        }

        h1 {
            margin-top: 40px;
            font-size: 3em;
            color: #ffb6c1;
        }

        .rosa {
            font-size: 150px;
            margin: 20px auto;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .petalo {
            position: absolute;
            top: -50px;
            font-size: 24px;
            color: #ff3366;
            animation: caer 5s linear infinite;
            opacity: 0.8;
        }

        @keyframes caer {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>

    <h1>🌹 La Rosa Eterna 🌹</h1>
    <div class="rosa">🌹</div>
    <p>El amor verdadero nunca muere... los pétalos caen, pero la rosa vive para siempre.</p>

    <script>
        // Generar pétalos infinitamente
        function crearPetalo() {
            const petalo = document.createElement("div");
            petalo.classList.add("petalo");
            petalo.innerText = "🌸";

            // Posición aleatoria horizontal
            petalo.style.left = Math.random() * window.innerWidth + "px";

            // Tamaño aleatorio
            const size = Math.random() * 20 + 10;
            petalo.style.fontSize = size + "px";

            // Duración aleatoria
            const duracion = Math.random() * 5 + 3;
            petalo.style.animationDuration = duracion + "s";

            document.body.appendChild(petalo);

            // Eliminar el pétalo cuando termine la animación
            setTimeout(() => {
                document.body.removeChild(petalo);
            }, duracion * 1000);
        }

        // Crear pétalos cada cierto tiempo
        setInterval(crearPetalo, 300);
    </script>

</body>
</html>

