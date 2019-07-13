<?php
    require 'autoload.php';

    $generos = Consulta::listar('genres', $pdo);

    if($_POST) {
       

        $pelicula = new Pelicula($_POST['title'], $_POST['awards'], $_POST['length'], $_POST['rating'], $_POST['release_date'], $_POST['genre_id']);

        Consulta::insertarPelicula($pelicula, $pdo);
        
    }   


?>

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Peliculas - Dani - Herni</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        
    <?php include("assets/header.php");?>
    <?php include("assets/navbar.php");?>
        <h3 class="text-center">Registro de Películas</h3>
       <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">
                <form action="" method="post" enctype="multipart/formdata">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="duracionPelicula">Duración</label>
                        <input type="number" class="form-control" name="length">
                    </div>
                    <div class="form-group">
                        <label for="generos">Género de la Película</label>
                        <select class="form-control" name="genre_id" id="genre_id">
                            <option value="" selected>Seleccione Genero...</option>
                            <?php foreach($generos as $genero): ?>
                            <option value="<?= $genero['id']?>"><?= $genero['name']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="raitingPelicula">Raiting</label>
                        <input type="number" class="form-control" name="rating">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input type="number" class="form-control" name="awards">
                    </div>
                    <div class="form-group">
                        <label for="release-date">Release Date</label>
                        <input type="date" class="form-control" name="release_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar Película</button>
                </form>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
