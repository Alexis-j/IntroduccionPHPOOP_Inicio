<!-- herencia de clases  -->

<?php include 'includes/header.php';

class Transporte {
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

class Bicicleta extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas  Y NO GASTA GASOLINA";
    }  
}	

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }
    public function getTransition() : string {
        return "  y tiene una transmisión " . $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);

echo $bicicleta->getInfo();
echo "<hr>";

$automovil = new Automovil(4, 5, 'Automatica');
echo $automovil->getInfo();
echo $automovil->getTransition();   



include 'includes/footer.php';