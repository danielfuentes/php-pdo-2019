<?php
//MSc. Angel Daniel Fuentes Segura
//Hernan Facundo
//Este pequeño sistema se lo creamos para que vean como incorporar PHP -PDO en sus proyectos integradores  
require 'classes/baseMYSQL.php';
require 'classes/Consulta.php';
require 'classes/Validador.php';
require 'classes/Pelicula.php';
//Declaramoslas  variables - Les recuerdoamos que esto lo pueden hacer ustedes de diversas formas
$host = "localhost";
$bd = "movies_db";
$usuario = "root";
$password = "root";
$puerto = "3306";
$charset = "utf8mb4";
//Ojo: Para los que trabajan con MAC: deben colocar el puerto: 8889

$pdo = BaseMYSQL::conexion($host,$bd,$usuario,$password,$puerto,$charset);







