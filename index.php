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
        
   
    <div class="tareas-container">
     <?php $query = "SELECT * FROM tareas";
        $resultado_tareas = mysqli_query($conexion,$query);
            
            while ($row = mysqli_fetch_array($resultado_tareas)) { ?>
                <div class="caja-tarea">
                    <h2><?php echo $row['titulo'] ?></h2>
                    <p><?php echo $row['descripcion'] ?></p>
                    <p><?php echo $row['fecha'] ?></p>
                    <div class="botones">
                        <button><a href="editar_tarea.php?id=<?php echo $row['id']?>">📝</a></button>
                        <button><a href="editar_tarea.php?id=<?php echo $row['id']?>">🗑️</a></button>                        
                    </div>
                </div>                                

        <?php }?>
    </div>  
     </main>  

<?php include 'includes\footer.php'?>
