<?php
/**
 * ejercicio1:
 * Crea una clase llamada "Vehiculo" con propiedades como marca
 * modelo y año, luego crear dos objetos que representen un automovil
 * y una motocicleta que caracteristicas cpmunes pueden abstraerse de 
 * una clase superior?
 * */
class Vehiculo{
    //Atributos
    public $marca;
    public $modelo;
    public $anio;
    //Otros atributos comunes
    public $espejosretovisores;
    public $color;

    function __construct($marca1, $modelo1, $anio1)
    {
        $this->marca = $marca1;
        $this->modelo = $modelo1;
        $this->anio = $anio1;
    }

    function printVehiculo()
    {
        return "Marca: $this->marca - Modelo : $this->modelo - año: $this->anio \n";
    }
}

$automovil = new Vehiculo("Toyota", "Corolla", 2024);
$motocicleta = new Vehiculo("Harley Davidson", "Crouser", 2025);

echo $motocicleta->printVehiculo();
echo $automovil->printVehiculo();

?>