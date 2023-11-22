<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <form action="response.php" method="post">
            <label for="">Ingrese numero limite</label>
            <input type="number" name="numero" id="numero"> <!--required-->
            <input type="submit" value="Aceptar">
            <input type="reset" value="Limpiar">
        </form>    
    </div>        
</body>
</html>