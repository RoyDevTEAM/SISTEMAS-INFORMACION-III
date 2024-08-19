<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiesta - Salón de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
        }
        .hero-section {
            background-image: url('../img/img-fiesta.png');
            background-size: cover;
            background-position: center;
        }
        .event-image {
            border-radius: 8px;
        }
        .hero-text-bg {
            background-color: rgba(0, 0, 0, 0.3); /* Semi-transparent black */
            padding: 1rem;
            border-radius: 8px;
            display: inline-block;
        }
    </style>
</head>

<body class="bg-[#18191b] text-gray-800">

    <!-- Navbar -->
    <nav class="navbar-transparent shadow-lg sticky top-0 z-50 transition-opacity duration-300" id="navbar">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <a href="../main.php" class="text-2xl font-bold text-gray-800">Salón de Eventos</a>
            <div>
                <a href="../main.php" class="text-gray-800 hover:text-gray-500 mx-2">Inicio</a>
                <a href="../eventos.php" class="text-gray-800 hover:text-gray-500 mx-2">Servicios</a>
                <a href="#" class="text-gray-800 hover:text-gray-500 mx-2">Reservas</a>
                <a href="#" class="text-gray-800 hover:text-gray-500 mx-2">Contacto</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section h-64 flex items-center justify-center text-center">
        <div class="hero-text-bg">
            <h1 class="text-4xl font-bold text-white mb-4">Fiesta</h1>
            <p class="text-lg text-white mb-8">Haz de tu fiesta una celebración inolvidable con nuestras instalaciones.</p>
        </div>
    </section>

    <!-- Detalles del Evento -->
    <section class="container mx-auto py-16">
        <div class="flex flex-col md:flex-row items-center md:items-start">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="../img/fiesta.png" alt="Fiesta" class="event-image w-full object-cover">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="text-3xl font-bold mb-4">Detalles de la Fiesta</h2>
                <p class="text-lg mb-4">Convierte tu fiesta en un evento inolvidable con nuestras instalaciones y servicios. Desde decoración temática hasta catering especializado, ofrecemos todo lo que necesitas para que tu celebración sea un éxito.</p>
                <p class="text-lg mb-4">Nuestra sala está equipada con tecnología de vanguardia y un equipo de soporte dedicado para asegurar que tu fiesta sea memorable. Disponemos de opciones personalizadas para adaptarnos a tus necesidades y preferencias.</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Capacidad: 200 Personas</li>
                    <li>Decoración Temática Personalizada</li>
                    <li>Catering Especializado</li>
                    <li>Equipo de Soporte Profesional</li>
                </ul>
                <div class="flex space-x-4">
                    <a href="#" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-700">
                        <i class="fas fa-calculator mr-2"></i> Cotizar
                    </a>
                    <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                        <i class="fas fa-images mr-2"></i> Galería
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Suscripción al Boletín -->
    <section class="bg-gray-200 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Suscríbete a Nuestro Boletín</h2>
            <p class="text-gray-600 mb-6">Recibe noticias y actualizaciones sobre nuestros eventos y ofertas especiales.</p>
            <form action="#" method="post" class="flex justify-center">
                <input type="email" placeholder="Tu correo electrónico" class="border border-gray-300 p-2 rounded-l" required>
                <button type="submit" class="bg-purple-600 text-white py-2 px-4 rounded-r hover:bg-purple-700">Suscribirse</button>
            </form>
        </div>
    </section>

</body>
</html>
