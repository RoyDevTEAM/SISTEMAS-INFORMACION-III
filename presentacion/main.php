<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salón de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        .navbar-transparent {
            background-color: rgba(255, 255, 255, 0.8);
            transition: background-color 0.3s ease;
        }
    </style>

</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navbar HOLAA PRUEBAAA-->
    <nav id="navbar" class="border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-gray-700  bg-white shadow-lg sticky top-0 z-50">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <!-- Ícono de perlas -->
            <i class="fas fa-gem text-gray-800 dark:text-white text-2xl"></i>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Salón de Eventos</span>
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                <a href="main.php" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                </li>
                <li>
                <a href="eventos.php" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Eventos</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Reservas</a>
                </li>
                <li>
                <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contacto</a>
                </li>

                <ul  class="font-medium mt-4 rounded-lg bg-gray-50 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="login.php" class="text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500 flex items-center space-x-2">
                            <i class="fas fa-sign-in-alt"></i>
                            <span>Iniciar Sesión</span>
                        </a> 
                    </li>
                </ul>
            </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('img/img-main.png');">
        <div class="bg-black bg-opacity-50 h-full flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Organiza el Evento de tus Sueños</h1>
            <p class="text-lg mb-8">Espacios ideales para bodas, fiestas, y eventos corporativos.</p>
            <a href="eventos.php" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded">Ver Eventos</a>
        </div>
    </section>

    <!-- Servicios Section -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-8">Nuestros Servicios</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-glass-cheers text-indigo-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Bodas</h3>
                <p>El lugar perfecto para tu día especial.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-birthday-cake text-indigo-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Fiestas</h3>
                <p>Organiza tus celebraciones con estilo.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                <i class="fas fa-briefcase text-indigo-600 text-5xl mb-4"></i>
                <h3 class="text-xl font-bold mb-2">Eventos Corporativos</h3>
                <p>Espacios para reuniones y conferencias.</p>
            </div>
        </div>
    </section>

    <!-- Galería de Imágenes -->
    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Galería de Eventos</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/boda.png" alt="Evento 1" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Boda</h3>
                    <p class="text-gray-600 mb-4">Celebra el día más especial en un entorno elegante, único y especial.</p>
                    <div class="flex justify-end space-x-4">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-save text-xl"></i>
                        </a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-download text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/fiesta.png" alt="Evento 2" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Fiesta</h3>
                    <p class="text-gray-600 mb-4">Disfruta de una celebración animada con tus amistades, amigos, familiares.</p>
                    <div class="flex justify-end space-x-4">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-save text-xl"></i>
                        </a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-download text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/corporativo.png" alt="Evento 3" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Corporativo</h3>
                    <p class="text-gray-600 mb-4">Organiza reuniones y conferencias con todo lo necesario para el éxito.</p>
                    <div class="flex justify-end space-x-4">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-save text-xl"></i>
                        </a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-800">
                            <i class="fas fa-download text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto py-12">
        <h2 class="text-3xl font-bold text-center mb-8">Más Momentos Especiales</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Evento 1 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/boda2.png" alt="Evento 1" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Momentos Inolvidables</h3>
                    <p class="text-gray-600">Una selección de momentos especiales capturados en nuestras bodas. Cada imagen cuenta una historia única.</p>
                </div>
            </div>

            <!-- Evento 2 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/fiesta2.png" alt="Evento 2" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Diversión y Alegría</h3>
                    <p class="text-gray-600">Revive la diversión y alegría de nuestras fiestas con esta selección de imágenes vibrantes y llenas de vida.</p>
                </div>
            </div>

            <!-- Evento 3 -->
            <div class="rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-110">
                <img src="img/corporativo2.png" alt="Evento 3" class="w-full h-64 object-cover">
                <div class="p-4 bg-white">
                    <h3 class="text-xl font-bold mb-2">Profesionalismo y Estilo</h3>
                    <p class="text-gray-600">Nuestros eventos corporativos están diseñados para ofrecer el máximo profesionalismo y estilo. Descubre cómo nos destacamos.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Características del Salón -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-bold text-center mb-8">Características del Salón</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Card 1 -->
            <div class="p-6 rounded-lg shadow-lg text-white" style="background: linear-gradient(135deg, #00ced1, #20b2aa);">
                <div class="flex items-center mb-4">
                    <i class="fas fa-users text-4xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Capacidad</h3>
                        <p class="text-4xl font-bold mb-4">300</p>
                    </div>
                </div>
                <p>El salón puede albergar hasta 300 personas, ideal para grandes eventos.</p>
            </div>

            <!-- Card 2 -->
            <div class="p-6 rounded-lg shadow-lg text-white" style="background: linear-gradient(135deg, #ffa07a, #ff7f50);">
                <div class="flex items-center mb-4">
                    <i class="fas fa-palette text-4xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Decoración Personalizada</h3>
                        <p class="text-4xl font-bold mb-4">Variada</p>
                    </div>
                </div>
                <p>Ofrecemos múltiples opciones de decoración para adaptarnos a tu estilo y preferencias.</p>
            </div>

            <!-- Card 3 -->
            <div class="p-6 rounded-lg shadow-lg text-white" style="background: linear-gradient(135deg, #4169e1, #6495ed);">
                <div class="flex items-center mb-4">
                    <i class="fas fa-laptop text-4xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Tecnología de última generación</h3>
                        <p class="text-4xl font-bold mb-4">Moderna</p>
                    </div>
                </div>
                <p>Equipos audiovisuales de alta calidad para presentaciones y música.</p>
            </div>

            <!-- Card 4 -->
            <div class="p-6 rounded-lg shadow-lg text-white" style="background: linear-gradient(135deg, #9370db, #ba55d3);">
                <div class="flex items-center mb-4">
                    <i class="fas fa-utensils text-4xl mr-4"></i>
                    <div>
                        <h3 class="text-xl font-bold mb-2">Catering de primera</h3>
                        <p class="text-4xl font-bold mb-4">Personalizado</p>
                    </div>
                </div>
                <p>Servicio de catering con menús personalizados para cada tipo de evento.</p>
            </div>
        </div>
    </section>




    <!-- Testimonios de Clientes -->
    <section class="bg-gray-100 py-16">
        <h2 class="text-3xl font-bold text-center mb-8">Lo que dicen nuestros clientes</h2>
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic">"El mejor lugar para celebrar nuestra boda. Todo fue perfecto."</p>
                <p class="mt-4 font-bold">- Juan y María</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="text-gray-700 italic">"Excelente servicio y un ambiente inmejorable para eventos corporativos."</p>
                <p class="mt-4 font-bold">- Empresa XYZ</p>
            </div>
        </div>
    </section>


    <!-- Formulario de Contacto -->
    <section class="bg-gray-800 text-white py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8">Contáctanos</h2>
            <form action="procesar-contacto.php" method="POST" class="max-w-lg mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-bold mb-2">Nombre:</label>
                    <input type="text" id="name" name="name" class="w-full p-3 rounded-lg text-gray-900">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full p-3 rounded-lg text-gray-900">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-bold mb-2">Mensaje:</label>
                    <textarea id="message" name="message" rows="4" class="w-full p-3 rounded-lg text-gray-900"></textarea>
                </div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Mapa Interactivo -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-3xl font-bold mb-4">Encuéntranos</h2>
                <p class="mb-4">Dirección: Calle Falsa 123, Ciudad, País</p>
                <p class="mb-4">Teléfono: +123 456 7890</p>
                <p>Email: contacto@salondeeventos.com</p>
            </div>
            <div>
                <iframe src="https://maps.app.goo.gl/LqYwVXNiwyfhe3ur8" class="w-full h-64" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Salón de Eventos. Todos los derechos reservados.</p>
        </div>
    </footer>




    <script>
        // Escuchar el evento de scroll
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 50) { // Si la posición de scroll es mayor a 50px
                navbar.classList.add('navbar-transparent');
            } else {
                navbar.classList.remove('navbar-transparent');
            }
        });
    </script>
</body>
</html>
