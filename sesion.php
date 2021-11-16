<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <title>Agenda</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <a class="navbar-brand" href="#">
            <img src="./src/logo.png" width="30" height="30" /> Gestor de tareas</a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="registrar_tarea.html">Registrar tarea</a>
                </li>                                
            </ul>
    </nav>
  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  
                    <p>
                        
                    <?php

include("select.php"); //llamamos al select.php
?>

                    </p>
                </div>
            </div>
        </div>
    
       
   
     
</body>
</html>