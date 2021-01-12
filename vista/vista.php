<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery351.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
     #superior{
         color:blue;
     }
    </style>
</head>
<body>
<div id="principal" class="container">
<div id="superior" >
 <nav class="navbar navbar-default">
    <div class="navbar-header">

    <a class="navbar-brand" href="#">Prueba de desarrollo  Alex Rubiano </a>
    </div>
    <ul class="navbar-nav ml-auto">
   
       <button id="btnUsuario" class="btn btn-primary">Usuarios</button>
      
    </ul>
    </nav>
</div>
<div id="inferior">
<?php

$nombreBoton = 'usuario';
$frase= '';
if($titulo != 'Comentarios'){$frase = 'Haga click sobre';}
echo '<h3>'.$frase .' '.$titulo.' </h3>';

foreach($resultado as $datos){
    if(!isset($_REQUEST['accion'])){
        echo '<ul>';
        echo '<li>';
        echo '<button id="usuario" class="usuario" value="'.$datos->id.'">';
        echo $datos->username.'-'.$datos->name; 
        echo '</button>';
        echo '</li>';
        echo '</ul>';
    }
    else {
        if($_REQUEST['accion']=='publicaciones'){
            echo '<ul>';
             echo '<li>';
            echo '<button id="publicacion" class="publicacion" value="'.$datos->id.'">';
            echo $datos->title; 
            echo '</button>';
            echo '</li>';
            echo '</ul>';
        }
        
        if($_REQUEST['accion']=='comentarios'){
            echo '<ul>';
            echo '<li>';
            echo $datos->body; 
            echo '</li>';
            echo '<li>';
            echo $datos->email; 
            echo '</li>';
            echo '</ul>';
            echo '<hr>';
        }
    }
   
}


   ?> 
</div>
</div>
    
</body>
</html>
<script src="js/app.js"></script>
<script src="js/bootstrap.min.js"></script>
