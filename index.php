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
            <div class="form-group">
                <input class= "horario" type="time" name="hora-final" id="">                
            </div>
            <input type="submit" value="Guardar" name="guardar_tarea">
        </form>

        <table>
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripción</th>
                    <th>Fecha</th>                    
                </tr>
            </thead>
            <tbody>
                <?php $query = "SELECT * FROM tareas";
                $resultado_tareas = mysqli_query($conexion,$query);
                
                while ($row = mysqli_fetch_array($resultado_tareas)) { ?>
                    <tr>
                        <td><?php echo $row['titulo'] ?></td>
                        <td><?php echo $row['descripcion'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                    </tr>                                 

             <?php }?>
            </tbody>
        </table>
    </main>

<?php include 'includes\footer.php'?>
