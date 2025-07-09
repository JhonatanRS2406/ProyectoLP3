<head>FAQ</head>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Preguntas Frecuentes</title>

       
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
            .navbar a {
                margin-left: 1rem;
                text-decoration: none;
                font-weight: 600;
                color: black;
                padding: 0.5rem 1rem;
                border-radius: 0.375rem;
                transition: color 0.2s;
            }
            .navbar a:hover {
                color: #333;
            }
            .content {
                margin-top: 80px;
                padding: 2rem;
                text-align: center;
            }
            table {
                margin: 2rem auto;
                border-collapse: collapse;
                width: 50%;
            }
            th {
                border: 1px solid black;
                padding: 0.5rem;
                background-color: #f4f4f4;
            }
        </style>
    </head>
    <body>
        
        <nav class="navbar">
            <div class="logo">Healtnny</div>
            <ul>
                <li><a href="/usuario/miperfil">Mi Perfil</a></li>
                <li><a href="/usuario/tarea/ver">Tareas</a></li>
                <li><a href="/usuario/reporte">Reportes</a></li>
                <li><a href="/usuario/notificacion">Notificaciones</a></li>
                <li><a href="/FAQ">FAQ</a></li>
            </ul>
        </nav>
    
    
        <nav class="navbar">
            <div class="logo">Healtnny</div>
            <ul>
                <li><a href="/usuario/tarea/ver">Tareas</a></li>
                <li><a href="/usuario/reporte">Reportes</a></li>
                <li><a href="contact.asp">Notificaciones</a></li>
        </nav>
    
   
       
    
    <div class="box">
    <form >
        <h1 >Registrar Usuario</h1>
     <input type="text" name="nombreUsuario" placeholder="Nombre" required><br>
     <input type="text" name="nombreUsuario" placeholder="Apellidos" required><br>
     <input type="text" name="nombreUsuario" placeholder="Nacionalidad" required><br>  
     <input type="text" name="nombreUsuario" placeholder="Tarea" required><br>
     <input type="email" name="correoUsuario" placeholder="Correo" required><br>
     <input type="submit" value="Registrar Usuario">
    </form>

    </div>

