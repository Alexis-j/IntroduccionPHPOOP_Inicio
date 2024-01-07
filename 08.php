<?php include 'includes/header.php';

<<<<<<< HEAD
// incluir las otras clases
=======
// incluir las otras clases 
>>>>>>> master
function mi_autoload($clase) {
    require  __DIR__ . '/clases/' . $clase . '.php';
}
spl_autoload_register('mi_autoload');

<<<<<<< HEAD
$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();
=======
$detalles = new App\Detalles();
echo "<br>";
$clientes = new App\Clientes();
>>>>>>> master

include 'includes/footer.php';
