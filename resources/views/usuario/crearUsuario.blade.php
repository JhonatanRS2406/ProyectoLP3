<style>
    form {
        display: flex;
        flex-direction: column;
        width: 300px;
        margin: auto;
    }
    div.box {
        border: 1px solid black;
        width: 300px;
        margin-top: 170px;
        margin-bottom: 160px;
        margin-right: 600px;
        margin-left: 600px;
        padding: 100px;
        background-color: rgba(76, 163, 226, 0.56);
    }
    h1 {
        text-align: center;
        color: rgba(110, 75, 169, 0.72);
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    .navegacion {
        background-color: rgba(76, 163, 226, 0.56);
        border: 1px solid black;
        padding: 10px;
        text-align: center;
        width: 100px;
    }

</style>
<div>
   
<div class="navegacion" >
     <ul><a href="/usuario/tarea/ver">Tareas</a></ul>
</div><br>

<div class="navegacion">
    <ul><a href="news.asp">Reportes</a></ul>
</div><br>

<div class="navegacion">
    <ul><a href="contact.asp">Notificaciones</a></ul>
</div><br>

<div class="navegacion">
     <ul><a href="about.asp">FAQ</a></ul>
</div class="navegacion">
        
   
       
    
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

</div>