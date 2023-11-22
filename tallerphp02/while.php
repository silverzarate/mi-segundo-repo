<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <div>
        <h3>Bucle While</h3>
    </div>   
    <div>
        <?php
            $indice= 1;
            $fin = rand(1,100);
                while($indice<=$fin){
                    echo'valor del indice: ';
                    echo $indice; 
                    echo'<br>';
                    $indice++;
                }
        ?>    
    </div>
</body>
</html>  