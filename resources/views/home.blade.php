<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Healtnny</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="{{ asset('js/app.js') }}" defer></script>

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
                justify-content: space-between;
                align-items: center;
            }
            .navbar .logo {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                font-size: 1.5rem;
                font-weight: 600;
                color: black;
            }
            .navbar ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
            }
            .navbar a, .navbar button {
                margin-left: 1rem;
                text-decoration: none;
                font-weight: 600;
                color: black;
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                transition: color 0.2s;
                background: none;
                border: none;
                cursor: pointer;
                font-size: inherit;
            }
            .navbar a:hover, .navbar button:hover {
                color: #333;
            }
            .navbar a.disabled {
                color: #999;
                cursor: not-allowed;
            }
            .modal {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 2000;
                justify-content: center;
                align-items: center;
            }
            .modal-content {
                background-color: white;
                padding: 2rem;
                border-radius: 8px;
                text-align: center;
                max-width: 400px;
                width: 90%;
            }
            .modal-content p {
                margin-bottom: 1rem;
                font-size: 1.1rem;
            }
            .modal-content a {
                margin: 0 0.5rem;
                padding: 0.5rem 1rem;
                background-color: #90EE90;
                color: black;
                text-decoration: none;
                border-radius: 0.375rem;
                font-weight: 600;
            }
            .modal-content a:hover {
                background-color: #78c878;
            }
            .content-section {
                margin-top: 80px; 
                padding: 2rem;
                display: grid;
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            .content-section img {
                max-width: 400px;
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
                <div class="logo">Healtnny</div>
                <ul>
                    @auth
                        <li><a href="{{ route('usuario.miperfil') }}">Mi Perfil</a></li>
                        <li><a href="{{ route('usuario.tarea.ver') }}">Tareas</a></li>
                        <li><a href="{{ route('usuario.reporte') }}">Reportes</a></li>
                        <li><a href="{{ route('usuario.notificacion') }}">Notificaciones</a></li>
                    @else
                        <li><a href="#" class="restricted">Mi Perfil</a></li>
                        <li><a href="#" class="restricted">Tareas</a></li>
                        <li><a href="#" class="restricted">Reportes</a></li>
                        <li><a href="#" class="restricted">Notificaciones</a></li>
                    @endauth
                    <li><a href="{{ route('FAQ') }}">FAQ</a></li>
                </ul>
                <ul>
                    @if (Route::has('login'))
                        @auth
                            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit">
                                    Cerrar Sesión
                                </button>
                            </form>
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
                </ul>
            </nav>

            <!-- Modal para usuarios no autenticados -->
            <div class="modal" id="authModal">
                <div class="modal-content">
                    <p>Debes iniciar sesión o registrarte para acceder a esta sección.</p>
                    <a href="{{ route('login') }}">Iniciar Sesión</a>
                    <a href="{{ route('register') }}">Registrar</a>
                </div>
            </div>

            @auth
                <div class="content-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    

                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="content-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">{{ __('Acceso Restringido') }}</div>
                                    <div class="card-body">                                    
                                        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-link">Registrar</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endauth

            @verbatim
            <script>
                try {
                    const restrictedLinks = document.querySelectorAll('.restricted');
                    const authModal = document.getElementById('authModal');
                    console.log('Enlaces restringidos:', restrictedLinks);
                    console.log('Modal de autenticación:', authModal);

                    function showModal() {
                        authModal.style.display = 'flex';
                    }

                    function hideModal() {
                        authModal.style.display = 'none';
                    }

                    restrictedLinks.forEach(link => {
                        link.addEventListener('click', (e) => {
                            e.preventDefault();
                            console.log('Enlace clicado:', link);
                            showModal();
                        });
                    });

                    authModal.addEventListener('click', (e) => {
                        if (e.target === authModal) {
                            console.log('Clic fuera del modal');
                            hideModal();
                        }
                    });
                } catch (error) {
                    console.error('Error de JavaScript:', error);
                }
            </script>
            @endverbatim
        </div>
    </body>
</html>