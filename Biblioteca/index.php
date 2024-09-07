<?php
class Libros{
    //Atributos
    public $titulo;
    public $autor;
    public $editorial;
    //Otros atributos comunes
    public $cantidad;
    private $cantidad_disponible;

    

    function __construct($titulo, $autor, $editorial, $cantidad)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editorial = $editorial;
        $this->cantidad = $cantidad;
    }

    function printLibro()
    {
        return "<br>Titulo: $this->titulo -<br> autor : $this->autor -<br> editorial: $this->editorial -<br>Cantidad: $this->cantidad \n";
    }
}

$autoayuda = new Libros("Como ganar amigos e influir sobre las personas", "Napoleon Hill", "Mcgrawhill", 2);
$Finanzas = new Libros("Finanzas personales", "Crouser", "2025", 1);

echo $autoayuda->printLibro();
echo $Finanzas->printLibro();

class Biblioteca{
    
}

?>