<?php
    require 'autoload.php';
    $id = $_GET['id'];
    $pelicula = Consulta::mostrar($pdo, "movies", $id);
    $generos = Consulta::listar('genres', $pdo);

    $genero_temporal = $generos[$pelicula['genre_id']] == 0 ? $generos[$pelicula['genre_id']] : $generos[$pelicula['genre_id'] - 1];

    $fecha_temporal = $pelicula['release_date'];

    $time = strtotime($fecha_temporal);
    $formateado = date('Y-m-d', $time);


    if($_POST) {
        Consulta::updateMovie($_POST, $pdo);
        header('Location: perfilPelicula.php?id=' . $id);
    }


?>

<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Peliculas - Editar Pelicula</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        
    <?php include("assets/header.php");?>
    <?php include("assets/navbar.php");?>
    <h3 class="text-center">Modificar la Película</h3>
        <div class="row mt-5">
            <div class="col-lg-4 offset-lg-4">

                <form action="" method="post" enctype="multipart/formdata">
                <input type="hidden" name="id" value="<?=$id ?>">
                    <div class="form-group">
                        <label for="nombrePelicula">Nombre</label>
                        <input type="text" class="form-control" name="title" value="<?=$pelicula['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="duracionPelicula">Duracion</label>
                        <input type="number" class="form-control" name="length" value="<?=$pelicula['length'] ?>">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="genre_id" id="">
                        <option value="<?=$genero_temporal['id']?>" selected><?=$genero_temporal['name'] ?></option>
                            <?php foreach($generos as $genero): ?>
                            <option value="<?=$genero['id']?>"><?= $genero['name']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="raitingPelicula">Raiting</label>
                        <input type="number" class="form-control" name="rating" value="<?=$pelicula['rating'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="awards">Awards</label>
                        <input type="number" class="form-control" name="awards" value="<?=$pelicula['awards'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="release-date">Release Date</label>
                        <input type="date" class="form-control" name="release_date" value="<?=$formateado ?>">
                    </div>
                    <button type="submit" class="btn btn-danger">Modificar Pelicula</button>
                </form>
                <a href="indexPeliculas.php">Volver</a>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
