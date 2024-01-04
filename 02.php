<?php

declare(strict_types=1);
include 'includes/header.php';

//definir una clase con la palabra reservada class
class  Producto  {
    // Public - se puede acceder desde cualquier lugar(clase y objeto)
    // Protected - se puede acceder desde la clase que lo define y desde clases heredadas
    // Private - solo se puede acceder desde la clase que lo define

    public function __construct( protected string $nombre, public int $precio, public bool $disponible)
    {
    }
    public function mostrarProducto() : void {
        echo "El producto es: " . $this->nombre . " y su precio es de: " . $this->precio . " y esta disponible: " . $this->disponible;
    }
    public function getNombre() : string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto( 'Tablet', 200, true);
// $producto->mostrarProducto();

echo $producto->getNombre();
$producto->setNombre('Nuevo Nombre');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto( 'Monitor Curvo 49', 500, true);
// $producto2->mostrarProducto();

// echo $producto2->getNombre();

// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";


include 'includes/footer.php';
