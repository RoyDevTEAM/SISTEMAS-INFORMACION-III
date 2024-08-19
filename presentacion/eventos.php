<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salón de Eventos - Eventos Ofrecidos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        
        /* Transparent navbar */
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.5); /* Semi-transparent white */
        }

        .event-container {
            position: relative;
            overflow: hidden;
        }

        .event-image {
            position: relative;
            z-index: 0;
        }

        .event-content {
            position: relative;
            z-index: 2;
            background-color: white;
        }

        /* Overlay for event capacity */
        .capacity-overlay {
            position: absolute;
            top: 200px;
            left: 0px;
            background-color: rgba(128, 0, 128, 0.7); /* Lila con 70% de transparencia */
            color: white;
            padding: 4px 8px; /* Ajusta el padding para reducir el tamaño */
            border-bottom-right-radius: 8px;
            border-top-right-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%; /* Ajusta el ancho automáticamente basado en el contenido */
            height: auto; /* Ajusta la altura automáticamente basado en el contenido */
            max-width: 50%; /* Limita el ancho máximo si es necesario */
            z-index: 1;
        }
    </style>
</head>

<body class="bg-[#18191b] text-gray-800 relative">

    <!-- Navbar -->
    <nav class="navbar-transparent shadow-lg sticky top-0 z-50 transition-opacity duration-300" id="navbar">
        <div class="container mx-auto p-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">Salón de Eventos</a>
            <div>
                <a href="main.php" class="text-gray-800 hover:text-gray-500 mx-2">Inicio</a>
                <a href="eventos.php" class="text-gray-800 hover:text-gray-500 mx-2">Servicios</a>
                <a href="#" class="text-gray-800 hover:text-gray-500 mx-2">Reservas</a>
                <a href="#" class="text-gray-800 hover:text-gray-500 mx-2">Contacto</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('img/img-servicios.png');">
        <div class="bg-black bg-opacity-50 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Servicios Exclusivos para Cada Ocasión</h1>
            <p class="text-lg mb-8">Desde bodas elegantes hasta eventos corporativos, descubre cómo podemos hacer tu celebración inolvidable.</p>
            <a href="eventos.php" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded">Nuestros Servicios</a>
        </div>
    </section>



   <!-- Eventos Ofrecidos -->
    <section class="container mx-auto py-16">
        <h1 class="text-4xl font-bold text-center mb-8">Reuniones & Eventos</h1>
        <p class="text-lg text-center mb-8">
            Organice su próximo evento con nosotros. El Hotel Camino Real es uno de los mejores hoteles para organizar reuniones en Santa Cruz. Nuestro diseño e interiores elegantes y modernos inspiran reuniones y eventos corporativos con una energía dinámica. Con nueve salas de reuniones distintivas, ofrecemos un lugar impresionante para reuniones, conferencias y convenciones de hasta 300 invitados.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Evento 1 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 150 Personas
                </div>
                <img src="img/boda.png" alt="Boda" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Boda</h3>
                    <p class="text-gray-600 mb-4">Celebra tu boda en un ambiente elegante y romántico.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/boda-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/boda.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 200 Personas
                </div>
                <img src="img/fiesta.png" alt="Fiesta" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Fiesta</h3>
                    <p class="text-gray-600 mb-4">Haz de tu fiesta una celebración inolvidable con nuestras instalaciones.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/fiesta-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/fiesta.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 3 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 100 Personas
                </div>
                <img src="img/corporativo.png" alt="Evento Corporativo" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Evento Corporativo</h3>
                    <p class="text-gray-600 mb-4">Organiza conferencias y reuniones en un entorno profesional.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/corporativo-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/corporativo.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 4 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 250 Personas
                </div>
                <img src="img/concierto.png" alt="Concierto" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Concierto</h3>
                    <p class="text-gray-600 mb-4">Disfruta de eventos musicales con la mejor acústica y ambiente.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/concierto-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/concierto.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 5 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 180 Personas
                </div>
                <img src="img/teatro.png" alt="Teatro" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Teatro</h3>
                    <p class="text-gray-600 mb-4">Ideal para representaciones teatrales y espectáculos con un excelente ambiente.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/teatro-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/teatro.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Evento 6 -->
            <div class="event-container rounded-lg overflow-hidden shadow-lg">
                <div class="capacity-overlay">
                    <i class="fas fa-users mr-2"></i> 80 Personas
                </div>
                <img src="img/infantil.png" alt="Fiesta Infantil" class="event-image w-full h-64 object-cover transform transition-transform duration-300 hover:scale-110">
                <div class="p-4 event-content bg-white">
                    <h3 class="text-xl font-bold mb-2">Fiesta Infantil</h3>
                    <p class="text-gray-600 mb-4">Organizamos eventos seguros y divertidos para los más pequeños.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex space-x-4">
                            <a href="cotizaciones/infantil-cotizacion.php" class="bg-purple-600 text-white py-2 px-4 rounded-full flex items-center hover:bg-purple-600">
                                <i class="fas fa-calculator mr-2"></i> Cotizar
                            </a>
                            <a href="#" class="bg-red-500 text-white py-2 px-4 rounded-full flex items-center hover:bg-red-600">
                                <i class="fas fa-images mr-2"></i> Galería
                            </a>
                        </div>
                        <div class="flex items-center space-x-2">
                            <a href="servicios/infantil.php" class="text-blue-500 underline hover:text-blue-700">Más Info.
                            <i class="fas fa-arrow-right text-blue-500"></i></a>
                        </div>
                    </div>
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
