<?php
class Auto
{
    private $marca;
    private $modelo;
    private $color;
    private $precio;

    public function __construct($marca, $modelo, $color, $precio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }

    public function mostrarAuto()
    {
        return "<p>Este auto es un $this->marca, modelo $this->modelo, de color $this->color y su precio es de $this->precio</p>";
    }

    public function __get($propiedad)
    {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        }
    }

    public function __set($propiedad, $valor)
    {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        }
    }
}

$auto = new Auto("Toyota", "Corolla", "Blanco", 100000);
echo $auto->mostrarAuto();

$auto2 = new Auto("Ford", "Fiesta", "Rojo", 150000);
echo $auto2->mostrarAuto();

echo $auto->marca;
echo $auto2->marca;

$auto->marca = "Chevrolet";
echo $auto->marca;