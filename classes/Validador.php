<?php

class Validate
{
  
    public static function validarPeliculas(Pelicula $pelicula)
    {
        $errores = [];

        $titulo = trim($pelicula->getTitle());
        if($titulo = '') {
            $errores['title'] = "Por favor, ingresar el título de la película";
        }

        $rating = $pelicula->getRating();
        
        if($rating = '') {
            $errores['rating'] = "Por favor, ingresar el rating";
        }

        $release_date = $pelicula->getReleaseDate();
        if($release_date = '') {
            $errores['release_date'] = "Por favor, ingresar la fecha de lanzamiento";
        }

        $duracion = $pelicula->getLength();
        if($duracion < 60) {
            $errores['lentgh'] = "Por favor, ingresar duración de la película, no menor de 60 minutos";
        }

        return $errores;
    }
}