<?php

declare(strict_types=1);
include 'includes/header.php';

//definir una clase

class  Producto  {
    public function __construct( public string $nombre, public int $precio, public bool $disponible) {
    }
}

$producto = new Producto( 'Tablet', 200, true);

echo "El producto es: " . $producto->nombre; . " y su precio es de: " . $producto->precio;


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto( 'Monitor Curvo 49', 500, true);
echo "<pre>";
var_dump($producto2);
echo "</pre>";


include 'includes/footer.php';
