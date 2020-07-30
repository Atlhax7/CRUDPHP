<?php
include './Service/conection.php';
function insert($nombre, $genero, $plataforma, $precio)
{
    $conection = getConection();
    $stmt = $conection->prepare("INSERT INTO videojuego (nombre, genero, plataforma,precio) VALUES (?, ?, ?,?)");
    $stmt->bind_param("sssd", $nombre, $genero, $plataforma, $precio);
    $stmt->execute();
    $stmt->close();
}
function findAll()
{
    $conection = getConection();
    $conection->query("SELECT * FROM VIDEOJUEGO");
    return $conection;
}?>

