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
    public function agregarLibros(){
        //cargamos la lista de libros
        //y actualizamos
        $array_libros = $this -> cargarListaLibros();
        
        $array_libros[]=[
            'titulo'=>$this->titulo,
            'autor'=>$this->autor,
            'editorial'=>$this->editorial,
            'cantidad_disponible'=>$this->getCantidad()
        ];
        $this->guardarLibrosJSON($array_libros);
        echo "Libro guardado exitosamente";
    }
    public static function cargarListaLibros(){
        if (file_exists('./listaLibros.json')){
            $informacion_json = file_get_contents('./listaLibros.json');
            return json_decode($informacion_json, true);
        }
        return [];
    }
    private static function guardarLibrosJSON($listaLibros){
        $json_codificado = json_encode($listaLibros, JSON_PRETTY_PRINT);
        file_put_contents('./listaLibros.json', $json_codificado);
    }
    public static function buscarLibro($titulo)
    {
        $libros = self::cargarListaLibros();
        foreach($libros as $libro)
        {
            $libro_encontrado=false;
            {
                if(($libro['titulo']==$titulo||$libro['autor']==$titulo||$libro['editorial']==$titulo)&& $libro['cantidad_disponible']>=3)
                {
                    echo "libro encontrado <br>";
                    echo "Titulo: ".$libro['titulo']."<br>";
                    echo "Autor: ".$libro['autor']."<br>";
                    echo "Editorial: ".$libro['editorial']."<br>";
                    //echo $libro
                    $libro_encontrado = true;
                }else{
                    echo "libro no encontrado o no disponible";
                }
            }
        }
    }
}
?>