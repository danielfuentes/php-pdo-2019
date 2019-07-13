<?php

class Consulta
{
    public static function listar($tabla, $base)
    {
        $sql = "SELECT * FROM $tabla";    
        $query = $base->prepare($sql);
        $query->execute();

        $resultados = $query->fetchAll(PDO::FETCH_ASSOC);

        return $resultados;
    }

    public static function mostrar($base, $tabla, $id)
    {
        $sql = "SELECT * FROM $tabla WHERE id = $id";    
        $query = $base->prepare($sql);
        $query->execute();
        
        $resultados = $query->fetch(PDO::FETCH_ASSOC);
        
        return $resultados;
    }

    public static function insertarPelicula($pelicula, $base)
    {
        $titulo = $pelicula->getTitle();
        $rating = $pelicula->getRating();
        $premios = $pelicula->getAwards();
        $fecha_estreno = $pelicula->getReleaseDate();
        $duracion = $pelicula->getLength();
        $genero = $pelicula->getGenre_id();
        
        $stmt = $base->prepare("INSERT INTO movies (title, rating, awards, release_date, length, genre_id) VALUES (:title, :rating, :awards, :release_date, :length, :genre_id)");

        $stmt->bindParam(':title', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':rating', $rating, PDO::PARAM_STR);
        $stmt->bindParam(':awards', $premios, PDO::PARAM_INT);
        $stmt->bindParam(':release_date', $fecha_estreno, PDO::PARAM_STR);
        $stmt->bindParam(':length', $duracion, PDO::PARAM_INT);
        $stmt->bindParam(':genre_id', $genero, PDO::PARAM_INT);

        $stmt->execute();
    }

    public static function updateMovie($data, $pdo)
    {
        $columns = ["title","rating","awards","length","genre_id", "release_date"];
        $params = [];
        $setStr = "";

        foreach ($columns as $column) {
            if (isset($data[$column]) && $column != "id") {
                $setStr .= "`$column` = :$column,";
                $params[$column] = $data[$column];
            }
        };

        
        $setStr = rtrim($setStr, ",");
        $params['id'] = $data['id'];

        $pdo->prepare("UPDATE movies SET $setStr WHERE id = :id")->execute($params);
    }

    static public function eliminarPelicula($pdo,$tabla,$pelicula){
        /*
        $sql = "delete from $tabla where title = :pelicula";
        $stmt= $pdo->prepare($sql);
        $stmt->bindValue(':pelicula', $pelicula);
        $stmt->execute();*/
        //Otra forma de hacerlo de forma directa
        $sql = "delete from $tabla where id = '$pelicula'";
        $pdo->exec($sql);


    }    

}



