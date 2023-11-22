<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once ('personas.php');
        $persona1 = new Persona('Juan Perez', 'Profesor');
        $persona2 = new Persona('Sofia ayala', 'Enfermera');
        $persona3 = new Persona('Maria Zarate', 'Developer');
        $persona1->presentar();
        $persona2->presentar();
        $persona3->presentar();
        echo "<br>Nombre1: " . $persona1->getNombre();
        echo "<br>Nombre2: " . $persona2->getNombre();
        echo "<br>Nombre3: " . $persona3->getNombre();
        echo "<br><br>";
        
        var_dump($persona1);
        var_dump($persona2);
        var_dump($persona3);
    ?>   
</body>
</html>