<?php
require_once "./index.php";

class Administrar extends Libros{
    public function agregarLibros(){
        $array_libros = $this -> cargarListaLibros();
        $array_libros[]=[
            'titulo'=>$this->titulo,
            'autor'=>$this->autor,
            'editorial'=>$this->editorial,
            'cantidad_disponible'=>$this->getCantidad()
        ];
        $this->guardarLibrosJSON($array_libros);
    }
    public function cargarLitaLibros(){
        if (file_exists('./listaLibros.json')){
            $informacion_json = file_get_contents('./listaLibros.php');
            return json_decode($informacion_json, true);
        }
        return [];
    }
    private function guardarLibrosJSON($listaLibros){
        $json_codificado = json_encode($listaLibros, JSON_PRETTY_PRINT);
        file_put_contents('./listaLibros.json', $json_codificado);
    }

}
$agregar1 = new Administrar("La magia de pensar en grande", "David Schwartz", "McGrawhill");
$agregar1->setCantidad(2);
$agregar1->agregarLibros();
?>