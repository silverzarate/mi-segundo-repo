<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" 
content="width=, initial-scale=1.0">
   <title>Document</title>
</head>       
<body>
   <h2>Ejercicio de Fecha</h2>
   
   <?php
   date_default_timezone_get('America/Asuncion');
      $dia_ingles = date('D');
      if($dia_ingles =='Sun') {
         $dia_es = 'Domingo';
      } elseif ($dia_ingles =='Mon') {
         $dia_es = 'Lunes';
      } elseif ($dia_ingles =='Tue') {
         $dia_es = 'Martes';
      } elseif ($dia_ingles =='Wed') {
         $dia_es = 'Miercoles';   
      } elseif ($dia_ingles =='Thu') {
         $dia_es = 'Jueves';     
      } elseif ($dia_ingles =='Fri') {
         $dia_es = 'Viernes';      
      } elseif ($dia_ingles =='Sat') {
         $dia_es = 'Sabado';    
            
      }   
      echo "El dia de la semana es $dia_es";
   ?> 
</body>
   
</html>
