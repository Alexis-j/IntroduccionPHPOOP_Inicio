<?php
include 'includes/header.php';

// Conectar a la base de datos
$db = new mysqli('localhost', 'root', 'llaves', 'bienesraices_crud');

// Crear el query
$query = "SELECT titulo, imagen FROM propiedades";

// Preparar el statement
$stmt = $db->prepare($query);

// Ejecutar el statement
$stmt->execute();

// Crear la variable
$stmt->bind_result($titulo, $imagen);

// Asignar el resultado
$stmt->fetch();

// Imprimir el resultado
while($stmt->fetch()) {
    var_dump($titulo);
    var_dump($imagen);
}

// Cerrar el statement
$stmt->close();

include 'includes/footer.php';
?>
