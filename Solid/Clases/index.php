<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    
    require_once "./tareas.php";

    // $tarea=new tareas(1, "crear diagrama de clases","Diagramas para la gestion de tareas", "CF002");
    // echo $tarea->agregarTarea();

    tareas::cambiarEstado(1, "Finalizado");
    
    ?>
    
</body>
</html>