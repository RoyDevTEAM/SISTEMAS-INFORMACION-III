<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("../datos/bd.php");
    
    // Preparar la consulta SQL
    $sentencia = $conexion->prepare(
        "SELECT * FROM Usuario WHERE Email = :email AND Password = :password"
    );

    // Obtener valores del formulario gwherhweiurhiuwehriuhweiuriuwh irvw rbehviur b iuehwiusrfhiuwehjriu  iue rfiuw iuhiursdiufwhiu hiuhiurshiuhseiurfiuwehsdiufhiuesrhfiuw < uies iuiuesthiu thiutiodusoituoisdutoi udsfoi utois utoi u
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Bind de parámetros
    $sentencia->bindParam(":email", $email);
    $sentencia->bindParam(":password", $password);
    
    // Ejecutar la consulta
    $sentencia->execute();
    $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
    
    if ($registro) {
        // Guardar información en la sesión
        $_SESSION['usuario'] = $registro["Nombre"];
        $_SESSION['logueado'] = true;
        
        // Redirigir a main.php
        header("Location: main.php");
        exit();
    } else {
        $mensaje = "Error: El usuario o contraseña son incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Salón de Eventos</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Iconos de Heroicons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/heroicons/1.0.6/outline/heroicons-outline.min.css" rel="stylesheet">
    <!-- Font Awesome (opcional para iconos adicionales) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        /* Estilo personalizado para la imagen de fondo */
        .bg-login {
            background-image: url('img/fondo-login.png'); /* Ruta a tu imagen */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-100 bg-login flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white bg-opacity-90 rounded-lg shadow-lg p-8">
        <div class="text-center">
            <!-- Círculo con el logo -->
            <div class="flex justify-center">
                <div class="w-24 h-24 rounded-full bg-white flex items-center justify-center shadow-md -mt-16">
                    <i class="fas fa-gem text-gray-800 dark:text-white text-2xl"></i>Logo
                </div>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mt-4">Iniciar Sesión</h2>
            <p class="text-gray-600 mt-2">Accede a tu cuenta del Salón de Eventos</p>
        </div>

        <!-- Formulario de inicio de sesión -->
        <form action="login.php" method="POST" class="mt-8">
            <!-- Email -->
            <div class="relative">
                <label for="email" class="sr-only">Correo Electrónico</label>
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h-1v-2a4 4 0 10-8 0v2H7m8 0v5a2 2 0 002 2h1a2 2 0 002-2v-5m-6 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5m6 0h6" />
                    </svg>
                </div>
                <input type="email" id="email" name="email" class="pl-10 w-full py-3 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Correo Electrónico" required>
            </div>

            <!-- Password -->
            <div class="relative mt-6">
                <label for="password" class="sr-only">Contraseña</label>
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v6m0 0l-3-3m3 3l3-3m0-6V9a3 3 0 00-6 0v3m6 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <input type="password" id="password" name="password" class="pl-10 w-full py-3 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Contraseña" required>
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-800">Recuérdame</label>
                </div>
                <div>
                    <a href="#" class="text-sm text-blue-600 hover:text-blue-500">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full mt-8 bg-blue-600 text-white py-3 rounded-md font-semibold hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500">Iniciar Sesión</button>
        </form>

        <!-- Divider -->
        <div class="mt-6 relative">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class=" px-2 text-gray-600">O inicia sesión con</span>
            </div>
        </div>
       <!-- Social Login Options -->
    <div class="mt-6 grid grid-cols-2 gap-2">
        <!-- Google Button -->
        <button class="w-full max-w-xs font-bold shadow-sm rounded-lg py-1 bg-gray-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-3">
        <div class="bg-white p-2 rounded-full">
            <svg class="w-6" viewBox="0 0 533.5 544.3">
                <path
                    d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                    fill="#4285f4" />
                <path
                    d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                    fill="#34a853" />
                <path
                    d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                    fill="#fbbc04" />
                <path
                    d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                    fill="#ea4335" />
            </svg>
        </div>
        <span class="ml-4">
            Google
        </span>
    </button>

        <!-- GitHub Button -->
        <button class="w-full max-w-xs font-bold shadow-sm bg-gray-100 rounded-lg py-3 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline mt-3">
            <div class="bg-white p-2 rounded-full">
                <svg class="w-6" viewBox="0 0 32 32">
                    <path fill-rule="evenodd"
                        d="M16 4C9.371 4 4 9.371 4 16c0 5.3 3.438 9.8 8.207 11.387.602.11.82-.258.82-.578 0-.286-.011-1.04-.015-2.04-3.34.723-4.043-1.609-4.043-1.609-.547-1.387-1.332-1.758-1.332-1.758-1.09-.742.082-.726.082-.726 1.203.086 1.836 1.234 1.836 1.234 1.07 1.836 2.808 1.305 3.492 1 .11-.777.422-1.305.762-1.605-2.664-.301-5.465-1.332-5.465-5.93 0-1.313.469-2.383 1.234-3.223-.121-.3-.535-1.523.117-3.175 0 0 1.008-.32 3.301 1.23A11.487 11.487 0 0116 9.805c1.02.004 2.047.136 3.004.402 2.293-1.55 3.297-1.23 3.297-1.23.656 1.652.246 2.875.12 3.175.77.84 1.231 1.91 1.231 3.223 0 4.61-2.804 5.621-5.476 5.922.43.367.812 1.101.812 2.219 0 1.605-.011 2.898-.011 3.293 0 .32.214.695.824.578C24.566 25.797 28 21.3 28 16c0-6.629-5.371-12-12-12z" />
                </svg>
            </div>
            <span class="ml-4">
                GitHub
            </span>
        </button>
    </div>


        <!-- Sign Up Link -->
        <p class="mt-6 text-center text-gray-600">¿No tienes una cuenta? <a href="#" class="text-blue-600 hover:text-blue-500">Regístrate</a></p>
    </div>

</body>
</html>
