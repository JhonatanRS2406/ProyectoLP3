<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Healtnny</title>


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <style>
            .navbar {
                background-color: #90EE90; 
                padding: 1rem;
                position: fixed;
                top: 0;
                right: 0;
                width: 100%;
                z-index: 1000;
                display: flex;
                justify-content: flex-end;
            }
            .navbar a {
                margin-left: 1rem;
                text-decoration: none;
                font-weight: 600;
            }
            .content-section {
                margin-top: 80px; 
                padding: 2rem;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }
            .content-section img {
                max-width: 100%;
                height: auto;
                border-radius: 8px;
            }
            .content-section p {
                line-height: 1.6;
                font-size: 1.1rem;
            }
            @media (max-width: 768px) {
                .content-section {
                    grid-template-columns: 1fr;
                }
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
           
            <nav class="navbar">
                @if (Route::has('login'))
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Iniciar Sesión
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Registrar
                            </a>
                        @endif
                    @endauth
                @endif
            </nav>

       
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <main class="mt-6">
                        <div class="content-section">
                     
                            <div>
                                <h2>Cuidado Personal y Salud</h2>
                                <p>
                                    El cuidado personal es fundamental para mantener un estilo de vida saludable. 
                                    Adoptar hábitos como una alimentación equilibrada, ejercicio regular y un buen 
                                    descanso puede mejorar tu bienestar físico y mental. Aquí te ofrecemos consejos 
                                    prácticos para cuidar de ti mismo todos los días.
                                </p>
                                <p>
                                    Desde rutinas de skincare hasta técnicas de relajación, el enfoque en la salud 
                                    integral te ayuda a vivir con más energía y felicidad. ¡Explora nuestras 
                                    recomendaciones para empezar hoy mismo!
                                </p>
                            </div>
                        
                            <div>
                                <img src="https://via.placeholder.com/400x300?text=Imagen+Cuidado+Personal" alt="Cuidado Personal">
                            </div>
                    
                            <div>
                                <h2>Consejos para una Vida Saludable</h2>
                                <p>
                                    Incorpora pequeños cambios en tu rutina diaria para mejorar tu salud. Bebe suficiente 
                                    agua, practica la meditación y asegúrate de incluir frutas y verduras en tu dieta. 
                                    Estos pasos simples pueden marcar una gran diferencia.
                                </p>
                            </div>
                         
                            <div>
                                <img src="https://via.placeholder.com/400x300?text=Imagen+Salud" alt="Salud">
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>