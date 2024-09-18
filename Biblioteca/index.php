<?php
class Libros{
    //Atributos
    public $titulo;
    public $autor;
    public $editorial;
    private $cantidad_disponible;
    
public function __construct($titulo, $autor, $editorial)
    {
        $this-> titulo = $titulo;
        $this-> autor = $autor;
        $this-> editorial = $editorial;  
    }
    public function setCantidad($cantidad_disponible){
        $this -> cantidad_disponible = $cantidad_disponible;
    }
    public function getCantidad(){
        return $this-> cantidad_disponible;
    }
}
?>