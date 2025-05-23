<?php include 'database.php'?>
<?php include 'includes\header.php'?>
    <main>
        <form action="guardar_tarea.php" method="POST">
            <div class="form-group">
                <input type="text" name="titulo" placeholder="Tarea" autofocus>                
            </div>
            <div class="form-group">
                <textarea name="descripcion" id="" placeholder="Agrega una descripción"></textarea>               
            </div>
            <input type="submit" value="Guardar" name="guardar_tarea">
        </form>
    </main>

<?php include 'includes\footer.php'?>
