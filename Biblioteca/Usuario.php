<?php
require_once "./Crear.php";
class Usuario {
    public $titulo;
 /**   public $autor;
    public $editorial;
    public $criterio;
    */
    public function __construct($titulo)
    {
        $this -> titulo = $titulo;
    }
    public static function buscarTitulo($titulo)
    {
    }
}
?>