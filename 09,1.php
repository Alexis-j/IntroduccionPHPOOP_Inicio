<?php include 'includes/header.php';
require 'vendor/autoload.php'; 

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;

$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();
echo "<br>";

include 'includes/footer.php';
