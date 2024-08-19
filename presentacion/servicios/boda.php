<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boda - Salón de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
        }
        .hero-section {
            background-image: url('../img/img-boda.png');
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
            <h1 class="text-4xl font-bold text-white mb-4">Boda</h1>
            <p class="text-lg text-white mb-8">Celebra tu boda en un ambiente elegante y romántico.</p>
        </div>
    </section>

    <!-- Detalles del Evento -->
    <section class="container mx-auto py-16">
        <div class="flex flex-col md:flex-row items-center md:items-start">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="../img/boda.png" alt="Boda" class="event-image w-full object-cover">
            </div>
            <div class="md:w-1/2 md:pl-8">
                <h2 class="text-3xl font-bold mb-4">Detalles de la Boda</h2>
                <p class="text-lg mb-4">Nuestro salón ofrece un entorno romántico y elegante para que tu boda sea inolvidable. Desde decoración exquisita hasta un servicio impecable, nos encargamos de todos los detalles para que tú solo te concentres en disfrutar el día.</p>
                <p class="text-lg mb-4">Cada boda es única, por eso ofrecemos opciones personalizadas para adaptarnos a tus gustos y necesidades. Deja en nuestras manos la organización y disfruta de un día perfecto junto a tus seres queridos.</p>
                <ul class="list-disc list-inside mb-4">
                    <li>Capacidad: 150 Personas</li>
                    <li>Decoración Temática y Personalizada</li>
                    <li>Opciones de Catering Gourmet</li>
                    <li>Servicio de Coordinación de Eventos</li>
                </ul>
                <div class="flex space-x-4">
                    <a href="#" id="cotizarBtn" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-700">
                        <i class="fas fa-calculator mr-2"></i> Cotizar
                    </a>
                    <a href="#" id="galeriaBtn" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                        <i class="fas fa-images mr-2"></i> Galería
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Cotización -->
    <section id="cotizacionForm" class="container mx-auto py-16 hidden">
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Cotiza tu Evento de Boda</h2>
                <p class="text-lg text-gray-600">Por favor, completa el siguiente formulario para recibir una cotización personalizada. Nuestro equipo se pondrá en contacto contigo para discutir todos los detalles.</p>
            </div>

            <form action="submit_quote_boda.php" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <label for="nombre" class="block text-lg font-semibold text-gray-700 mb-2">Nombre Completo:</label>
                        <input type="text" id="nombre" name="nombre" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                    </div>
                    <div>
                        <label for="email" class="block text-lg font-semibold text-gray-700 mb-2">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                    </div>
                    <div>
                        <label for="telefono" class="block text-lg font-semibold text-gray-700 mb-2">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                    </div>
                    <div>
                        <label for="fecha" class="block text-lg font-semibold text-gray-700 mb-2">Fecha del Evento:</label>
                        <input type="date" id="fecha" name="fecha" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="num_invitados" class="block text-lg font-semibold text-gray-700 mb-2">Número de Invitados:</label>
                    <input type="number" id="num_invitados" name="num_invitados" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                </div>

                <div class="mb-8">
                    <label for="servicios" class="block text-lg font-semibold text-gray-700 mb-2">Selecciona los Servicios Adicionales:</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <input type="checkbox" id="decoracion" name="servicios[]" value="decoracion" class="mr-2">
                            <label for="decoracion" class="text-lg">Decoración Floral Personalizada</label>
                        </div>
                        <div>
                            <input type="checkbox" id="catering" name="servicios[]" value="catering" class="mr-2">
                            <label for="catering" class="text-lg">Catering Gourmet</label>
                        </div>
                        <div>
                            <input type="checkbox" id="fotografia" name="servicios[]" value="fotografia" class="mr-2">
                            <label for="fotografia" class="text-lg">Fotografía y Video Profesional</label>
                        </div>
                        <div>
                            <input type="checkbox" id="musica" name="servicios[]" value="musica" class="mr-2">
                            <label for="musica" class="text-lg">Música en Vivo</label>
                        </div>
                        <div>
                            <input type="checkbox" id="iluminacion" name="servicios[]" value="iluminacion" class="mr-2">
                            <label for="iluminacion" class="text-lg">Iluminación Especial</label>
                        </div>
                        <div>
                            <input type="checkbox" id="banquete" name="servicios[]" value="banquete" class="mr-2">
                            <label for="banquete" class="text-lg">Banquete de Bodas</label>
                        </div>
                    </div>
                </div>

                <div class="mb-8">
                    <label for="comentarios" class="block text-lg font-semibold text-gray-700 mb-2">Comentarios Adicionales:</label>
                    <textarea id="comentarios" name="comentarios" rows="5" class="w-full p-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-purple-600 text-white py-3 px-8 rounded-lg hover:bg-purple-700 transition-colors">Enviar Cotización</button>
                </div>
            </form>
        </div>
    </section>


    <!-- Sección de Galería -->
    <section id="galeriaSection" class="container mx-auto py-16 hidden">
        <div class="bg-white p-10 rounded-lg shadow-lg">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Galería de la Boda</h2>
                <p class="text-lg text-gray-600">Explora algunas de las imágenes destacadas de eventos de bodas celebrados en nuestro salón.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <img src="../img/galeria/boda/boda1.png" alt="Galería Boda 1" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div>
                    <img src="../img/galeria/boda/boda2.png" alt="Galería Boda 2" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div>
                    <img src="../img/galeria/boda/boda3.png" alt="Galería Boda 3" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div>
                    <img src="../img/galeria/boda/boda4.png" alt="Galería Boda 4" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div>
                    <img src="../img/galeria/boda/boda5.png" alt="Galería Boda 5" class="w-full h-48 object-cover rounded-lg">
                </div>
                <div>
                    <img src="../img/galeria/boda/boda6.png" alt="Galería Boda 6" class="w-full h-48 object-cover rounded-lg">
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


    <script>
    document.getElementById('cotizarBtn').addEventListener('click', function(e) {
        e.preventDefault();
        var cotizacionForm = document.getElementById('cotizacionForm');
        cotizacionForm.classList.toggle('hidden');
        cotizacionForm.scrollIntoView({ behavior: 'smooth' });
    });
    document.getElementById('galeriaBtn').addEventListener('click', function(e) {
        e.preventDefault();
        var galeriaSection = document.getElementById('galeriaSection');
        galeriaSection.classList.toggle('hidden');
        galeriaSection.scrollIntoView({ behavior: 'smooth' });
    });
</script>


</body>
</html>
