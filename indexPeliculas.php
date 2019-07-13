<?php
require 'autoload.php';
$peliculas = Consulta::listar("movies", $pdo);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Películas Dani - Herni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    
</head>
<body>
    <?php require 'assets/header.php' ?>
    <?php require 'assets/navbar.php' ?>
    <div class="spacer"></div>
    <h2 class="text-center">Listado de Películas!!!</h2>
    <div class="spacer"></div>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nombre Película
                </th>
                <th>
                    Ver
                </th>
                <th>
                    Editar
                </th>
                <th>
                    Eliminar
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculas as $key => $pelicula) :?>
            <tr>
                <td>
                    <?= $pelicula['id'];?>
                </td>
                <td>
                    <?= $pelicula['title'];?>
                </td>
                <td>
                    <a href="perfilPelicula.php?id= <?= $pelicula['id'];?>">Ver</a>
                </td>
                <td>
                    <a href="editarPelicula.php?id= <?= $pelicula['id'];?>">Editar</a>
                </td>
                <td>
                    <a href="eliminarPelicula.php">Eliminar</a>
                </td>
            
            </tr>    
            <?php endforeach;?>
            
        
        </tbody>
    
    </table>
                    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>