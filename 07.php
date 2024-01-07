<?php include 'includes/header.php';
// poliformismo

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}


class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {

    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class  Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
<<<<<<< HEAD

=======
        
>>>>>>> master
    }
    public function getTransition() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color;
    }

    public function getColor() : string {
        return "El color es " . $this->color;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(1, 3));

echo "<hr>";

var_dump($automovil = new Automovil(4, 5, 'Rojo'));
echo "</pre>";

echo $automovil->getInfo();

echo "<br>";
echo$automovil->getColor();
echo "<hr>";
echo $transporte->getInfo();


include 'includes/footer.php';
