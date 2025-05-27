<?php

include 'database.php'; // Traer la variable $conexion

if (isset($_POST['guardar_tarea'])) {

    // Guarda los valores que recibe del index en variables para poder generar la consulta
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    // $horaFinal = $_POST['hora-final'];

    // Se crea la consulta 
    
    $consulta = "INSERT INTO tareas(titulo, descripcion) VALUES('$titulo', '$descripcion')";

    $resultado = mysqli_query($conexion, $consulta);

    if(!$resultado){
        die("Falla de consulta");
    }

    header('Location: index.php');    
    


}

?>